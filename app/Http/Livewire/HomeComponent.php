<?php

namespace App\Http\Livewire;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Product;

class HomeComponent extends Component
{
    public function render()
    {
        $products = product::paginate(10);
        return view('livewire.home-component',['products'=>$products])->layout('layouts.base');
    }
}
