<?php
	require('admin/views/templates/header.php');
	require('admin/views/templates/nav-menu.php');
?>

<div id="page-wrapper">
    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo $title ?>
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="dataTable_wrapper">
                <div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i></div>
				<div class="panel-body">
				    <form id="product-form" class="form-horizontal" method="post" action="admin.php?controller=auth&amp;action=edit" enctype="multipart/form-data" role="form">
				        <input name="id" type="hidden" value="<?php echo $admin ? $admin['Id'] : '0'; ?>"/>

				        <div class="form-group">
				            <label for="name" class="control-label">Tên đăng nhập</label>
				            <input name="name" type="text" value="<?php echo $admin ? $admin['Name'] : ''; ?>" class="form-control" id="name" placeholder="Tên danh mục tin tức" required=""/>
				        </div>

				        <div class="form-group">
				            <label for="name" class="control-label">Mật khẩu</label>
				            <input name="pass" type="password" value="<?php echo $admin ? $admin['Password'] : ''; ?>" class="form-control" id="name" placeholder="Tên danh mục tin tức" required=""/>
				        </div>

				        <div class="form-group">
				            <div class="col-sm-3">
				                <button type="submit" class="btn btn-primary"><?php echo $admin ? 'Cập nhật' : 'Thêm mới' ?></button>
				                <a class="btn btn-warning" href="admin.php?controller=admin-news">Trở về</a>
				            </div>
				        </div>
				    </form>
				</div>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
    </div>
</div>
</div>


<?php
	require('admin/views/templates/footer.php');
?>