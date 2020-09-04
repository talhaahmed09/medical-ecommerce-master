<?php
	require('admin/views/templates/header.php');
	require('admin/views/templates/nav-menu.php');
?>
	<div id="page-wrapper">
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
		                        <th>Ngày đặt hàng</th>
		                        <th>Khách hàng</th>
		                        <th>Tình trạng</th>
		                        <th>Chức năng</th>
		                    </tr>
	                    </thead>
	                    <tbody>
	                    <?php 
                    		$i = 1;
                    		foreach ($transaction as $transaction) : 
                    	?>
	                        <tr class="odd gradeX">
	                        	<td><?php echo $i; ?></td>
	                            <td><?php echo $transaction['Createtime']; ?></td>
		                        <td><?php echo $transaction['CustomerName']; ?></td>
		                        <td><?php echo $status[$transaction['Status']]; ?></td>
		                        <td>
	                                <a href="admin.php?controller=transaction&amp;action=detail_order&amp;oid=<?php echo $transaction['Id']; ?>"
	                                   class="text-danger"><i class="glyphicon glyphicon-edit"></i></a>
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