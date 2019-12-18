@extends('admin.layout.master')
@section('title')
    Sửa Công trình
@endsection
@section('main')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh mục Công trình</h1>
            </div>
        </div><!--/.row-->

        <div class="row">
            <div class="col-xs-12 col-md-5 col-lg-5">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Sửa công trình
                    </div>
                    <div class="panel-body">
                        {{--@if ($errors->any())--}}
                            {{--<div class="alert alert-danger">--}}
                                {{--<ul>--}}
                                    {{--@foreach ($errors->all() as $error)--}}
                                        {{--<li>{{ $error }}</li>--}}
                                    {{--@endforeach--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--@endif--}}
                        <form method="post">
                            <div class="form-group">
                                <label>Tên công trình:</label>
                                <input type="text" name="const_name" class="form-control" placeholder="Tên công trình" value="{{$const->const_name}}">
                            </div>
                            {{--<div class="form-group">--}}
                                {{--<label>Tên người sử dụng:</label>--}}
                                {{--<input type="text" name="user_name" class="form-control" placeholder="Tên công trình" value="{{$listuser->user_name}}">--}}
                            {{--</div>--}}

                            <div class="form-group">
                                <input type="submit" name="submit" class="form-control btn btn-primary" value="Sửa" >
                            </div>
                            <div class="form-group">
                                <a href="{{ asset('admin/act/construct') }}" class="form-control btn btn-danger">Hủy bỏ</a>
                            </div>
                            {{ csrf_field() }}
                        </form>

                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div>	<!--/.main-->
@endsection
