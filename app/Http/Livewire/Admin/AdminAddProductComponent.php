<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminAddProductComponent extends Component
{
	use WithFileUploads;
	public $name, $slug, $description, $price, $SKU, $stock_status, $featured, $quantity, $image, $category_id;

	public function mount()
	{
		$this->stock_status = 'instock';
		$this->featured = 0;
	}

	public function generateSlug()
	{
		$this->slug = Str::slug($this->name, '-');
	}

	public function addProduct()
	{
		$product = new Product();
		$product->name = $this->name;
		$product->slug = $this->slug;
		$product->description = $this->description;
		$product->price = $this->price;
		$product->SKU = $this->SKU;
		$product->stock_status = $this->stock_status;
		$product->featured = $this->featured;
		$product->quantity = $this->quantity;
		$imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
		$this->image = $imageName;
		$product->image = $imageName;
		$product->category_id = $this->category_id;
		$product->save();
		session()->flash('message', 'product has been created succesfully');
	}

    public function render()
    {
    	$categories = Category::all();
        return view('livewire.admin.admin-add-product-component', ['categories'=>$categories])->layout('layouts.base');
    }
}
