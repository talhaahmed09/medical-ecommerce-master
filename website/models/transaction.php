<?php
	function deleteOrder($id) {
		$sql = "DELETE FROM `order` WHERE TransactionId=$id";
		mysql_query($sql) or die(mysql_error());
	}
?>