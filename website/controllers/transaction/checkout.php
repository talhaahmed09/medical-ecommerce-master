<?php
	require_once 'website/models/transaction.php';
	require_once('lib/class.phpmailer.php');
	require_once('lib/class.smtp.php');
	require_once 'lib/sendmail.php';
	if (isset($_POST['transaction'])) {
		$customerName = $_POST['customer_name'];
		$customerAddress = $_POST['customer_address'];
		$customerPhone = $_POST['customer_phone'];
		$customerEmail = $_POST['customer_email'];
		$createTime = date('Y-m-d');
		$status = 0;

		if (isset($_SESSION['user_login'])) {
			$username = $_SESSION['user_login'];
		} else {
			$username = NULL;
		}

		if ($username != NULL) {
			$options = array(
				"where" => "username='$username'"
			);
            $user = Selecct_a_record('user', $options);
			$customerId = $user['Id'];
		} else {
			$customerId = NULL;
		}

		$config = array(
			'CustomerId'   => $customerId,
			'CustomerName' => $customerName,
			'Address'      => $customerAddress,
			'Email'        => $customerEmail,
			'Phone'        => $customerPhone,
			'CreateTime'   => $createTime,
			'Status'       => $status
		);
		$tranid  =  save('transaction', $config);

		if ($tranid > 0) {
			foreach ($_SESSION['cart'] as $item) {
				$productId       = $item['id'];
				$productQuantity = $item['quantity'];
				$config1 = array(
					'TransactionId' => $tranid,
					'ProductId' => $productId,
					'Quantity' => $productQuantity,
				);
				$oderid   =  save('order', $config1);
				if ($oderid < 0) {
					deleteOrder($tranid);
					header('Location: index.php?controller=transaction');
				}
			}

			$title = 'Giao dịch mua hàng thành công';
			$content = 'bạn đã mua :'.$productQuantity.'sản phẩm';

			;
			$nTo = $customerName;
			$mTo = 'chanhhiep.0201@gmail.com';
			$diachi = 'chanhhiep.0201@gmail.com';
			//test gui mail
			$mail = sendMail($title, $content, $nTo, $mTo,$diachicc='');
			if($mail==1)
			echo 'mail của bạn đã được gửi đi hãy kiếm tra hộp thư đến để xem kết quả. ';
			else echo 'Co loi!';

			if (isset($_SESSION['cart'])) {	
				unset($_SESSION['cart']);
			}
			header('Location: index.php?controller=transaction&action=success');
		}
	}
?>