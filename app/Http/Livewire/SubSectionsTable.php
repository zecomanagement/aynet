<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Location;
use App\Models\ProSubSect;
use Gloudemans\Shoppingcart\Facades\Cart;

class SubSectionsTable extends Component
{
    public function render()
    {
        $subSection = ProSubSect::all();
        $cart = Cart::content();
        $location = Location::all();
        return view('livewire.sub-sections-table', compact('subSection', 'cart', 'location'));
    }
}
