<?php
	require ('admin/views/templates/header.php');
	require ('admin/views/templates/nav-menu.php');
?>

<div class="row">
        <div class="col-lg-4 col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-user fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $total_user; ?></div>
                            <div>Số người đăng kí!</div>
                        </div>
                    </div>
                </div>
                <a href="admin.php?controller=custommer">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-tasks fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $total_product ?></div>
                            <div>Sản phẩm!</div>
                        </div>
                    </div>
                </div>
                <a href="admin.php?controller=product">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-shopping-cart fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $total_order; ?></div>
                            <div>Đơn đặt hàng mới!</div>
                        </div>
                    </div>
                </div>
                <a href="admin.php?controller=transaction">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="example">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Ngày đặt hàng</th>
                                    <th>Khách hàng</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $i = 1;
                                foreach ($order as $order):
                            ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $order['Createtime']; ?></td>
                                    <td><?php echo $order['CustomerName']?></td>
                                </tr>
                            <?php
                                $i++;
                                endforeach;
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-right">
                        <a href="admin.php?controller=order">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

<?php
	require ('admin/views/templates/footer.php');
?>