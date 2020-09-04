<?php
     if (!isset($_COOKIE['user_admin']) && !isset($_SESSION['user_admin'])) {
        header('Location: admin.php?controller=auth&action=login');
     }

?>
<div id="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">SB Admin</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
                    <?php
                        if(isset($_COOKIE['user_admin'])) {
                            echo $_COOKIE['user_admin'];
                        } elseif(isset($_SESSION['user_admin'])) {
                            echo $_SESSION['user_admin'];
                        }
                    ?>
                <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="admin.php?controller=auth&amp;action=logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="active">
                <a href="admin.php"><i class="fa fa-fw fa-dashboard"></i> Trang chủ</a>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#shoping"><i class="fa fa-shopping-cart fa-fw"></i>Đơn Hàng</a>
                <ul id="shoping" class="collapse">
                    <li>
                        <a href="admin.php?controller=transaction"></i>Danh sách đơn hàng</a>
                    </li>
                    <li>
                        <a href="admin.php?controller=transaction&action=bills-unpaid"></i>Đơn hàng chưa thanh toán</a>
                    </li>
                    <li>
                        <a href="admin.php?controller=transaction&action=bills-complete"></i>Đơn hàng đã thanh toán</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#product"><i class="fa fa-folder-open fa-fw"></i> Sản phẩm</a>
                <ul id="product" class="collapse">
                    <li>
                        <a href="admin.php?controller=product">Sản phẩm</a>
                    </li>
                    <li>
                        <a href="admin.php?controller=category"></i>Danh mục sản phẩm</a>
                    </li>
                    <li>
                        <a href="admin.php?controller=typesproduct"></i>Danh bào chế sản phẩm</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#news"><i class="fa fa-fw fa-edit"></i> Tin tức</a>
                <ul id="news" class="collapse">
                    <li>
                        <a href="admin.php?controller=news">Tin tức</a>
                    </li>
                    <li>
                        <a href="admin.php?controller=category-news">Danh mục tin tức</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#function"><i class="fa fa-fw fa-dashboard"></i> Quản lý Chức năng khác</a>
                <ul id="function" class="collapse">
                    <li>
                        <a href="admin.php?controller=slideshow">Quản lí banner slide</a>
                    </li>
                    <li>
                        <a href="admin.php?controller=banner">Quản lí banner quảng cáo</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#admin"><i class="fa fa-fw fa-dashboard"></i> Quản lý admin</a>
                <ul id="admin" class="collapse">
                    <li>
                        <a href="admin.php?controller=auth&amp;action=listadmin">Danh sách admin</a>
                    </li>
                    <li>
                        <a href="info-admin.php">Thông tin admin hiện tại</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
        <!-- /.navbar-collapse -->
    </nav>
    <!-- Navigation -->
        <div id="page-wrapper">
            <div class="container-fluid">
            <!-- Page Heading -->
    	    <div class="row">
    	        <div class="col-lg-12">
    	            <h1 class="page-header">
    	                Trang quản lý <small>Shop thuốc</small>
    	            </h1>
    	            <ol class="breadcrumb">
    	                <li class="active">
    	                    <i class="fa fa-dashboard"></i> Quản lý
    	                </li>
    	            </ol>
    	        </div>
    	    </div>
    	    <!-- /.row -->