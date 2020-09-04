<?php
	require ('admin/views/templates/header.php');
	require ('admin/views/templates/nav-menu.php');
?>
<div id="page-wrapper">
	    <a href="admin.php?controller=product&amp;action=edit" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i> Thêm mới</a>
	    <div class="panel panel-default">
	        <div class="panel-heading text-center">
	            <b><?php echo $title; ?></b>
	        </div>
	        <div class="panel-body">
	            <div class="dataTable_wrapper">
	                <table class="table table-striped table-bordered table-hover" id="dataTables">
	                    <thead>
		                    <tr>
		                        <th>STT</th>
		                        <th>Tên đăng nhập</th>
		                        <th>tên đầy đủ</th>
		                        <th>Email</th>
		                        <th>Điện thoại</th>
		                        <th>Địa chỉ</th>
		                    </tr>
	                    </thead>
	                    <tbody>
	                    <?php 
		                	$i = 1;
		                	foreach ($custommer as $custommer): 
		                ?>
	                        <tr class="odd gradeX">
	                            <td><?php echo $i; ?></td>
		                        <td><?php echo $custommer['username']; ?></td>
		                        <td><?php echo $custommer['full_name']; ?></td>
		                        <td><?php echo $custommer['email']; ?></td>
		                        <td><?php echo $custommer['phone']; ?></td>
		                        <td><?php echo $custommer['address']; ?></td>
	                        </tr>
	                    <?php 
	                    	$i++;
	                    	endforeach; 
	                    ?>
	                    </tbody>
	                </table>
	            </div>
	        </div>
	    </div>
	</div>
	<script>
        $(document).ready(function () {
            $('#dataTables').DataTable({
                 responsive: true,  "order":[[0, 'asc']]
            });
        });
    </script>


<?php
	require ('admin/views/templates/footer.php');
?>