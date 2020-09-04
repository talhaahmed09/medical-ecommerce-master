<?php
	if(isset($_POST['add_cart'])) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$price = $_POST['price'];
		if ($id == $_SESSION['cart'][$id]['id']) {
			$_SESSION['cart'][$id]['quantity']++;
		} else {
			$_SESSION['cart'][$id]['id'] = $id;
			$_SESSION['cart'][$id]['name'] = $name;
			$_SESSION['cart'][$id]['price'] = $price;
			$_SESSION['cart'][$id]['quantity'] = 1;
		}
	}
	if (isset($_POST['edit_cart'])) {
		$id = $_POST['id'];
		$_SESSION['cart'][$id]['quantity'] = $_POST['quantity'];
	}
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		if ($id == $_SESSION['cart'][$id]['id']) {
			$_SESSION['cart'][$id]['quantity']++;
		} else {
			$_SESSION['cart'][$id]['id'] = $id;
			$product = get_a_record('product', $id);
			print_r($product);
			die();
			$_SESSION['cart'][$id]['name'] = $product['Name'];
			$_SESSION['cart'][$id]['price'] = $product['Price'];
			$_SESSION['cart'][$id]['quantity'] = 1;
		}
	}
	header("Location: index.php?controller=cart");


?>