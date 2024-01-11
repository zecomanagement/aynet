<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Location;
use App\Models\CompDetail;
use App\Models\EndProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;

class EndProductsController extends Controller
{
    public function endProduct($id)
    {
        $eProduct = EndProduct::where('id', $id)->first();
        $location = Location::all();
        $cart = Cart::content();
        //dd($cart);
        $company = CompDetail::all();

        return view('admin.frontend.endProduct.endPr', compact('eProduct', 'id',  'location', 'cart', 'company'));
    }

    public function viewEP()
    {
        $product = Product::where('category', 'end_products')->get();
        return view('admin.frontend.shop.viewShop', compact('product'));
    }

    //public function viewEP(){
        //$eProduct = EndProduct::all();
        //return view('admin.frontend.endProduct.viewEP', compact('eProduct'));
    //}

    public function addEP(){
        return view('admin.frontend.endProduct.addEP');
    }

    public function storeEP(Request $request){
        $eProduct = new EndProduct;
        $eProduct->name = $request->name;
        $eProduct->category = $request->category;
        $eProduct->briefDesc = $request->briefDesc;
        $eProduct->longDesc = $request->longDesc;
        $eProduct->price = $request->price;
        $eProduct->image = $request->image;

        if ($request->file('image')) {
            $file = $request->file('image');
            //@unlink(public_path('upload/user_image/' . $data->image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/ep_image'), $filename);
            $eProduct['image'] = $filename;
        }

        $eProduct->save();

        $notification = array(
            'message' => 'Product Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
        
    }
}
