<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('category.index',compact('category'));
    }
    public function add_category()
    {
        return view('category.add');
    }
    public function category_store(Request $request){
		
		

	Category::insert([
	'title'=>$request->title,
	'created_at'=>Carbon::now(),
	]);
		
	return redirect('/category');
	}
	public function edit_category($id)
	{
		$category=Category::where('id',$id)->first();
		return view('category.edit',compact('category'));
	}

	// public function update(Request $request){
	// dd($request->all());
	// }
	public function update_category(Request $request){
		
		$res=Category::
            where('id', $request->id)
			->update([

                'title'=>$request->title
            ]
            );
		
		return redirect('/category');
	}
	public function delete_category($id)
	{
		// Category::findOrFail($id)->delete();
		$data = Category::find($id);
		$data->delete();
		return redirect()->back();

	}

}
