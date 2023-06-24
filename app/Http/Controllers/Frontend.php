<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
class Frontend extends Controller
{
    public function index(){
        $products = product::where('status', '1')->get();
        return view('welcome',compact('products'));
    }
    public function details($id){
        $product = product::find($id);
        return view('details',compact('product'));
    }
}
