<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
<form role="form" action="" method="">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Tên danh mục</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Điền tên danh mục">
    </div>
    <div class="form-group">
        <label for="description">Mô tả danh mục</label>
        <textarea style="resize: none;" rows="8" name="description" class="form-control" id="summernote"></textarea>
    </div>

    <div class="form-group">
        <label for="status">Trạng thái</label>
        <select name="status" class="form-control m-bot15">
            <option value="1">Sẵn sàng</option>
            <option value="0">Ẩn</option>
        </select>
    </div>
    <button type="submit" name="add_category_book" class="btn btn-info">Tạo</button>
</form>
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>
</body>
</html>
