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
            <a href="{{ asset('api/admin/act/door/create') }}" class="btn btn-primary">Thêm cửa</a>
            <div class="panel panel-primary">
                <div class="panel-heading">Danh sách cửa</div>
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <table class="table table-bordered">
                            <thead>
                            <tr class="bg-primary">
                                <th class="id">ID </th>
                                <th class="doorName" width="30%">Tên cửa</th>
                                <th class="doorImage" width="20%">Ảnh cửa</th>
                                <th style="width:30%">Tùy chọn</th>
                            </tr>
                            </thead>
                            <thead id="door">
                            <tr >
                            </tr>
                            <tbody>
                            {{--@foreach($listalu as $list)--}}
                            {{--<tr>--}}
                                {{--<td>{{ $list->door_name }}</td>--}}
                                {{--<td>--}}
                                    {{--<img height="150px" src="{{ asset('../storage/app/doorImg/'.$list->door_image) }}" class="thumbnail">--}}
                                {{--</td>--}}
                                {{--<td>--}}
                                    {{--<a href="{{ asset('api/admin/act/door/edit/'.$list->door_id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>--}}
                                    {{--<a href="{{ asset('api/admin/act/door/delete/'.$list->door_id) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>--}}
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
        http.open('GET','http://localhost/ACTapi/public/api/admin/act/doorAdmin',true);
        http.send();
        http.onreadystatechange = function(){
            if(this.readyState == 4){
                renderLesson(JSON.parse(this.responseText));
            }

        }

        function renderLesson(lesson){
            console.log(lesson['doors']['original'])
            var html = '';
            for(var i = 0;i<lesson['doors']['original'].length;i++){
                var l = lesson['doors']['original'][i];
                html+='<tr class="bg-primary">';
                html+='<th class="id">'+l.door_id+'</th>';
                html+='<th class="doorName">'+l.door_name+'</th>';
                html+='<th class="doorImage"><img  height="150px" width="150px" src="http://localhost/ACTapi/storage/app/doorImg/'+l.door_image+'"></th>';
                html+='<th class="option">'+
                    '<a href="door/edit/'+l.door_id+' ">Sửa</a>\n' +
                    '<a href="door/delete/'+l.door_id+' ">Xóa</a>'+

                    '</th>';
                html+='</tr>';
            }
            var profile = document.getElementById('door')
            profile.innerHTML = html;
        }
    </script>
@endsection