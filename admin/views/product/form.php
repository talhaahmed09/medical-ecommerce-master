<div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> Product</div>
<div class="panel-body">
    <form id="product-form" class="form-horizontal" method="post" action="admin.php?controller=product&amp;action=edit" enctype="multipart/form-data" role="form">
        <input name="id" type="hidden" value="<?php echo $product ? $product['Id'] : '0'; ?>"/>

        <div class="form-group">
            <label for="name" class="control-label">Tên Sản phẩm</label>
            <input name="name" type="text" value="<?php echo $product ? $product['Name'] : ''; ?>" class="form-control" id="name" placeholder="Tên sản phẩm" required=""/>
        </div>

        <div class="form-group">
            <label for="name" class="control-label">Giá Sản phẩm</label>
            <input name="price" type="text" value="<?php echo $product ? $product['Price'] : '' ?>" class="form-control" id="name" placeholder="Giá sản phẩm" required=""/>
        </div>

        <div class="form-group">
            <label for="category_id" class="control-label">Danh mục sản phẩm</label>
            

            <select name="category_id" class="form-control" id="category_id">
                <?php foreach ($categories as $category) {
                    $selected = '';
                    if ($product && ($product['CategoryId'] == $category['Id'])) $selected = 'selected=""';
                    echo '<option value="' . $category['Id'] . '" ' . $selected . '>' . $category['Name'] . '</option>';
                } ?>
            </select>
        </div>


        <div class="form-group">
            <label for="type_id" class="control-label">Dạng bào chế</label>
            <select name="category_id" class="form-control" id="category_id">
                <?php foreach ($types as $types) {
                    $selected = '';
                    if ($product && ($product['TypesId'] == $types['Id'])) $selected = 'selected=""';
                    echo '<option value="' . $types['Id'] . '" ' . $selected . '>' . $types['Name'] . '</option>';
                } ?>
            </select>
        </div>

        <div class="form-group">
            <label for="name" class="control-label">Cách sử dụng</label>
            <input name="used" type="text" value="<?php echo $product ? $product['Used'] : '' ?>" class="form-control" id="name" placeholder="Cách sử dụng sản phẩm" required=""/>
        </div>

        <div class="form-group">
            <label for="name" class="control-label">Công dụng</label>
            <input name="guide" type="text" value="<?php echo $product ? $product['Guide'] : '' ?>" class="form-control" id="name" placeholder="Công dụng sản phẩm" required=""/>
        </div>

        <div class="form-group">
            <label for="image1" class="control-label">Ảnh</label>
            <input name="image1" type="file" class="form-control" id="image" accept="image/*"/>
            <?php
                if ($product && is_file('public/upload/images/'.$product['Image1'])) {
                    echo '<image src="public/upload/images/'.$product['Image1'].'"width="200"/>';
                }
            ?>
        </div>

        <div class="form-group">
            <label>Nội dung</label>
            <textarea id="detail_news" class="form-control" name="detail" rows="3">
                <?php echo $product ? $product['Detail'] : '' ?>
            </textarea>
        </div>

        <div class="form-group">
            <div class="col-sm-3">
                <button type="submit" class="btn btn-primary"><?php echo $product ? 'Cập nhật' : 'Thêm mới' ?></button>
                <a class="btn btn-warning" href="admin.php?controller=product">Trở về</a>
            </div>
        </div>
    </form>


