<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin\ConstructModel;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConstructController extends Controller
{
    public function index(){
        $data['listuser'] = User::all();
        $data['consts'] = DB::table('constructs')->get();
        return view('admin.construct.index',$data);
}
    public function getcreate(Request $request){
        $data['listuser'] = User::all();
        return view('admin.construct.create',$data);
    }
    public function postcreate(Request $request){
        $construct = new ConstructModel;
        $construct->const_name = $request->const_name;
        $construct->const_user = $request->const_user;
        $construct->save();
//        dd($construct->save());
        return redirect('admin/act/construct');
    }
    public function store(Request $request){
        $validateData = $request->validate([
            'const_name' => 'required|max:255',
        ]);
        $input = $request->all();
        $item = new ConstructModel();

        $item->const_name = $input['const_name'];
        $item->save();
        return redirect('/admin/construct');
    }
    public function edit($id){
        $data['const'] = ConstructModel::find($id);
//        $data['listuser'] = User::all();
        return view('admin.construct.edit',$data);

    }
    public function update(Request $request,$id){
        $validateData = $request->validate([
            'const_name' => 'required|max:255',
        ]);

        $input = $request->all();
        $item = ConstructModel::find($id);
        $item->const_name = $input['const_name'];
        $item->save();
        return redirect('/admin/act/construct');

    }
    public function delete($id){
        $item = ConstructModel::find($id);
        $item->delete();
        return back();
    }

}
