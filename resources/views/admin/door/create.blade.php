@extends('admin.layout.master')
@section('title')
    Thêm cửa
@endsection
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">cửa</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">

            <div class="panel panel-primary">
                <div class="panel-heading">Thêm cửa</div>
                <div class="panel-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="row" style="margin-bottom:40px">
                            <div class="col-xs-8">
                                <div class="form-group" >
                                    <label>Tên cửa</label>
                                    <input required type="text" name="door_name" class="form-control">
                                </div>
                                <div class="form-group" >
                                    <label>Ảnh cửa</label>
                                    <input required id="img" type="file" name="door_image" class="form-control hidden" onchange="changeImg(this)">
                                    <img id="avatar" class="thumbnail" width="300px" src="{{ asset('layout/backend/img/new_seo-10-512.png') }}">
                                </div>

                                <div class="form-group" >
                                    <label>ID hệ nhôm</label>
                                    {{--@dd($listalu)--}}
                                    <select required name="door_alu" class="form-control">
                                        @foreach($listalu as $list)
                                        <option value="{{ $list->alu_id }}">{{ $list->alu_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                                <a href="{{ asset('api/admin/act/door') }}" class="btn btn-danger">Hủy bỏ</a>
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