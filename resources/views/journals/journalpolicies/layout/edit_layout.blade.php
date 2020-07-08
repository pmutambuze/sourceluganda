@extends('layouts.app')
@section('content')
<div class="container">
    <div class="page-header">
        <h1 class="page-title">
         Edit Journals Layout
        </h1>
    </div>
    <div class="card col-lg-12 mx-auto">
       @include('journals.journalpolicies.edit_tab')
       <form  method="post" action="{{route('journals.layout.update', $journalpolicy->id)}}">
            @method('PUT')
            @csrf
            <div class="card-body">
                <h3 class="card-title">Please describe how the journal layout will be</h3>
                <div class="row">
                <div class="col-md-10">
                    <div class="form-group mb-0">
                    <wysiwyg name="layout" value="{{$journalpolicy->layout}}"></wysiwyg>
                    </div>

                </div>
                </div>
            </div>
            <div class="card-footer text-left">
                <button type="submit" class="btn btn-primary">Update a journal layout</button>
            </div>
        </form>
    </div>
</div>

@endsection
