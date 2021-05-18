<?php

namespace App\Http\Livewire;
use App\Models\Product;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class ShopComponent extends Component
{
	use WithPagination;
    public function render()
    {

    	$products = product::paginate(9);
    	$categories = Category::paginate(12);
        return view('livewire.shop-component',['products'=>$products,'categories'=>$categories])->layout('layouts.base');

    }
}
