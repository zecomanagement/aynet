<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Plot;
use App\Models\Ward;
use App\Models\County;
use App\Models\Product;
use App\Models\CartItem;
use App\Models\Location;
use App\Models\Seedling;
use App\Models\CartOrder;
use App\Models\SubCounty;
use App\Models\CompDetail;
use App\Models\DonateTree;
use App\Models\EndProduct;
use App\Models\ProSubSect;
use App\Models\ProjectItem;
use App\Models\ProjectOrder;
use Illuminate\Http\Request;
use App\Models\DeliveryDetail;
use App\Http\Controllers\Controller;
use App\Models\ProjectDeliveryDetail;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function deliveryReport()
    {
        $status = DeliveryDetail::all();
        return view('admin.frontend.cart.deliveryStatus', compact('status'));
    }
    
    public function viewShop()
    {
        //$seedling = Seedling::all();
        $product = Product::where('category', 'seedling')->get();

        return view('admin.frontend.shop.viewShop', compact('product'));
    }

    public function viewTrees()
    {

        $product = Product::where('category', 'trees')->get();

        return view('admin.frontend.shop.viewShop', compact('product'));
    }

    public function subPro()
    {
        $product = Plot::all();
        return view('admin.frontend.shop.plots', compact('product'));
    }

    

    public function subSectDts($id)
    {
        $subSect = ProSubSect::where('id', $id)->first();
        $location = Location::all();
        $cart = Cart::content();
        $company = CompDetail::all();


        return view('admin.frontend.shop.subSectDts', compact('location', 'cart', 'company', 'subSect'));
    }


    public function viewCart()
    {
        $product = Product::all();
        $cart = Cart::content();
        //dd($cart);
        $subTotal = Cart::subtotal();
        return view('admin.frontend.cart.viewCart', compact('cart', 'subTotal', 'product'));
    }



    public function viewProjectsCart()
    {
        $product = Plot::all();
        $cart = Cart::content();
        $subTotal = Cart::subtotal();
        return view('admin.frontend.cart.viewProjectsCart', compact('cart', 'subTotal', 'product'));
    }

    public function checkOut()
    {
        $cart = Cart::content();
        $subTotal = Cart::subtotal();
        $county = County::all();
        $subCounty = SubCounty::all();
        $ward = Ward::all();
        return view('admin.frontend.cart.checkOut', compact('cart', 'subTotal', 'county', 'subCounty', 'ward'));
    }

    public function projectCheckOut()
    {
        $cart = Cart::content();
        $subTotal = Cart::subtotal();

        return view('admin.frontend.cart.projectCheckOut', compact('cart', 'subTotal'));
    }

    public function storeCart(Request $request)
    {
        $seedling = Seedling::findorFail($request->input('seed_id'));
        //dd($seedling);
        Cart::add(
            $seedling->id,
            $seedling->name,
            $request->input('qty'),
            $seedling->uPrice,
            //$request->input('weight'),
            //[
            //'image' => $seedling->image
            //]


        );

        $notification = array(
            'message' => 'Product added to cart successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('shop.view')->with($notification);
    }

    public function storeSbCart(Request $request)
    {
        $subSect = ProSubSect::findorFail($request->input('subSect'));
        //dd($seedling);
        Cart::add(
            $subSect->id,
            $subSect->name,
            $request->input('qty'),
            $subSect->value,


        );

        $notification = array(
            'message' => 'Project added to cart successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('shop.project.view')->with($notification);
    }

    public function storeEProduct(Request $request)
    {
        $eProduct = EndProduct::findorFail($request->input('product_id'));
        //dd($seedling);
        Cart::add(
            $eProduct->id,
            $eProduct->name,
            $request->input('qty'),
            $eProduct->price,
            //[
            //'image' => $eProduct->image
            //]

        );

        $notification = array(
            'message' => 'Product added to cart successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('view.ep')->with($notification);
    }

    public function storeTrees(Request $request)
    {
        $trees = DonateTree::findorFail($request->input('tree_id'));
        //dd($trees);
        Cart::add(
            $trees->id,
            $trees->name,
            $request->input('qty'),
            $trees->price,
            $request->input('weight'),

            [
                'image' => $trees->image
            ]

        );


        $notification = array(
            'message' => 'Product added to cart successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('view.trees')->with($notification);
    }

    public function storeProduct(Request $request)
    {
        $product = Product::findorFail($request->input('product_id'));
        //dd($trees);
        Cart::add(
            $product->id,
            $product->name,
            $request->input('qty'),
            $product->unit_price,
            $request->input('weight'),

            [
                'image' => $product->image
            ]

        );


        $notification = array(
            'message' => 'Product added to cart successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function storePlot(Request $request)
    {
        $product = Plot::findorFail($request->input('product_id'));
        //dd($trees);
        Cart::add(
            $product->id,
            $product->name,
            $request->input('qty'),
            $product->unit_price,
            $request->input('weight'),

            [
                'image' => $product->image
            ]

        );


        $notification = array(
            'message' => 'Project added to cart successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function removeProduct(Request $request)
    {
        $rowId = $request->input('product_id');
        Cart::remove($rowId);

        $notification = array(
            'message' => 'Product removed from cart successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function viewCartOrder()
    {
        $cartOrder = CartOrder::all();
        return view('admin.frontend.cart.viewCartOrder', compact('cartOrder'));
    }

    

    public function show($id){
        $cartOrder = CartOrder::where('id', $id)->first();
        $cartItems = CartItem::where('order_id', $id)->get();
        $delivery = DeliveryDetail::where('order_id', $id)->get();

        //dd($cartItems);

        return view('admin.frontend.cart.showOrder', compact('cartOrder', 'cartItems', 'delivery'));
    }

    public function editDeliveryStatus($id)
    {
        $editStatus = CartOrder::findorFail($id);
        return view('admin.frontend.cart.editCartStatus', compact('editStatus'));
    }

    public function updateDeliveryStatus(Request $request, $id)
    {
        $status = CartOrder::findorFail($id);
        $status->delivery_status = $request->delivery_status;

        $status->save();

        $notification = array(
            'message' => 'Delivery Status Updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('cart.order.view')->with($notification);
    }

    public function viewCartItems()
    {
        $cartItem = CartItem::all();
        return view('admin.frontend.cart.viewCartItems', compact('cartItem'));
    }

    public function storeCartItems(Request $request)
    {
        $cartItems = Cart::content();
        $user = Auth::user();

        $order = new CartOrder;
        $order->user_id = $user->id;
        $order->total = Cart::subtotal();
        $order->save();

        $order_id = $order->id;

        foreach ($cartItems as $item) {
            $cartItem = new CartItem;
            $cartItem->product_id = $item->id;
            $cartItem->name = $item->name;
            $cartItem->price = $item->price;
            $cartItem->quantity = $item->qty;
            $cartItem->user_id = $user->id;
            $cartItem->order_id = $order_id;
            $cartItem->save();
        }

        $delivery = new DeliveryDetail;
        $delivery->user_id = $user->id;
        $delivery->order_id = $order_id;
        $delivery->county_id = $request->county_id;
        $delivery->subCounty_id = $request->sub_county_id;
        $delivery->ward_id = $request->ward_id;
        $delivery->address = $request->address;
        $delivery->save();

        Cart::destroy();

        return redirect()->route('home.view')->with('success', 'Cart items have been stored successfully!');
    }

    public function viewProjectOrder(){
        $order = ProjectOrder::all();
        return view('admin.frontend.cart.viewProjectsOrder', compact('order'));
    }

    public function viewProjectItems(){
        $projectItems = ProjectItem::all();
        return view('admin.frontend.cart.viewProjectItems', compact('projectItems'));
    }

    public function viewDeliveryDetails(){
        $details = ProjectDeliveryDetail::all();
        return view('admin.frontend.cart.viewProjectDetails', compact('details'));
    }

    public function showProject($id){
        $order = ProjectOrder::where('id', $id)->first();
        $projectItems = ProjectItem::where('order_id', $id)->get();
        $details = ProjectDeliveryDetail::where('order_id', $id)->get();

        return view('admin.frontend.cart.showProject', compact('order', 'projectItems', 'details'));
    }

    public function storeProjectItems(Request $request)
    {
        $cartItems = Cart::content();
        $user = Auth::user();

        $order = new ProjectOrder;
        $order->user_id = $user->id;
        $order->total = Cart::subtotal();
        $order->save();

        $order_id = $order->id;

        foreach ($cartItems as $item) {
            $cartItem = new ProjectItem;
            $cartItem->product_id = $item->id;
            $cartItem->name = $item->name;
            $cartItem->price = $item->price;
            $cartItem->quantity = $item->qty;
            $cartItem->user_id = $user->id;
            $cartItem->order_id = $order_id;
            $cartItem->save();
        }

        $delivery = new ProjectDeliveryDetail();
        $delivery->user_id = $user->id;
        $delivery->order_id = $order_id;
        $delivery->name = $request->name;
        $delivery->email = $request->email;
        $delivery->mobile = $request->mobile;
        $delivery->instructions = $request->instructions;
        $delivery->save();

        $notification = array(
            'message' => 'Project Order Received Successfully',
            'alert-type' => 'success'
        );

        Cart::destroy();

        return redirect()->route('home.view')->with($notification);
    }
}
