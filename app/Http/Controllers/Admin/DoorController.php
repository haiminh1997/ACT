<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin\AluminumModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\Admin\DoorModel;

class DoorController extends Controller
{
    public function index(){
        $data['listalu'] = DoorModel::all();
        $data['doors'] = DB::table('doors')->paginate(2);
        return view('admin.door.index',$data);
    }
    public function getcreate(){
        $data['listalu'] = AluminumModel::all();
        return view('admin.door.create',$data);
    }
    public function postcreate(Request $request){
        $filename = $request->door_image->getClientOriginalName();
        $door = new DoorModel;
        $door->door_name = $request->door_name;
        $door->door_alu = $request->door_alu;
        $door->door_image = $filename;
        $door->save();
        $request->door_image->storeAs('doorImg',$filename);
        return redirect('admin/act/door');
    }
    public function store(Request $request){
        $validateData = $request->validate([
            'door_name' => 'required|max:255',
            'door_image' => 'required',
        ]);

        $input = $request->all();
        $item = new DoorModel();

        $item->door_name = $input['door_name'];
        $item->door_image = $input['door_image'];
//        $item->door_alu = $input['door_alu'];
        $item->save();
        return redirect('/admin/door');
    }
    public function edit($id){
        $data['doors']= DoorModel::find($id);
        return view('admin.door.edit',$data);
    }
    public function update(Request $request,$id){
        $validateData = $request->validate([
            'door_name' => 'required|max:255',
//            'alu_image' => 'required',
        ]);

        $alu = new DoorModel;
        $arr['door_name'] = $request->door_name;
        $img = $request->door_image->getClientOriginalName();
        $arr['door_image'] = $img;
        $request->door_image->storeAs('doorImg',$img);

        $alu->where('door_id',$id)->update($arr);
        return redirect('admin/act/door');
    }
    public function delete($id){
        DoorModel::destroy($id);
        return back();

    }

}
