@extends('layouts.app')
@section('content')
<div class="container">
    <div class="page-header">
        <h1 class="page-title">
        Edit {{$category->title}} Category
        </h1>
    </div>
    <div class="col-lg-12 mx-auto">
        <form class="card" method="post" action="{{route('categories.update', $category->id)}}">
            @csrf
            @method('put')
            <div class="card-body">
                <h3 class="card-title">Basic Information</h3>
                <div class="row">
                <div class="col-md-10">
                    <div class="form-group">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" value="{{$category->title}}">
                    </div>
                </div>
                 <div class="col-md-10">
                     <div class="form-group mb-0">
                        <label class="form-label">Description</label>
                     <wysiwyg name="description" value="{{$category->description}}"></wysiwyg>
                    </div>
                </div>
                </div>
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary">Update a Category</button>
            </div>
        </form>
    </div>
</div>

@endsection
