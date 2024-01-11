<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Location;
use App\Models\Seedling;
use Gloudemans\Shoppingcart\Facades\Cart;

class SeedlingsTable extends Component
{
    public $seedlings;
    public array $quantity = [];



    public function render()
    {

        $seedling = Seedling::all();
        $cart = Cart::content();
        $location = Location::all();
        return view('livewire.seedlings-table', compact('seedling', 'cart', 'location'));
    }
}
