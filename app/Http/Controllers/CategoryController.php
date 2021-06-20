<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        if($category)
        {
           return response()->json(['category'=>$category],200); 
        }
        else
        {
           return response()->json(['message'=>'Kindly Add Records'],404); 
        }
        
    }
    public function show($id)
    {
        $category = Category::find($id);
        if($category)
        {
           return response()->json(['category'=>$category],200); 
        }
        else
        {
           return response()->json(['message'=>'No record found'],404); 
        }
    }
    public function store(Request $r)
    {
        $r->validate([
            'name'=>'required|max:15|min:3',
            'icon'=>'required|image|mimes:jpg,png,gif,jpeg'
        ]);
        $category=Category::create([
            'name'=>$r->name,
            'icon'=>$r->icon,
        ]);
        if($category){
            $image=$r->icon;
            $img_name=time().'-'.$image->getClientOriginalName();
            $path=public_path('img/category/');
            $image->move($path,$img_name);
            $category->icon=$img_name;
            $category->save();
            return response()->json(['message'=>'Category Added successfully'],200);
         }
         else
         {
            return response()->json(['message'=>'somethig went wrong please try againg']);
         }
    }
}
