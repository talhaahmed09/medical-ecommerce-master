<?php
	require ('admin/views/templates/header.php');
	require ('admin/views/templates/nav-menu.php');
	
?>
	<div id="page-wrapper">
	    <a href="admin.php?controller=banner&amp;action=edit" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i> Thêm mới</a>
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
		                        <th>Hình Ảnh</th>
		                        <th>Thời gian tạo</th>
		                        <th>Chức năng</th>
		                    </tr>
	                    </thead>
	                    <tbody>
	                    <?php 
		                	$i = 1;
		                	foreach ($banner as $banner): 
		                ?>
	                        <tr class="odd gradeX">
	                            <td><?php echo $i; ?></td>
		                        <td><img class="img-responsive" width="70" src="public/upload/images/<?php echo $banner['Images'] ?>"></td>
		                        <td><?php echo $banner['Time_create']; ?></td>
		                        
	                            <td>
	                                <a href="admin.php?controller=banner&amp;action=edit&amp;bid=<?php echo $banner['Id']; ?>"
	                                   class="text-danger"><i class="glyphicon glyphicon-edit"></i></a>
	                                <a href="admin.php?controller=banner&amp;action=delete&amp;bid=<?php echo $banner['Id']; ?>"
	                                   class="text-danger deleteitem"><i class="glyphicon glyphicon-remove"></i></a>
	                            </td>
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
	    <script>
	        $(document).ready(function () {
	            $('#dataTables').DataTable({
	                 responsive: true,  "order":[[0, 'asc']]
	            });
	        });
	    </script>
	</div>

<?php
	require ('admin/views/templates/footer.php');
	
?>