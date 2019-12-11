@extends('admin.layout.master')
@section('title')
    Thêm Công trình
@endsection
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Công trình</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">

            <div class="panel panel-primary">
                <div class="panel-heading">Thêm công trình</div>
                <div class="panel-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="row" style="margin-bottom:40px">
                            <div class="col-xs-8">
                                <div class="form-group" >
                                    <label>Tên công trình</label>
                                    <input required type="text" name="const_name" class="form-control">
                                </div>

                                <div class="form-group" >
                                    <label>ID user</label>
                                    <select required name="const_user" class="form-control">
                                        @foreach($listuser as $list)
                                        <option value="{{ $list->user_id }}">{{ $list->user_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                                <a href="{{ asset('admin/act/construct') }}" class="btn btn-danger">Hủy bỏ</a>
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