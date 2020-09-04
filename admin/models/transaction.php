<?php
	function load_detail_order($oid)
	{
		$sql  = "SELECT product.Id, product.Name, product.Price, product.Image1, order.ProductId,order.Quantity, order.TransactionId
				FROM `order`
				INNER JOIN product
				ON  order.ProductId = product.Id
				WHERE order.TransactionId = '$oid' ";
		$query = mysql_query($sql) or die(mysql_error());
		if (mysql_num_rows($query) > 0) {
			while ($row = mysql_fetch_assoc($query)) {
				$data[] = $row;
			}
			mysql_free_result($query);
		}
		return $data;
	}
?>