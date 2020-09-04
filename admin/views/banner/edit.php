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
        <div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> Banner</div>
			<div class="panel-body">
			    <form id="product-form" class="form-horizontal" method="post" action="admin.php?controller=banner&amp;action=edit" enctype="multipart/form-data" role="form">
			        <input name="id" type="hidden" value="<?php echo $banner ? $banner['Id'] : '0'; ?>"/>

			        <div class="form-group">
			            <label for="image1" class="control-label">Ảnh</label>
			            <input name="Images" type="file" class="form-control" id="image" accept="image/*"/>
			            <?php
			                if ($banner && is_file('public/upload/images/'.$banner['Images'])) {
			                    echo '<image src="public/upload/images/'.$banner['Images'].'"width="200"/>';
			                }else{
			                	echo "không có ảnh";
			                }
			            ?>
			        </div>

			        <div class="form-group">
			            <label class="control-label">Trạng thái kích hoạt</label><br />
			            <input type="checkbox" name="status" id="status_slideshow" <?php 
			                if ($banner['Status'] == 1) {
			                    echo "checked";
			                } ?>
			            <label for="status_slideshow" class="control-label">Kích hoạt</label>
			        </div>

			        <div class="form-group">
			            <div class="col-sm-3">
			                <button type="submit" class="btn btn-primary"><?php echo $banner ? 'Cập nhật' : 'Thêm mới' ?></button>
			                <a class="btn btn-warning" href="admin.php?controller=banner">Trở về</a>
			            </div>
			        </div>
			    </form>


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
<!-- /#wrapper -->
<?php require('admin/views/templates/footer.php'); ?>

