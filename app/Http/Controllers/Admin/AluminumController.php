<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin\AluminumModel;
use App\Model\Admin\ConstructModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AluminumController extends Controller
{
    public function index(){
        $data['listconst'] = AluminumModel::all();
        $data['alums'] = DB::table('aluminums')->paginate(2);
        return view('admin.aluminum.index',$data);
    }
    public function getcreate(){
        $data['listconst'] = ConstructModel::all();
        return view('admin.aluminum.create',$data);
    }
    public function postcreate(Request $request){
        $filename = $request->alu_image->getClientOriginalName();
        $aluminum = new AluminumModel;
        $aluminum->alu_name = $request->alu_name;
        $aluminum->alu_const = $request->alu_const;
        $aluminum->alu_image = $filename;
        $aluminum->save();
        $request->alu_image->storeAs('aluImg',$filename);
        return redirect('admin/act/aluminum');
    }
    public function store(Request $request){
        $validateData = $request->validate([
            'alu_name' => 'required|max:255',
            'alu_image' => 'required',
        ]);

        $input = $request->all();
        $item = new AluminumModel();

        $item->alu_name = $input['alu_name'];
        $item->alu_image = $input['alu_image'];
        $item->save();
        return redirect('/admin/aluminun');
    }
    public function edit($id){
        $data['alus']= AluminumModel::find($id);
//        $listconst = ConstructModel::find($id);
        return view('admin.aluminum.edit',$data);
    }
    public function update(Request $request,$id){
        $validateData = $request->validate([
            'alu_name' => 'required|max:255',
//            'alu_image' => 'required',
        ]);

        $alu = new AluminumModel;
        $arr['alu_name'] = $request->alu_name;
//        $arr['alu_const'] = $request->alu_const;

//        dd($request->all());
//        if($request->hasFile('img')){
            $img = $request->alu_image->getClientOriginalName();
            $arr['alu_image'] = $img;
            $request->alu_image->storeAs('aluImg',$img);
//        }

        $alu->where('alu_id',$id)->update($arr);
        return redirect('admin/act/aluminum');
    }
    public function delete($id){
        AluminumModel::destroy($id);
        return back();

    }

}
