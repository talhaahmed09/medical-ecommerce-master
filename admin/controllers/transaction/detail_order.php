<?php
	require('admin/models/transaction.php');
	$title = 'Hóa Đơn';
	if (isset($_GET['oid'])) $oid = intval($_GET['oid']); else $oid = 0;
	$transaction         = get_a_record('transaction', $oid);
	$order_detail        = load_detail_order($oid);
	
	require('admin/views/transaction/detail_order.php');
?>