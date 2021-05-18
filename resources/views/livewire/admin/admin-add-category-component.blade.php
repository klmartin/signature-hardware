<div>
    <div class="container" style="padding: 30px o;">
    	<div class="row">
    		<div class="col-md-12">
    		<div class="card">
    		<div class="card-header">
    			<div class="row">
    				<div class="col-md-6">
    					Add New Category
    				</div>
    				<div class="col-md-6">
    					<a href="{{route('admin.categories')}}"  class="btn btn-success pull-right"> All Category </a>
    				</div>
    			</div>
    		</div>
    		<div class="card-body">
    			@if(Session::has('message'))
    			<div class "alert alert-success" role="alert">{{Session::get('message')}}</div>
    			@endif
    		<form class="form-horizontal" wire:submit.prevent="storeCategory">
    			<div class="form-group">
    				<label class="col-md-4 control-label">Category Name</label>
    				<div class="col-md-4">
    					<input type="text" wire:model="name" wire:keyup="generateslug" placeholder="Category Name" class="form-control input-md" />
    			</div>
    				<div class="form-group">
    				<label class="col-md-4 control-label">Category Slug</label>
    				<div class="col-md-4">
    					<input type="text" wire:model="slug" placeholder="Category slug" class="form-control input-md" />
    			</div>
    				<div class="form-group">
    				<div class="col-md-4">
    					<button type="submit" class="btn btn-primary">Add</button>
    			</div>
    		</div>
    	</div>
    </div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
    		