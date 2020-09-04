<div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> Product</div>

    <div id="page-wrapper">
        <div class="panel panel-default">

            <div class="col-xs-12">
                <h3>Thông tin đơn hàng</h3>

                <table id="order_detail" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th class="hidden-xs">STT</th>
                        <th class="hidden-xs">Ảnh</th>
                        <th>Sản phẩm</th>
                        <th>Giá</th>
                        <th>SL</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i = 1;
                            foreach ($order_detail as $order_detail):
                            $total = 0;
                        ?>
                        <tr>
                            <td class="hidden-xs"><?php echo $i; ?></td>
                            <td class="hidden-xs">
                                <img class="img-responsive" width="70" src="public/upload/images/<?php echo $order_detail['Image1'] ; ?>">
                            </td>
                            <td><?php echo $order_detail['Name']; ?> </td>
                            <td><?php echo $order_detail['Price'] ?></td>
                            <td width="5%"><?php echo $order_detail['Quantity']; ?></td>
                            <?php
                               
                            ?>
                        </tr>
                        <?php
                            $i++;
                            $subtotal = $order_detail['Price'] * $order_detail['Quantity'];
                            $total += $subtotal;
                            endforeach;
                        ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="6">
                            <h4>Thành tiền : <?php echo $total; ?> VNĐ</h4>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>

            <div class="col-xs-12">
                <h3>Thông tin khách hàng</h3>

                <table id="info" class="table">
                    <tr>
                        <td>Họ và tên</td>
                        <td><?php echo $transaction['CustomerName']; ?></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td><?php echo $transaction['Address']; ?></td>
                    </tr>
                    <tr>
                        <td>Di động</td>
                        <td><?php echo $transaction['Phone']; ?></td>
                    </tr>
                    <tr>
                        <td>Thời gian</td>
                        <td><?php echo $transaction['Createtime']; ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?php echo $transaction['Email']; ?></td>
                    </tr>
                </table>

                <form id="order_form" method="post" action="admin.php?controller=transaction&amp;action=complete" role="form">
                    <div class="form-group">
                        <input name="id" type="hidden" value="<?php echo $transaction['Id']; ?>"/>
                        <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Xử lý xong</button>
                        <a href="admin.php?controller=transaction" class="btn btn-warning">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
    .table th, .table td {
        text-align: center;
    }
    .table th:nth-child(3), .table td:nth-child(3)  {
        width: auto;
        text-align: left;
    }
    .table th:nth-child(4), .table td:nth-child(4),
    .table th:nth-child(5), .table td:nth-child(5)  {
    }
    .table td {
        vertical-align: middle!important;
    }
    #info td {
        text-align: left;
    }
</style>