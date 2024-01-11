<?php

namespace App\Http\Controllers\Backend;

use App\Models\Plot;
use App\Models\Product;
use App\Models\Location;
use App\Models\CompDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;

class ProductsController extends Controller
{
    public function product($id)
    {
        $products = Product::where('id', $id)->first();
        $location = Location::all();
        $cart = Cart::content();
        //dd($cart);
        $company = CompDetail::all();

        return view('backend.products.products', compact('products', 'id',  'location', 'cart', 'company'));
    }

    public function plot($id)
    {
        $products = Plot::where('id', $id)->first();
        $location = Location::all();
        $cart = Cart::content();
        $company = CompDetail::all();

        return view('backend.products.plots.plots', compact('products', 'id',  'location', 'cart', 'company'));
    }

    public function viewProduct()
    {
        $product = Product::all();
        return view('backend.products.viewProducts', compact('product'));
    }

    

    public function addProduct()
    {
        return view('backend.products.addProducts');
    }

    

    public function storeProduct(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->category = $request->category;
        $product->unit_price = $request->unit_price;
        $product->brief_desc = $request->brief_desc;
        $product->long_desc = $request->long_desc;
        $product->amount = $request->amount;

        if ($request->file('image')) {
            $file = $request->file('image');
            //@unlink(public_path('upload/user_image/' . $data->image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/products'), $filename);
            $product['image'] = $filename;
        }

        $product->save();

        $notification = array(
            'message' => 'Product Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('product.view')->with($notification);
    }

    public function editProduct($id){
        $editProduct = Product::findOrFail($id);
        return view('backend.products.editProducts', compact('editProduct'));
    }

    public function updateProduct(Request $request, $id){
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->category = $request->category;
        $product->unit_price = $request->unit_price;
        $product->brief_desc = $request->brief_desc;
        $product->long_desc = $request->long_desc;
        $product->amount = $request->amount;

        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/products/' . $product->image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/products'), $filename);
            $product['image'] = $filename;
        }

        $product->save();

        $notification = array(
            'message' => 'Product Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('product.view')->with($notification);
    }

    //Plots Logic
    public function viewPlot()
    {
        $plot = Plot::all();
        return view('backend.products.plots.viewPlots', compact('plot'));
    }

    public function addPlot()
    {
        return view('backend.products.plots.addPlots');
    }

    public function submitPlot(Request $request)
    {
        $plot = new Plot;
        $plot->name = $request->name;
        $plot->category = $request->category;
        $plot->unit_price = $request->unit_price;
        $plot->brief_desc = $request->brief_desc;
        $plot->long_desc = $request->long_desc;
        $plot->amount = $request->amount;

        if ($request->file('image')) {
            $file = $request->file('image');
            //@unlink(public_path('upload/user_image/' . $data->image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/plots'), $filename);
            $plot['image'] = $filename;
        }

        $plot->save();

        $notification = array(
            'message' => 'Plot Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('plot.view')->with($notification);
    }

    public function editPlot($id){
        $editPlot = Plot::findOrFail($id);
        return view('backend.products.plots.editPlots', compact('editPlot'));
    }
}
