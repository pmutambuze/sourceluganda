@extends('layouts.app')
@section('content')
<div class="container">
    <div class="page-header">
        <h1 class="page-title">
        Create Library Category
        </h1>
    </div>
    <div class="col-lg-12 mx-auto">
        <form class="card" method="post" action="{{route('categories.store')}}">
		    @csrf
		    <div class="card-body">
		        <h3 class="card-title">Basic Information</h3>
		        <div class="row">
		        <div class="col-md-10">
		            <div class="form-group">
		            <label class="form-label">Title</label>
		            <input type="text" name="title" class="form-control"  placeholder="eg Journal of Management" value="{{old('title')}}">
		            </div>
		        </div>
		        <div class="col-md-10">
		             <div class="form-group mb-0">
		                <label class="form-label">Description</label>
		             <wysiwyg name="description" value="{{old('description')}}"></wysiwyg>
		            </div>
		        </div>
		        </div>
		    </div>
		    <div class="card-footer text-right">
		        <button type="submit" class="btn btn-primary">Create a Category</button>
		    </div>
</form>
    </div>
</div>

@endsection
