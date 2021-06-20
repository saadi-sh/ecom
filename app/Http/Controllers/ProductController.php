<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        if($products)
        {
           return response()->json(['products'=>$products],200); 
        }
        else
        {
           return response()->json(['message'=>'Kindly Add Records'],404); 
        }
        
    }


    public function show($id)
    {
        $product = Product::find($id);
        $category = Category::all();
        if($product)
        {
           //return response()->json(['product'=>$product],200); 
            return view('details',compact('product','category'));
        }
        else
        {
           return response()->json(['message'=>'No record found'],404); 
        }
    }
    public function store(Request $r)
    {
        $r->validate([
            'cat_id'=>'required',
            'name'=>'required',
            'price'=>'required',
            'desc'=>'required',
            'qty'=>'required',
            'f_img'=>'required',
        ]);
        $status = '1';
        $product=Product::create([
            'cat_id'=>$r->cat_id,
            'name'=>$r->name,
            'desc'=>$r->desc,            
            'price'=>$r->price,
            'qty'=>$r->qty,
            'f_img'=>$r->f_img,
            'd_img'=>$r->d_img,
            'status'=>$status,
        ]);
        if($product)
        {
            $img=$r->f_img;
            $img_name=time().'_'.$img->getClientOriginalName();
            $path=public_path('img/product/');
            $img->move($path,$img_name);
            $product->f_img=$img_name;
            
            $imgs=[];

            if($r->d_img)
            {
                foreach($r->d_img as $image)
                {
                    $name=time().'_'.$image->getClientOriginalName();
                    $path=public_path('img/product/');
                    $image->move($path,$name);
                    array_push($imgs, $name);
                }
                $product->d_img=json_encode($imgs);
                $product->save();
                return response()->json(['message'=>'Product Added successfully'],200);
            }
            else
            {
                $product->save();
                return response()->json(['message'=>'Product Added successfully'],200);
            }
        }
        else
        {
            return response()->json(['message'=>'somethig went wrong please try againg'],404);
        }
    }
}
