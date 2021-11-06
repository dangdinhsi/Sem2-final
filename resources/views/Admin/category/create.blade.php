@extends('Admin.admin_layout')
@section('content')
    <div class="form-w3layouts">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Thêm danh mục sách
                    </header>
                    <div class="panel-body">
                        <div class="position-center">
                            <form role="form" action="{{route('admin.category.save')}}" method="post">
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
                        </div>

                    </div>
                </section>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
