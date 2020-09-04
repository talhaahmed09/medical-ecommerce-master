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
                <?php require('admin/views/product/form.php'); ?>
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

