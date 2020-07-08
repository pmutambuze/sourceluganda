@extends('layouts.app')
@section('content')
<div class="container">
    <div class="page-header d-flex justify-content-between">
        <h1 class="page-title">
         Categories Page
        </h1>
        <div class="page-title">
        <a href="{{route('categories.create')}}"  class="btn btn-primary">Add a Category</a>
        </div>
    </div>
    <div class="col-12">
          <div class="card mt-2 mx-4">
              <div class="card-header">
                <h2 class=" text-capitalize">Categories of documents stored in the library</h2>
              </div>
              <div class="card-body">
                  @foreach($categories as $category)
                  <div class="card">
                    <div class="card-body d-flex flex-column">
                      <h4><a href="#">{{$category->title}}</a></h4>
                      <div class="text-muted">{!! $category->description !!}</div>
                        <div>
                            <a href="{{route('categories.edit', $category->id)}}" class="btn btn-primary">Edit</a>
                            <a href="./profile.html" class="btn btn-danger text-white">Delete</a>
                        </div>
                      </div>
                      </div>
                  @endforeach
                </div>
             </div>
        </div>
      </div>
    </div>
</div>

@endsection
