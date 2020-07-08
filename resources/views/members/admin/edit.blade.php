@extends('layouts.app')
@section('content')
<div class="container">
    <div class="page-header">
        <h1 class="page-title">
        Edit {{$member->name}}'s information
        </h1>
    </div>
    <div class="col-lg-12 mx-auto">
        <form class="card" method="post" action="{{route('members.store')}}">
		    @csrf
		    <div class="card-body">
		        <h3 class="card-title">Basic Information</h3>
		        <div class="row">
			        <div class="col-sm-10 col-md-10">
			            <div class="form-group">
			            <label class="form-label">Name</label>
			            <input type="text" name="name" placeholder="john doe" class="form-control"  value="{{$member->name}}">
			            </div>
			        </div>
			        <div class="col-md-10">
			            <div class="form-group">
			            <label class="form-label">Title</label>
			            <input type="text" name="title" class="form-control"  placeholder="eg Lecturer, Makerere University" value="{{$member->title}}">
			            </div>
			        </div>
		        </div>
		        <h3 class="card-title">Other Information</h3>
		        <div class="row">
		         <div class="col-md-10">
		             <div class="form-group mb-0">
		                <label class="form-label">Address</label>
		             	<textarea name="address" placeholder="Kawempe Kampala Uganda" class="form-control">{{$member->address}}</textarea>
		            </div>

		        </div>
		        </div>
		    </div>
		    <div class="card-footer text-right">
		        <button type="submit" class="btn btn-primary">Update a member</button>
		    </div>
		</form>
    </div>
</div>

@endsection
