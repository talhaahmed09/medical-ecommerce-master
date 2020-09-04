<?php
	function detele_product($id)
	{
		$id      = intval($id);
		$product = get_a_record('product', $id);
		$img1    = 'public/upload/images/'.$product['Image1'];
		if (is_file($img1)) {
			unlink($img1);
		}
		$sql     = "DELETE FROM product WHERE Id = $id";
		mysql_query($sql) or die(mysql_error());
	}
?>