<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Product;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use App\Models\Category;
class AdminEditProductComponent extends Component
{
	use WithFileUploads;

	public $name, $slug, $description, $price, $SKU, $stock_status, $featured, $quantity, $image, $category_id, $newimage, $product_id;

	public function mount($product_slug)
	{
		$product = Product::where('slug', $product_slug)->first();
		$this->name = $product->name; 
		$this->slug = $product->slug; 
		$this->description = $product->description; 
		$this->price = $product->price; 
		$this->SKU = $product->SKU; 
		$this->stock_status = $product->SKU; 
		$this->featured = $product->featured; 
		$this->quantity = $product->quantity; 
		$this->image = $product->image; 
		$this->category_id = $product->category_id;  
		$this->product_id = $product->product_id;
	}

	public function generateSlug()
	{
		$this->slug = Str::slug($this->name, '-');
	}

	public function updateProduct()
	{
		$product = Product::find($this->id);
		$product->name = $this->name;
		$product->slug = $this->slug;
		$product->description = $this->description;
		$product->price = $this->price;
		$product->SKU = $this->SKU;
		$product->stock_status = $this->stock_status;
		$product->featured = $this->featured;
		$product->quantity = $this->quantity;
		if($this->newimage)
		{
			$imageName = Carbon::now()->timestamp.'.'.$this->newimage->extension();
			$this->newimage = $imageName;
			$product->image = $imageName;
		}
		
		$product->category_id = $this->category_id;
		$product->save();
		session()->flash('message', 'Product has Been Updated Successfully');
	}

    public function render()
    {
    	$categories = Category::all();
        return view('livewire.admin.admin-edit-product-component', compact('categories'))->layout('layouts.base');
    }
}
