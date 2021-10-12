<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\SubCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }
    public function store(Request $request){
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function delete($id){
        $category = Category::find($id);
        $category->delete();
        $notification = array(
            'messege' => 'Supreme!',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }
    public function subcategoryindex(){
        $categories = Category::all();
        $subcategories = SubCategory::all();
        return view('admin.subcategory.index', compact('categories', 'subcategories'));
    }
    public function subcategorystore(Request $request){
        $category = new SubCategory();
        $category->name = $request->name;
        $category->category_id = $request->category_id;
        $category->save();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function subcategorydelete($id){
        $category = SubCategory::find($id);
        $category->delete();
        $notification = array(
            'messege' => 'Supreme!',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }
    public function fetchsubcategory(Request $request){
        $subcategories = SubCategory::where('category_id', '=', $request->id)->get();
        return response()->json($subcategories);
    }
}
