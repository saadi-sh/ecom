<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $product = Product::all();
        $category = Category::all();
        //return response()->json(['data'=>$data],200);
        return view('index',compact('product','category'));
    }
}
