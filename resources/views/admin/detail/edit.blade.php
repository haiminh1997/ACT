@extends('admin.layout.master')
@section('title')
    Sửa chi tiết cửa
@endsection
@section('main')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh mục chi tiết cửa</h1>
            </div>
        </div><!--/.row-->

        <div class="row">
            <div class="col-xs-12 col-md-5 col-lg-5">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Sửa chi tiết cửa
                    </div>
                    <div class="panel-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="post" enctype="multipart/form-data" >
                            <div class="form-group">
                                <label>Tên KH:</label>
                                <input type="text" name="nameCustomer" class="form-control" placeholder="Tên cửa" value="{{$details->nameCustomer}}">
                            </div>
                            <div class="form-group">
                                <label>Ký hiệu cửa:</label>
                                <input type="text" name="symbol_door" class="form-control" placeholder="Tên cửa" value="{{$details->symbol_door}}">
                            </div>
                            <div class="form-group" >
                                <label>Ảnh cửa</label>
                                <input id="img" type="file" name="image" class="form-control hidden" onchange="changeImg(this)">
                                <img id="avatar" class="thumbnail" width="300px" src="{{ asset('../storage/app/detailImg/'.$details->image) }}">
                            </div>
                            <div class="form-group">
                                <label>Chiều rộng cửa:</label>
                                <input type="text" name="width" class="form-control" placeholder="Tên cửa" value="{{$details->width}}">
                            </div>
                            <div class="form-group">
                                <label>Chiều cao cửa:</label>
                                <input type="text" name="height" class="form-control" placeholder="Tên cửa" value="{{$details->height}}">
                            </div><div class="form-group">
                                <label>H1:</label>
                                <input type="text" name="H1" class="form-control" placeholder="Tên cửa" value="{{$details->H1}}">
                            </div><div class="form-group">
                                <label>HCC:</label>
                                <input type="text" name="HCC" class="form-control" placeholder="Tên cửa" value="{{$details->HCC}}">
                            </div><div class="form-group">
                                <label>Kiểu kính cửa:</label>
                                <input type="text" name="type_glass" class="form-control" placeholder="Tên cửa" value="{{$details->type_glass}}">
                            </div><div class="form-group">
                                <label>Số bộ:</label>
                                <input type="text" name="count" class="form-control" placeholder="Tên cửa" value="{{$details->count}}">
                            </div>
                            <div class="form-group">
                                <label>Giá kính:</label>
                                <input type="text" name="price_glass" class="form-control" placeholder="Tên cửa" value="{{$details->price_glass}}">
                            </div>
                            <div class="form-group">
                                <label>Giá nhôm:</label>
                                <input type="text" name="price_alu" class="form-control" placeholder="Tên cửa" value="{{$details->price_alu}}">
                            </div>
                            
                            <div class="form-group">
                                <input type="submit" name="submit" class="form-control btn btn-primary" value="Sửa" >
                            </div>
                            <div class="form-group">
                                <a href="{{ asset('admin/act/detail') }}" class="form-control btn btn-danger">Hủy bỏ</a>
                            </div>
                            {{ csrf_field() }}
                        </form>

                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div>	<!--/.main-->
@endsection
