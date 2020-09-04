<?php
	require ('admin/views/templates/header.php');
	require ('admin/views/templates/nav-menu.php');
	
?>
	<?php
		if (isset($_SESSION['message'])) {
			$message = $_SESSION['message'];
			unset($_SESSION['message']);
	?>
			<div class="alert alert-success"><?php echo $message;  ?></div>
	<?php
		}
	?>
	
	<div id="page-wrapper">
	    <a href="admin.php?controller=slideshow&amp;action=edit" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-plus"></i> Thêm mới</a>
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
		                        <th>Tiêu đề</th>
		                        <th>Ảnh</th>
		                        <th>Trạng thái</th>
		                        <th>Chức năng</th>
		                    </tr>
	                    </thead>
	                    <tbody>
	                    <?php 
		                	$i = 1;
		                	foreach ($slideshow as $slideshow): 
		                ?>
	                        <tr class="odd gradeX">
	                            <td><?php echo $i; ?></td>
	                            <td><?php echo $slideshow['Tittle']; ?></td>
		                        <td><img class="img-responsive" title="<?php echo $slideshow['Images']; ?>" width="70" src="public/upload/images/<?php echo $slideshow['Images'] ?>"></td>
		                        <td><?php
		                         		if ($slideshow['Status'] == 1) {
		                         			echo "Đã kích hoạt";
		                         		} else {
		                         			echo "Không kích hoạt";
		                         		}
		                         	?>
		                         </td>
	                            <td>
	                                <a href="admin.php?controller=slideshow&amp;action=edit&amp;sid=<?php echo $slideshow['Id']; ?>"
	                                   class="text-danger"><i class="glyphicon glyphicon-edit"></i></a>
	                                <a href="admin.php?controller=slideshow&amp;action=delete&amp;sid=<?php echo $slideshow['Id']; ?>"
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
	  
	</div>

<?php
	require ('admin/views/templates/footer.php');
	
?>