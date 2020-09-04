<?php
	Class Order
	{
		public function show()
		{
			$title    = 'Đơn hàng';
			$options  = array(
				'order_by' => 'Id ASC',
			);
			$order_detail =  get_all('orders', $options);
			$status = array(
			    0 => 'Chưa xử lý',
			    1 => 'Đã xử lý'
			);
			require('admin/views/order/index.php');
		}

		public function show_detail()
		{
			require('admin/models/order.php');
			$title = 'Hóa Đơn';
			if (isset($_GET['oid'])) $oid = intval($_GET['oid']); else $oid = 0;
			$order         = get_a_record('orders', $oid);
			$order_detail  = load_detail_order($oid);
			require('admin/views/order/edit.php');
		}
	}
?>