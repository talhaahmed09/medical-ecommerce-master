        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
	</div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <!-- Bootstrap Core JavaScript -->
    <script src="admin/public/js/bootstrap.min.js"></script>
    <!-- Morris Charts JavaScript -->
    <!-- <script src="admin/public/js/plugins/morris/morris.min.js"></script>
    <script src="admin/public/js/plugins/morris/morris-data.js"></script>
    <script src="admin/public/js/plugins/morris/raphael.min.js"></script> -->

    <!-- DataTables JavaScript -->
    <script src="admin/public/js/jquery.dataTables.min.js"></script>
    <script src="admin/public/js/dataTables.bootstrap.min.js"></script>

    <script language="javascript" src="admin/public/thirparty/ckeditor/ckeditor.js" type="text/javascript"></script>

    <script>
        $('.deleteitem').on('click', function () {
            return confirm('Bạn chắc chắn muốn xóa?');
        });
        $('body .dropdown-toggle').dropdown(); 
        $('#example').DataTable();
        CKEDITOR.replace('detail_news');
    </script>
    
</body>
</html>