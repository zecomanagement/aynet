<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Location;
use App\Models\CompDetail;
use App\Models\DonateTree;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;

class DonateTreesController extends Controller
{
    public function treeDts($id)
    {
        $trees = DonateTree::where('id', $id)->first();
        $location = Location::all();
        $cart = Cart::content();
        //dd($cart);
        $company = CompDetail::all();

        return view('admin.frontend.donate.treeDts', compact('trees', 'company', 'id', 'location', 'cart'));
    }
    //public function viewTrees()
    //{
        //$trees = DonateTree::all();
        //return view('admin.frontend.donate.trees', compact('trees'));
    //}

    public function viewTrees()
    {
        
        $product = Product::where('category', 'trees')->get();

        return view('admin.frontend.shop.viewShop', compact('product'));
    }

    public function addTrees()
    {
        return view('admin.frontend.donate.addTree');
    }

    public function storeTrees(Request $request){
        $trees = new DonateTree;
        $trees->name = $request->name;
        $trees->price = $request->price;
        $trees->longDesc = $request->longDesc;
        $trees->briefDesc = $request->briefDesc;
        $trees->image = $request->image;

        if ($request->file('image')) {
            $file = $request->file('image');
            //@unlink(public_path('upload/user_image/' . $data->image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/tree_image'), $filename);
            $trees['image'] = $filename;
        }

        $trees->save();

        $notification = array(
            'message' => 'Tree Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
