@extends('layouts.app')
@section('content')
<div class="container">
    <div class="page-header">
        <h1 class="page-title">
        Showing all the members to the system
        </h1>
    </div>
    <div class="col-lg-12 mx-auto">
    	<div class="card">
        <div class="card-header">
        	<div class="d-flex justify-content-center">
		        <h1 class="page-title">
		         Members Page
		        </h1>
		        <div class="page-title ml-5">
		        <a href="{{route('members.create')}}"  class="btn btn-primary">Create Member</a>
        		</div>
   			</div>
        </div>
        <div class="card-body">
	        <div class="table-responsive">
	            <table class="table card-table table-vcenter text-nowrap datatable">
	              <thead>
	                <tr>
	                  <th class="w-1">No.</th>
	                  <th>Name</th>
	                  <th>Title</th>
	                  <th>Address</th>
	                  <th></th>
	                </tr>
	              </thead>
	              <tbody>
	                  @foreach($members as $member)
	                <tr>
	                  <td><span class="text-muted">{{$member->id}}</span></td>
	                  <td><a href="{{$member->path()}}" class="text-inherit">{{$member->name}}</a></td>
	                  <td>
	                   {{$member->title}}
	                  </td>
	                  <td>
	                    {{$member->address}}
	                  </td>
	                  <td class="text-right">
	                    <div class="dropdown">
	                        <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">
	                          Actions
	                        </button>
	                        <div class="dropdown-menu dropdown-menu-right">
	                        <a href="{{route('members.edit', $member->id)}}" class="dropdown-item">
	                            <i class="dropdown-icon fe fe-edit-2"></i> Edit</a>
	                        <a href="javascript:void(0)" class="dropdown-item">
	                            <i class="dropdown-icon fe fe-trash-2"></i> Delete</a>
	                    </div>
	                  </td>
	                </tr>
	                @endforeach
	              </tbody>
	            </table>
	        </div>
    	</div>
    </div>
</div>

@endsection
