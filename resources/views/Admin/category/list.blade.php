@extends('Admin.admin_layout')
@section('content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Liệt kê danh mục
            </div>
            <div class="search_category" style="margin: 20px 0 10px 0;">
                <form role="form" class="form-inline" action="" method="GET">
                    <div class="form-group">
                        <input type="text" placeholder="Tìm kiếm...." class="form-control" name="keyword" value="{{$keyword}}">
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                        <th style="max-width: 150px;">
                            <label class="i-checks m-b-none">
                                Mã Danh Mục
                            </label>
                        </th>
                        <th>Tên</th>
                        <th>Ngày tạo</th>
                        <th>Trạng thái</th>
                        <th style="width:60px;">Sửa</th>
                        <th style="width:60px;">Xóa</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($categories as $item)
                        <tr>
                            <td>{{$item-> id}}</td>
                            <td>{{$item-> name}}</td>
                            <td><span class="text-ellipsis">{{$item-> updated_at}}</span></td>
                            <td>
                                <span class="text-ellipsis">
                                    @if($item-> category_status == 0)
                                        <p style="color:red;">Ẩn</p>
                                    @else
                                        <p style="color:green;">Hiển thị</p>
                                    @endif
                                </span>
                            </td>
                            <td>
                                <a href="" class="active" ui-toggle-class=""><i class="fa fa-pencil-square-o text-success text-active"></i></a>
                            </td>
                            <td>
                                <a href="{{route('admin.category.delete',$item-> id)}}" class="active btnDelete" ui-toggle-class=""><i class="fa fa-trash-o text-danger text"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <footer class="panel-footer">
                <div class="row">
                    <div class="col-sm-4 text-left text-center-xs">
                        <a href="{{route('admin.category.create')}}" class="btn btn-primary">Thêm thể loại</a>
                    </div>
                    <div class="col-sm-8 text-right text-center-xs">
                        {{ $categories->appends(request()->all())->links() }}
                    </div>
                </div>
            </footer>
        </div>
        <form method="POST" action="" id="form-delete-category">
            @csrf
            @method('DELETE')
        </form>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
        $('.btnDelete').click(function (event){
            event.preventDefault();
            var _href = $(this).attr('href');
            $('form#form-delete-category').attr('action',_href);
            if(confirm('Bạn chắc chắn muốn xóa?')){
                $('form#form-delete-category').submit();
            }
        });
    </script>
@endsection
