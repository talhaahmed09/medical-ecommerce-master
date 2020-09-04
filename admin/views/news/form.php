<div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> news</div>
<div class="panel-body">
    <form id="news-form" class="form-horizontal" method="post" action="admin.php?controller=news&amp;action=edit" enctype="multipart/form-data" role="form">
        <input name="id" type="hidden" value="<?php echo $news ? $news['Id'] : '0'; ?>"/>

        <div class="form-group">
            <label for="name" class="control-label">Tên Tin Tức</label>
            <input name="name" type="text" value="<?php echo $news ? $news['NameNews'] : ''; ?>" class="form-control" id="name" placeholder="Tên tin tức" required=""/>
        </div>

        <div class="form-group">
            <label for="name" class="control-label">Nội dung vắn tắt</label>
            <input name="caption" type="text" value="<?php echo $news ? $news['CaptionNew'] : '' ?>" class="form-control" id="name" placeholder="Tiêu đề tin" required=""/>
        </div>


        <div class="form-group">
            <label for="type_id" class="control-label">Thể loại tin</label>
            <select name="category_id" class="form-control" id="category_id">
                <?php foreach ($catnew as $catnew) {
                    $selected = '';
                    if ($news && ($news['IdCatNew'] == $catnew['Id'])) $selected = 'selected=""';
                    echo '<option value="' . $catnew['Id'] . '" ' . $selected . '>' . $catnew['NameCategory'] . '</option>';
                } ?>
            </select>
        </div>

        <div class="form-group">
            <label for="name" class="control-label">Thời gian tạo tin tức</label>
             <div class='input-group date' id='datetimepicker1'>
                <input type='text' class="form-control" name="date" value="<?php echo $news ? $news['CreateDate'] : '' ?>" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>

        <div class="form-group">
            <label for="image1" class="control-label">Ảnh</label>
            <input name="image1" type="file" class="form-control" id="image" accept="image/*"/>
            <?php
                if ($news && is_file('public/upload/images/'.$news['Images1'])) {
                    echo '<image src="public/upload/images/'.$news['Images1'].'"width="200"/>';
                }
            ?>
        </div>

        <div class="form-group">
            <label>Nội dung</label>
            <textarea id="detail_news" class="form-control" name="detail" rows="3">
                <?php echo $news ? $news['DetailNews'] : '' ?>
            </textarea>
        </div>

        <div class="form-group">
            <div class="col-sm-3">
                <button type="submit" class="btn btn-primary"><?php echo $news ? 'Cập nhật' : 'Thêm mới' ?></button>
                <a class="btn btn-warning" href="admin.php?controller=news">Trở về</a>
            </div>
        </div>
    </form>


