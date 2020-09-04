<?php
	if (isset($_SESSION['cart'])) {
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
			unset($_SESSION['cart'][$id]);
		}
	}

	header("Location: index.php?controller=cart");
?>