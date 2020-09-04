<?php
	require('admin/views/templates/header.php');
	require('admin/views/templates/nav-menu.php');
?>
<div id="page-wrapper">
	    <a href="admin.php?controller=typesproduct&amp;action=edit" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i> Thêm mới</a>
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
		                        <th>Tên dạng bào chế thuốc</th>
		                        <th>Chức năng</th>
		                    </tr>
	                    </thead>
	                    <tbody>
	                    <?php 
		                	$i = 1;
		                	foreach ($type as $type): 
		                ?>
	                        <tr class="odd gradeX">
	                            <td><?php echo $i; ?></td>
		                        <td><?php echo $type['Name']; ?></td>
	                            <td>
	                                <a href="admin.php?controller=typesproduct&amp;action=edit&amp;tid=<?php echo $type['Id']; ?>"
	                                   class="text-danger"><i class="glyphicon glyphicon-edit"></i></a>
	                                <a href="admin.php?controller=typesproduct&amp;action=delete&amp;tid=<?php echo $type['Id']; ?>"
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
	require('admin/views/templates/footer.php');
?>