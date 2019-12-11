@extends('admin.layout.master')
@section('title')
    Sửa hệ nhôm
@endsection
@section('main')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh mục hệ nhôm</h1>
            </div>
        </div><!--/.row-->

        <div class="row">
            <div class="col-xs-12 col-md-5 col-lg-5">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Sửa hệ nhôm
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
                                <label>Tên hệ nhôm:</label>
                                <input type="text" name="alu_name" class="form-control" placeholder="Tên hệ nhôm" value="{{$alus->alu_name}}">
                            </div>
                            {{--<div class="form-group" >--}}
                                {{--<label>Danh mục công trình</label>--}}
                                {{--<select required name="alu_const" class="form-control">--}}
                                    {{--@foreach($listconst as $list)--}}
                                        {{--<option value="{{ $list->const_id }}" @if($alus->alu_const == $cate->cate_id) selected @endif>{{ $list->const_name }}</option>--}}
                                    {{--@endforeach--}}
                                {{--</select>--}}
                            {{--</div>--}}
                            <div class="form-group" >
                                <label>Ảnh sản phẩm</label>
                                <input id="img" type="file" name="alu_image" class="form-control hidden" onchange="changeImg(this)">
                                <img id="avatar" class="thumbnail" width="300px" src="{{ asset('../storage/app/aluImg/'.$alus->alu_image) }}">
                            </div>

                            <div class="form-group">
                                <input type="submit" name="submit" class="form-control btn btn-primary" value="Sửa" >
                            </div>
                            <div class="form-group">
                                <a href="{{ asset('admin/act/aluminum') }}" class="form-control btn btn-danger">Hủy bỏ</a>
                            </div>
                            {{ csrf_field() }}
                        </form>

                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div>	<!--/.main-->
@endsection
