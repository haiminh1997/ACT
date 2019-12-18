@extends('admin.layout.master')
@section('title')
    Thêm hệ nhôm
@endsection
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Hệ nhôm</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">

            <div class="panel panel-primary">
                <div class="panel-heading">Thêm hệ nhôm</div>
                <div class="panel-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="row" style="margin-bottom:40px">
                            <div class="col-xs-8">
                                <div class="form-group" >
                                    <label>Tên hệ nhôm</label>
                                    <input required type="text" name="alu_name" class="form-control">
                                </div>
                                <div class="form-group" >
                                    <label>Ảnh hệ nhôm</label>
                                    <input required id="img" type="file" name="alu_image" class="form-control hidden" onchange="changeImg(this)">
                                    <img id="avatar" class="thumbnail" width="300px" src="{{ asset('layout/backend/img/new_seo-10-512.png') }}">
                                </div>

                                <div class="form-group" >
                                    <label>ID công trình</label>
                                    <select required name="alu_const" class="form-control">
                                        @foreach($listconst as $list)
                                        <option value="{{ $list->const_id }}">{{ $list->const_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                                <a href="{{ asset('api/admin/act/aluminum') }}" class="btn btn-danger">Hủy bỏ</a>
                            </div>
                        </div>
                        {{ csrf_field() }}
                    </form>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div><!--/.row-->
</div>	<!--/.main-->
    @endsection