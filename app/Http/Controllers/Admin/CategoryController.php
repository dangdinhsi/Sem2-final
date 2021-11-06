<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    public function list(Request $request){
        $keyword = $request->keyword;
        $categories = Category::orderBy('created_at', 'DESC')->paginate(2);
        if(isset($categories)){
            if($keyword){
                $categories = Category::where('name','like','%'.$keyword.'%')->orderBy('created_at', 'DESC')->paginate(2);
            }
            return view('Admin.category.list',compact('categories','keyword'));
        }
    }
    public function create(){
        return view('Admin.category.create');
    }
    public function save(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'description'=>'required',
            'status'=>'required',
        ],[
            'name.required'=>'Không thể bỏ trống trường này',
            'description.required'=>'Không thể bỏ trống trường này',
            'status.required'=>'Không thể bỏ trống trường này',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->created_at = Carbon::now('Asia/Ho_Chi_Minh');
        $category->updated_at = Carbon::now('Asia/Ho_Chi_Minh');
        $category->status =$request->status;
        $category->save();
        Alert::success('Thêm '.$request->name.' thành công!');
        return redirect()->route('admin.category.list');
    }

    public function delete($id){
        Category::find($id)->delete();
        Alert::success('Xóa thành công!');
        return redirect()->route('admin.category.list');
    }
}
