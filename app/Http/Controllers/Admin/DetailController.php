<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin\DoorModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\Admin\DetailModel;

class DetailController extends Controller
{
    public function index(){
        $data['listdoor'] = DetailModel::all();
        $data['details'] = DB::table('detail_doors')->paginate(8);
        return view('admin.detail.index',$data);
    }
    public function getcreate(){
        $data['listdoor'] = DoorModel::all();
        return view('admin.detail.create',$data);
    }
    public function postcreate(Request $request){
        $filename = $request->image->getClientOriginalName();
        $detail = new DetailModel;
        $detail->nameCustomer = $request->nameCustomer;
        $detail->symbol_door = $request->symbol_door;
        $detail->width = $request->width;
        $detail->height = $request->height;
        $detail->H1 = $request->H1;
        $detail->HCC = $request->HCC;
        $detail->type_glass = $request->type_glass;
        $detail->count = $request->count;
        $detail->price_glass = $request->price_glass;
        $detail->price_alu = $request->price_alu;
        $detail->door_detail = $request->door_detail;
        $detail->image = $filename;
        $detail->save();
        $request->image->storeAs('detailImg',$filename);
        return redirect('admin/act/detail');
    }
    public function store(Request $request){
        $validateData = $request->validate([
            'nameCustomer' => 'required|max:255',
            'symbol_door' => 'required',
            'image' => 'required',
            'width' => 'required',
            'height' => 'required',
            'H1' => 'required',
            'HCC' => 'required',
            'type_glass' => 'required',
            'count' => 'required',
            'price_glass' => 'required',
            'price_alu' => 'required',
        ]);

        $input = $request->all();
        $item = new DetailModel();

        $item->nameCustomer = $input['nameCustomer'];
        $item->symbol_door = $input['symbol_door'];
        $item->image = $input['image'];
        $item->width = $input['width'];
        $item->height = $input['height'];
        $item->H1 = $input['H1'];
        $item->HCC = $input['HCC'];
        $item->type_glass = $input['type_glass'];
        $item->count = $input['count'];
        $item->price_glass = $input['price_glass'];
        $item->price_alu = $input['price_alu'];
        $item->save();
        return redirect('/admin/detail');
    }
    public function edit($id){
        $data['details']= DetailModel::find($id);
        return view('admin.detail.edit',$data);
    }
    public function update(Request $request,$id){
        $validateData = $request->validate([
            'nameCustomer' => 'required|max:255',
            'symbol_door' => 'required',
            'image' => 'required',
            'width' => 'required',
            'height' => 'required',
            'H1' => 'required',
            'HCC' => 'required',
            'type_glass' => 'required',
            'count' => 'required',
            'price_glass' => 'required',
            'price_alu' => 'required',
        ]);

        $alu = new DetailModel;
        $arr['nameCustomer'] = $request->nameCustomer;
        $arr['symbol_door'] = $request->symbol_door;
        $arr['width'] = $request->width;
        $arr['height'] = $request->height;
        $arr['H1'] = $request->H1;
        $arr['HCC'] = $request->HCC;
        $arr['type_glass'] = $request->type_glass;
        $arr['count'] = $request->count;
        $arr['price_glass'] = $request->price_glass;
        $arr['price_alu'] = $request->price_alu;


        $img = $request->image->getClientOriginalName();
        $arr['image'] = $img;
        $request->image->storeAs('detailImg',$img);

        $alu->where('detail_id',$id)->update($arr);
        return redirect('admin/act/detail');
    }
    public function delete($id){
        DetailModel::destroy($id);
        return back();

    }
}
