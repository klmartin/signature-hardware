<div>
  <div class="container" style="padding: 30px 0;">
  	<div class="row">
  		<div class="col-md-12">
  			<div class="card">
  			<div class="card-header">
  				<div class="row">
  					<div class="col-md-6">Edit Product
  					</div>
  					<div class="col-md-6">
  						<a href=" {{route('admin.products')}} " class="btn btn success pull-right"> All Products</a>
  					</div>
  				</div>
  			</div>
  			<div class="card-body">
  				@if(Session::has('message'))
  				<div class="alert alert-success" role="alert"> {{Session::get('message')}}  </div>
  				@endif
  				<form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="updateProduct">
  					<div class="form-group">
  						<label class="col-md-4 control-label" >Product Name</label>
  						<div class="col-md-4"><input type="text" wire:keyup="generateSlug" placeholder="Product Name" class="form-control input-md" wire:model="name"  />
  						</div>
  					</div>
  					<div class="form-group">
  						<label class="col-md-4 control-label" >Product Slug</label>
  						<div class="col-md-4"><input type="text"  placeholder="Product Name" class="form-control input-md" wire:model="slug" />
  						</div>
  					</div>

  					<div class="form-group">
  						<label class="col-md-4 control-label" >Description</label>
  						<div class="col-md-4"><textarea class="form-control" placeholder="Description" wire:model="description" ></textarea>
  						</div>
  					</div>

  					
  					<div class="form-group">
  						<label class="col-md-4 control-label" >Sale Price</label>
  						<div class="col-md-4"><input type="text"  placeholder="Sale Price" class="form-control input-md" wire:model="price" />
  						</div>
  					</div>

  					<div class="form-group">
  						<label class="col-md-4 control-label" >SKU</label>
  						<div class="col-md-4"><input type="text"  placeholder="SKU" class="form-control input-md" wire:model="SKU" />
  						</div>
  					</div>

  					<div class="form-group">
  						<label class="col-md-4 control-label" >Stock Status</label>
  						<div class="col-md-4"><select class="form-control" wire:model="stock_status">
  							<option value="instock">InStock</option>
  							<option value="outofstock">Out of Stock</option>
  						</select>
  						</div>
  					</div>

  					<div class="form-group">
  						<label class="col-md-4 control-label" >Featured</label>
  						<div class="col-md-4">
  						<select class="form-control" wire:model="featured">
  							<option value="0">No</option>
  							<option value="1">Yes</option>
  						</select>
  						</div>
  					</div>

  					<div class="form-group">
  						<label class="col-md-4 control-label" >Quantity</label>
  						<div class="col-md-4"><input type="text"  placeholder="Quantity" class="form-control input-md" wire:model="quantity" />
  						</div>
  					</div>

  					<div class="form-group">
  						<label class="col-md-4 control-label" >Product Image</label>
  						<div class="col-md-4"><input type="file"  class="input-file" wire:model="newimage" />
  							@if($newimage)
  								<img src=" {{$newimage->temporaryUrl()}} " width="120" />
  							@else
  								<img src=" {{asset('assets/images/products')}}/{{$image}} " width="120"/>
  							@endif
  						</div>
  					</div>

  					<div class="form-group">
  						<label class="col-md-4 control-label" >Category</label>
  						<div class="col-md-4">
  						<select class="form-control" wire:model="category_id" >
  							<option>Select Category</option>
  							@foreach($categories as $category)
  							<option value="{{$category->id}}"> {{$category->name}} </option>
  							@endforeach
  						</select>
  						</div>
  					</div>

  					<div class="form-group">
  						<button type="submit" class="btn btn-primary">Update</button>
  					</div>
  				</form>
  			</div>
  		</div>
  		</div>
  	</div>
  </div>
</div>
