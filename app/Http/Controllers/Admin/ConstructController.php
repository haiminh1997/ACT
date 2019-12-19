<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin\ConstructModel;
use App\Transformers\ConstructTransformer;
use App\Transformers\UserTransformer;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Dingo\Api\Routing\Helpers;
use Tymon\JWTAuth\JWTAuth;

class ConstructController extends Controller
{

    use Helpers;
    protected $user;
    public function __construct()
    {
        $this->user = JWTAuth::parseToken()->authenticate();
    }
    public function indexAdmin(){
        $data['consts']= $this->response->collection(ConstructModel::all(), new ConstructTransformer());
        return $data;
    }
    public function index(){
        return view('admin.construct.index');
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
        return redirect('api/admin/act/construct');
    }
    public function store(Request $request){
        $validateData = $request->validate([
            'const_name' => 'required|max:255',
        ]);
        $input = $request->all();
        $item = new ConstructModel();

        $item->const_name = $input['const_name'];
        $item->save();
        return redirect('api/admin/construct');
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
        return redirect('api/admin/act/construct');

    }
    public function delete($id){
        $item = ConstructModel::find($id);
        $item->delete();
        return back();
    }

}
