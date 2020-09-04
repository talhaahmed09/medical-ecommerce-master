<?php
	if (isset($_COOKIE['user_admin']))
    {
        $res = setcookie('user_admin', '', time() - 3600,'/');
    } else {
        if (isset($_SESSION['user_admin'])) {
            unset($_SESSION['user_admin']);
        }
    }
	header('location: admin.php');
?>