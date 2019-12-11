@extends('admin.layout.master')
@section('title')
    Chi tiết Cửa
    @endsection
@section('main')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách chi tiết cửa</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-7 col-lg-7">
            <a href="{{ asset('admin/act/detail/create') }}" class="btn btn-primary">Thêm chi tiết</a>
            <div class="panel panel-primary">
                <div class="panel-heading">Danh sách chi tiết</div>
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <table class="table table-bordered">
                            <thead>
                            <tr class="bg-primary">
                                <th >Id</th>
                                <th >Tên KH</th>
                                <th >Kiểu cửa</th>
                                <th >Ảnh cửa</th>
                                <th >Chiều rộng cửa</th>
                                <th >Chiều cao cửa</th>
                                <th >H1</th>
                                <th >HCC</th>
                                <th >Kiểu kính</th>
                                <th >Số bộ</th>
                                <th >Giá kính</th>
                                <th >Giá nhôm</th>
                                <th style="width:30%">Tùy chọn</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($listdoor as $list)
                            <tr>

                                <td>{{ $list->detail_id }}</td>
                                <td>{{ $list->nameCustomer }}</td>
                                <td>{{ $list->symbol_door }}</td>
                                <td>
                                    <img height="150px" src="{{ asset('../storage/app/detailImg/'.$list->image) }}" class="thumbnail">
                                </td>
                                <td>{{ $list->width }}</td>
                                <td>{{ $list->height }}</td>
                                <td>{{ $list->H1 }}</td>
                                <td>{{ $list->HCC }}</td>
                                <td>{{ $list->type_glass }}</td>
                                <td>{{ $list->count }}</td>
                                <td>{{ $list->price_glass }}</td>
                                <td>{{ $list->price_alu }}</td>
                                <td>
                                    <a href="{{ asset('admin/act/detail/edit/'.$list->detail_id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
                                    <a href="{{ asset('admin/act/detail/delete/'.$list->detail_id) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
                                </td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div><!--/.row-->
</div>	<!--/.main-->
@endsection