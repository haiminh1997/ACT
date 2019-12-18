@extends('admin.layout.master')
@section('title')
    Công trình
    @endsection
@section('main')

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách công trình</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-7 col-lg-7">
            <a href="{{ asset('api/admin/act/construct/create') }}" class="btn btn-primary">Thêm công trình</a>
            <div class="panel panel-primary">
                <div class="panel-heading">Danh sách công trình</div>
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <table class="const table table-bordered">
                            <thead>
                            <tr class="bg-primary">
                                <th class="id">ID </th>
                                <th class="constName">Tên công trình</th>
                                <th class="option" style="width:30%">Tùy chọn</th>
                            </tr>
                            </thead>
                            <thead id="const">
                            <tr >
                            </tr>

                            <tbody>
                            {{--@foreach(json_decode($consts,true) as $const)--}}
                            {{--<tr>--}}
                                {{--<td>{{ $const->const_id }}</td>--}}
                                {{--<td>--}}
                                    {{--<a href="{{ asset('api/admin/act/construct/edit/'.$const->const_id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>--}}
                                    {{--<a href="{{ asset('api/admin/act/construct/delete/'.$const->const_id) }}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>--}}
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
    http.open('GET','http://localhost/ACTapi/public/api/admin/act/constructAdmin',true);
    http.send();
    http.onreadystatechange = function(){
        if(this.readyState == 4){
            renderLesson(JSON.parse(this.responseText));
        }

    }

    function renderLesson(lesson){
        console.log(lesson['consts']['original'])
        var html = '';
        for(var i = 0;i<lesson['consts']['original'].length;i++){
            var l = lesson['consts']['original'][i];
            html+='<tr class="bg-primary">';
            html+='<th class="id">'+l.const_id+'</th>';
            html+='<th class="constName">'+l.const_name+'</th>';
            html+='<th class="option">'+
                // +l.const_id+
                   '<a href="construct/edit/'+l.const_id+' ">Sửa</a>\n' +
                '<a href="construct/delete/'+l.const_id+' ">Xóa</a>'+

                '</th>';
            html+='</tr>';
        }
        var profile = document.getElementById('const')
        profile.innerHTML = html;
    }
</script>
@endsection