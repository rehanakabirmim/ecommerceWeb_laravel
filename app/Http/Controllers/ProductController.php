<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use File;
use App\Models\product;

class ProductController extends Controller
{
    public function add(){
        return view("backend.add");
    }
    public function store(Request $request){
        if($request->image){
            $image = $request->file('image');
            $customName = rand().".".$image->getClientOriginalExtension();
            $path = public_path("uploads/".$customName);
            Image::make($image)->resize(212,264)->save($path);
        }
        product::create([
            'name' =>$request->name,
            'category_name' =>$request->category_name,
            'brand_name' =>$request->brand_name,
            'description' =>$request->description,
            'image' =>$customName,
        ]);
        return redirect()->route('product.manage')->with('message', 'product added successfully');
    }


    public function manage()
    {
        $products = Product::all();
       return view('backend.manage',compact('products'));
    }
    public function edit($id)
    {
        $products = Product::find($id);
        return view('backend.editProduct',compact('products'));
    }

    public function update(Request $request, $id)
    {
        $product =  Product::find($id);
        if($request->image){

            $old_image = $product->image;
            if(File::exists(public_path('uploads/'.$old_image))){
                File::delete(public_path('uploads/'.$old_image));
            }
            $image = $request->file('image');
            $custome_name = rand(). ".".$image->getClientOriginalExtension();
            $path = public_path('uploads/'.$custome_name);
            Image::make($image)->save($path);

            $product->name = $request-> name;
            $product->category_name = $request->category_name;
            $product->brand_name = $request->brand_name;
            $product->description = $request->description;
            $product->status = $request->status;
            $product->image = $custome_name;
            $product->update();
        }

        $product->name = $request-> name;
        $product->category_name = $request->category_name;
        $product->brand_name = $request->brand_name;
        $product->description = $request->description;
        $product->status = $request->status;
        $product->update();
        return redirect()->route('product.manage')->with('message', 'product update done');

    }

    public function delete($id)
    {
        $product =  Product::find($id);
        $image = $product->image;
        File::delete(public_path('uploads/'.$image));
        $product->delete();
        return redirect()->route('product.manage')->with('message', 'product delete done');

    }

}
