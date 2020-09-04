<?php
	require('admin/views/templates/header.php');
	require('admin/views/templates/nav-menu.php');
?>
<!-- Navigation -->
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
				    <form id="product-form" class="form-horizontal" method="post" action="admin.php?controller=category&amp;action=edit" enctype="multipart/form-data" role="form">
				        <input name="id" type="hidden" value="<?php echo $category ? $category['Id'] : '0'; ?>"/>

				        <div class="form-group">
				            <label for="name" class="control-label">Tên danh mục sản phẩm</label>
				            <input name="name" type="text" value="<?php echo $category ? $category['Name'] : ''; ?>" class="form-control" id="name" placeholder="Tên danh mục sản phẩm" required=""/>
				        </div>

				        <div class="form-group">
				            <div class="col-sm-3">
				                <button type="submit" class="btn btn-primary"><?php echo $category ? 'Cập nhật' : 'Thêm mới' ?></button>
				                <a class="btn btn-warning" href="admin.php?controller=category">Trở về</a>
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

<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker();
    });
</script>

<?php
	require('admin/views/templates/footer.php');
?>