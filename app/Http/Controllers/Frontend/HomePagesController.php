<?php

namespace App\Http\Controllers\Frontend;

use App\Models\County;
use App\Models\Product;
use App\Models\Location;
use App\Models\CompDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;

class HomePagesController extends Controller
{
    public function home()
    {
        return view('admin.frontend.member_home');
    }

    public function outgrower()
    {
        return view('admin.frontend.outhome');
    }

    public function virtual()
    {
        return view('admin.frontend.vhome');
    }

    public function consumer()
    {
        return view('admin.frontend.ec_home');
    }

    public function test(){
        $products = Product::all();
        $location = Location::all();
        $cart = Cart::content();
        //dd($cart);
        $company = CompDetail::all();
        
        return view('admin.frontend.pages', compact('products', 'location', 'cart', 'company'));
    }
}
