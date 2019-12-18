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
            <a href="{{ asset('api/admin/act/aluminum/create') }}" class="btn btn-primary">Thêm hệ nhôm</a>
            <div class="panel panel-primary">
                <div class="panel-heading">Danh sách hệ nhôm</div>
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <table  class="alu table table-bordered">
                            <thead>
                            <tr class="bg-primary">
                                <th class="id">ID </th>
                                <th class="aluName" width="30%">Tên hệ nhôm</th>
                                <th class="aluImage" width="20%">Ảnh hệ nhôm</th>
                                <th  class="option" style="width:30%">Tùy chọn</th>
                            </tr>
                            </thead>
                            <thead id="alu">
                            <tr >
                            </tr>
                            <tbody>
                            {{--@foreach($listconst as $list)--}}
                            {{--<tr>--}}
                                {{--<td>{{ $list->alu_name }}</td>--}}
                                {{--<td>--}}
                                    {{--<img height="150px" src="{{ asset('../storage/app/aluImg/'.$list->alu_image) }}" class="thumbnail">--}}
                                {{--</td>--}}
                                {{--<td>--}}
                                    {{--<a href="{{ asset('api/admin/act/aluminum/edit/'.$list->alu_id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>--}}
                                    {{--<a href="{{ asset('api/admin/act/aluminum/delete/'.$list->alu_id) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>--}}
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
        http.open('GET','http://localhost/ACTapi/public/api/admin/act/aluminumAdmin',true);
        http.send();
        http.onreadystatechange = function(){
            if(this.readyState == 4){
                renderLesson(JSON.parse(this.responseText));
            }

        }

        function renderLesson(lesson){
            console.log(lesson['alums']['original'])
            var html = '';
            for(var i = 0;i<lesson['alums']['original'].length;i++){
                var l = lesson['alums']['original'][i];
                html+='<tr class="bg-primary">';
                html+='<th class="id">'+l.alu_id+'</th>';
                html+='<th class="aluName">'+l.alu_name+'</th>';
                html+='<th class="aluImage"><img  height="150px" width="150px" src="http://localhost/ACTapi/storage/app/aluImg/'+l.alu_image+'"></th>';
                html+='<th class="option">'+
                    '<a href="aluminum/edit/'+l.alu_id+' ">Sửa</a>\n' +
                    '<a href="aluminum/delete/'+l.alu_id+' ">Xóa</a>'+

                    '</th>';
                html+='</tr>';
            }
            var profile = document.getElementById('alu')
            profile.innerHTML = html;
        }
    </script>
@endsection