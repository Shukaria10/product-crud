<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use function Symfony\Component\Finder\name;


class ProductController extends Controller
{
    private $product,$products;

    public function add()
    {
        return view('product.add');
    }

    public function manage()
    {
        $this->product =Product::all();
        return view('product.manage',['products' => $this->product]);
    }
    public function create(Request $request)
    {
        Product::newProduct($request);
        return redirect('/add-product')->with('message','Product info successfully');
    }
    public function edit($id)
    {
        $this->product = Product::find($id);
        return view('product.edit' , ['product' => $this->product]);
    }
    public function update(Request $request,$id)
    {
        Product::upDateProduct($request,$id);
        return redirect('/manage-product')->with('message' , "Update Product Successfully");
    }

    public function delete($id)
    {
       Product::deleteProduct($id);
       return redirect('/manage-product')->with('message' , "Delete Product Successfully");
    }
}
