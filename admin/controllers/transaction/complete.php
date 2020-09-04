<?php
	if (!empty($_POST)) {
		$transaction = array(
			'Id'            => intval($_POST['id']),
			'Status'        => '1',
		);
		// print_r($transaction);
		// die();
		$id_t = save('transaction', $transaction);
		header('location:admin.php?controller=transaction');
	}
?>