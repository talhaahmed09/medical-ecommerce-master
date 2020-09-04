<?php
	function load_transaction_of($time)
	{
		$sql  = "SELECT *
				FROM `transaction`
				WHERE Createtime ='$time'";
		$query = mysql_query($sql) or die(mysql_error());
		if (mysql_num_rows($query) > 0) {
			while ($row = mysql_fetch_assoc($query)) {
				$data[] = $row;
			}
			mysql_free_result($query);
		}
		return $data;
	}


	// function load_user_of($time)
	// {
	// 	$sql  = "SELECT *
	// 			FROM `user`
	// 			WHERE Createtime = '$time'";
	// 	$query = mysql_query($sql) or die(mysql_error());
	// 	if (mysql_num_rows($query) > 0) {
	// 		while ($row = mysql_fetch_assoc($query)) {
	// 			$data[] = $row;
	// 		}
	// 		mysql_free_result($query);
	// 	}
	// 	return $data;
	// }

?>