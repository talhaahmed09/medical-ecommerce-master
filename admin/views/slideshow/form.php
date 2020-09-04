<div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> Slideshow</div>
<div class="panel-body">

    <form id="slideshowForm" class="form-horizontal" method="post" action="admin.php?controller=slideshow&amp;action=edit" enctype="multipart/form-data" role="form">
        <input name="id" type="hidden" value="<?php echo $slideshow ? $slideshow['Id'] : '0'; ?>"/>

        <div class="form-group">
            <label class="control-label">Tiêu đề</label>
            <input class="form-control" type="text" name="title" id="title_slideshow" value="<?php echo $slideshow['Tittle'];   ?>">
        </div>

        <div class="form-group">
            <label class="control-label">Ảnh</label>
            <input name="Images" type="file" class="form-control" id="image" <?php if (empty($slideshow)) { echo "required"; } ?> />
            <?php
                if ($slideshow && is_file('public/upload/images/'.$slideshow['Images'])) {
                    echo '<br><image src="public/upload/images/'.$slideshow['Images'].'"width="200"/>';
                }
            ?>
        </div>

        <div class="form-group">
            <label class="control-label">Trạng thái</label><br />
            <input type="checkbox" name="status" id="status_slideshow" <?php 
                if ($slideshow['Status'] == 1) {
                    echo "checked";
                } ?>>
            <label for="status_slideshow" class="control-label">Kích hoạt</label>
        </div>

        <div class="form-group">
            <label class="control-label">Nội dung</label>
            <textarea rows="5" class="form-control" name="caption" id="caption_slideshow"><?php echo $slideshow['Caption'];   ?></textarea>
        </div>
        <div class="form-group">
            <div class="col-sm-3">
                <button type="submit" class="btn btn-primary" name="edit_slideshow"><?php echo $slideshow ? 'Cập nhật' : 'Thêm mới' ?></button>
                <a class="btn btn-warning" href="admin.php?controller=slideshow">Trở về</a>
            </div>
        </div>
    </form>


