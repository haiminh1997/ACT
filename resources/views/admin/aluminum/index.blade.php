@extends('admin.layout.master')
@section('title')
    Hệ nhôm
    @endsection
@section('main')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách hệ nhôm</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-7 col-lg-7">
            <a href="{{ asset('admin/act/aluminum/create') }}" class="btn btn-primary">Thêm hệ nhôm</a>
            <div class="panel panel-primary">
                <div class="panel-heading">Danh sách hệ nhôm</div>
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <table class="table table-bordered">
                            <thead>
                            <tr class="bg-primary">
                                <th width="30%">Tên hệ nhôm</th>
                                <th width="20%">Ảnh hệ nhôm</th>
                                <th style="width:30%">Tùy chọn</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($listconst as $list)
                            <tr>
                                <td>{{ $list->alu_name }}</td>
                                <td>
                                    <img height="150px" src="{{ asset('../storage/app/aluImg/'.$list->alu_image) }}" class="thumbnail">
                                </td>
                                <td>
                                    <a href="{{ asset('admin/act/aluminum/edit/'.$list->alu_id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
                                    <a href="{{ asset('admin/act/aluminum/delete/'.$list->alu_id) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
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