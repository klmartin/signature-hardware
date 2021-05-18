<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category;

class AdminCategoryComponent extends Component
{
	use WithPagination;

	public function deleteCategory($id)
	{
		$categories = Category::find($id);
		$categories->delete();
		session()->flash('message', 'Category is Deleted');
	}
	
    public function render()
    {
    	$categories = Category::paginate(5);
        return view('livewire.admin.admin-category-component',['categories'=>$categories])->layout('layouts.base');
    }
}
