<?php
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\User\UserDasboardComponent;
use App\Http\Livewire\Admin\DashboardComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminProductComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminEditProductComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',HomeComponent::class);

Route::get('/shop',ShopComponent::class);

Route::get('/cart',CartComponent::class);

Route::get('/checkout',CheckoutComponent::class);

// for user or customer
Route::group(['middleware'=>'auth:sanctum'],function(){ 
	Route::get('/user/dashboard', UserDasboardComponent::class)->name('user.dashboard');
   
});

// for Admin
Route::group(['middleware'=>'auth:sanctum','authadmin'],function(){ 
   Route::get('/admin/dashboard',DashboardComponent::class)->name('admin.dashboard');
   Route::get('/admin/categories', AdminCategoryComponent::class)->name('admin.categories');
   Route::get('/admin/categories/add' , AdminAddCategoryComponent::class)->name('admin.addcategory');
   Route::get('/admin/products',AdminProductComponent::class)->name('admin.products');
   Route::get('/admin/product/add', AdminAddProductComponent::class)->name('admin.addproduct');
   Route::get('/admin/category/edit/{category_slug}', AdminEditCategoryComponent::class)->name('admin.editcategory');
   Route::get('/admin/product/edit/{product_slug}', AdminEditProductComponent::class)->name('admin.editproduct');
}); 


 