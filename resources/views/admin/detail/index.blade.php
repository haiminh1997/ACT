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
            <a href="{{ asset('api/admin/act/detail/create') }}" class="btn btn-primary">Thêm chi tiết</a>
            <div class="panel panel-primary">
                <div class="panel-heading">Danh sách chi tiết</div>
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <table class="table table-bordered">
                            <thead>
                            <tr class="bg-primary">
                                <th class="id" >Id</th>
                                <th class="nameCustomer" >Tên KH</th>
                                <th class="symbol_door" >Kiểu cửa</th>
                                <th class="image" >Ảnh cửa</th>
                                <th class="width" >Chiều rộng cửa</th>
                                <th class="height" >Chiều cao cửa</th>
                                <th class="H1">H1</th>
                                <th class="HCC">HCC</th>
                                <th class="type_glass">Kiểu kính</th>
                                <th class="count">Số bộ</th>
                                <th class="price_glass" >Giá kính</th>
                                <th class="price_alu" >Giá nhôm</th>
                                <th style="width:30%">Tùy chọn</th>
                            </tr>
                            </thead>
                            <thead id="detail">
                            <tr >
                            </tr>
                            <tbody>
                            {{--@foreach($listdoor as $list)--}}
                            {{--<tr>--}}

                                {{--<td>{{ $list->detail_id }}</td>--}}
                                {{--<td>{{ $list->nameCustomer }}</td>--}}
                                {{--<td>{{ $list->symbol_door }}</td>--}}
                                {{--<td>--}}
                                    {{--<img height="150px" src="{{ asset('../storage/app/detailImg/'.$list->image) }}" class="thumbnail">--}}
                                {{--</td>--}}
                                {{--<td>{{ $list->width }}</td>--}}
                                {{--<td>{{ $list->height }}</td>--}}
                                {{--<td>{{ $list->H1 }}</td>--}}
                                {{--<td>{{ $list->HCC }}</td>--}}
                                {{--<td>{{ $list->type_glass }}</td>--}}
                                {{--<td>{{ $list->count }}</td>--}}
                                {{--<td>{{ $list->price_glass }}</td>--}}
                                {{--<td>{{ $list->price_alu }}</td>--}}
                                {{--<td>--}}
                                    {{--<a href="{{ asset('api/admin/act/detail/edit/'.$list->detail_id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>--}}
                                    {{--<a href="{{ asset('api/admin/act/detail/delete/'.$list->detail_id) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                                {{--@endforeach--}}
                            </tbody>
                        </table>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div><!--/.row-->
</div>	<!--/.main-->
<script type="text/javascript">
        var http = new XMLHttpRequest();
        http.open('GET','http://localhost/ACTapi/public/api/admin/act/detailAdmin',true);
        http.send();
        http.onreadystatechange = function(){
            if(this.readyState == 4){
                renderLesson(JSON.parse(this.responseText));
            }

        }

        function renderLesson(lesson){
            console.log(lesson['details']['original'])
            var html = '';
            for(var i = 0;i<lesson['details']['original'].length;i++){
                var l = lesson['details']['original'][i];
                html+='<tr class="bg-primary">';
                html+='<th class="id">'+l.detail_id+'</th>';
                html+='<th class="nameCustomer">'+l.nameCustomer+'</th>';
                html+='<th class="symbol_door">'+l.symbol_door+'</th>';
                html+='<th class="image"><img  height="150px" width="150px" src="http://localhost/ACTapi/storage/app/detailImg/'+l.image+'"></th>';
                html+='<th class="width">'+l.width+'</th>';
                html+='<th class="height">'+l.height+'</th>';
                html+='<th class="H1">'+l.H1+'</th>';
                html+='<th class="HCC">'+l.HCC+'</th>';
                html+='<th class="type_glass">'+l.type_glass+'</th>';
                html+='<th class="count">'+l.count+'</th>';
                html+='<th class="price_glass">'+l.price_glass+'</th>';
                html+='<th class="price_alu">'+l.price_alu+'</th>';
                html+='<th class="option">'+
                    '<a class="btn btn-warning" href="detail/edit/'+l.detail_id+' ">Sửa</a>\n' +
                    '<a onclick="return confirm(\'Bạn có chắc chắn muốn xóa?\')" class="btn btn-danger" href="detail/delete/'+l.detail_id+' ">Xóa</a>'+

                    '</th>';
                html+='</tr>';
            }
            var profile = document.getElementById('detail')
            profile.innerHTML = html;
        }
    </script>
@endsection