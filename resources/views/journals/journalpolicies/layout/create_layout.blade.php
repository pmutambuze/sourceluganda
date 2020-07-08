@extends('layouts.app')
@section('content')
<div class="container">
    <div class="page-header">
        <h1 class="page-title">
         Journals Layout
        </h1>
    </div>
    <div class="card col-lg-12 mx-auto">
        @if($journalpolicy)
        <div>
        <p class="lead">{!! $journalpolicy->layout !!}</p>
        <a class="btn btn-primary m-2" href="{{route('journals.layout.edit',$journalpolicy->id)}}">Edit</a>
        </div>
        @else
       <form  method="post" action="{{route('journals.layout.store')}}">
            @csrf
            <div class="card-body">
                <h3 class="card-title">Please describe how the journal layout will be</h3>
                <div class="row">
                <div class="col-md-10">
                    <div class="form-group mb-0">
                    <wysiwyg name="layout" value="{{ old('layout') }}"></wysiwyg>
                    </div>
                </div>
                </div>
            </div>
            <div class="card-footer text-left">
                <button type="submit" class="btn btn-primary">create a journal layout</button>
            </div>
        </form>
        @endif
    </div>
</div>

@endsection
