<div>
	<style type="text/css">
		nav svg{
			height: 20px;
		}
		nav .hidden{
			display: block !imporntant;
		} 
	</style>
      <div class="container" style="padding: 30px 0;">
   	<div class="row">
   		<div class="col-md-12">
   			<div class="card">
   				<div class="card-header">
   					<div class="row">
   						<div class="col-md-6">
   							All Products
   					</div>
   					<div class="col-md-6">
   						<a href="{{route('admin.addproduct')}}" class="btn btn-success pull-right">Add New Product</a>
   					</div>
   			</div>
   			<div class="card-body">
   				<table class="table table-striped">
   					<thead>
   						<tr>
   							<th>id</th>
   							<th>Image</th>
   							<th>Name</th>
   							<th>Stock</th>
   							<th>Price</th>
   							<th>Category</th>
   							<th>Date</th>
   							<th>Action</th>
   						</tr>
   					</thead>
   					<tbody>
   						@foreach($product as $products)
   						<tr>
   							<td>{{$products->id}}</td>
   							<td><img src="{{asset('images')}}/{{$products->image}}" width="60px" /></td>
   							<td>{{$products->name}}</td>
   							<td>{{$products->stock_status}}</td>
   							<td>{{$products->price}}</td>
   							<td>{{$products->category->name}}</td>
   							<td>{{$products->created_at}}</td>
   							<td>
                           <a href="{{route('admin.editproduct', ['product_slug'=>$products->slug])}} ">Edit</a>
                           <a href="#" wire:click.prevent="deleteProduct({{$products->id}})" >Delete</a>
                        </td>
   						</tr>
   						@endforeach
   					</tbody>
   				</table>
   				{{ $product->links() }}
   			</div>
   		</div>
   	</div>
   </div>
</div>
</div>
</div>
