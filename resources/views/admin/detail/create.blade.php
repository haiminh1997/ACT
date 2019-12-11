@extends('admin.layout.master')
@section('title')
    Thêm chi tiết cửa
@endsection
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">chi tiết cửa</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">

            <div class="panel panel-primary">
                <div class="panel-heading">Thêm chi tiết cửa</div>
                <div class="panel-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="row" style="margin-bottom:40px">
                            <div class="col-xs-8">
                                <div class="form-group" >
                                    <label>Tên KH</label>
                                    <input required type="text" name="nameCustomer" class="form-control">
                                </div>
                                <div class="form-group" >
                                    <label>Ký hiệu cửa</label>
                                    <input required type="text" name="symbol_door" class="form-control">
                                </div>
                                <div class="form-group" >
                                    <label>Ảnh chi tiết cửa</label>
                                    <input required id="img" type="file" name="image" class="form-control hidden" onchange="changeImg(this)">
                                    <img id="avatar" class="thumbnail" width="300px" src="img/new_seo-10-512.png">
                                </div>
                                <div class="form-group" >
                                    <label>Chiều rộng</label>
                                    <input required type="text" name="width" class="form-control">
                                </div>
                                <div class="form-group" >
                                    <label>Chiều cao</label>
                                    <input required type="text" name="height" class="form-control">
                                </div>
                                <div class="form-group" >
                                    <label>H1</label>
                                    <input required type="text" name="H1" class="form-control">
                                </div><div class="form-group" >
                                    <label>HCC</label>
                                    <input required type="text" name="HCC" class="form-control">
                                </div>
                                <div class="form-group" >
                                    <label>Loại kính</label>
                                    <input required type="text" name="type_glass" class="form-control">
                                </div>
                                <div class="form-group" >
                                    <label>Số bộ</label>
                                    <input required type="text" name="count" class="form-control">
                                </div>
                                <div class="form-group" >
                                    <label>Giá kính</label>
                                    <input required type="text" name="price_glass" class="form-control">
                                </div>
                                <div class="form-group" >
                                    <label>Giá nhôm</label>
                                    <input required type="text" name="price_alu" class="form-control">
                                </div>
                                <div class="form-group" >
                                    <label>ID cửa</label>
                                    {{--@dd($listalu)--}}
                                    <select required name="door_detail" class="form-control">
                                        @foreach($listdoor as $list)
                                        <option value="{{ $list->door_id }}">{{ $list->door_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                                <a href="{{ asset('admin/act/detail') }}" class="btn btn-danger">Hủy bỏ</a>
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