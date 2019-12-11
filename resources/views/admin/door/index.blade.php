@extends('admin.layout.master')
@section('title')
    Cửa
    @endsection
@section('main')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách cửa</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-7 col-lg-7">
            <a href="{{ asset('admin/act/door/create') }}" class="btn btn-primary">Thêm cửa</a>
            <div class="panel panel-primary">
                <div class="panel-heading">Danh sách cửa</div>
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <table class="table table-bordered">
                            <thead>
                            <tr class="bg-primary">
                                <th width="30%">Tên cửa</th>
                                <th width="20%">Ảnh cửa</th>
                                <th style="width:30%">Tùy chọn</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($listalu as $list)
                            <tr>
                                <td>{{ $list->door_name }}</td>
                                <td>
                                    <img height="150px" src="{{ asset('../storage/app/doorImg/'.$list->door_image) }}" class="thumbnail">
                                </td>
                                <td>
                                    <a href="{{ asset('admin/act/door/edit/'.$list->door_id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
                                    <a href="{{ asset('admin/act/door/delete/'.$list->door_id) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
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