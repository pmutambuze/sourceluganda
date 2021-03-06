@extends('layouts.app')
@section('content')
<div class="container">
    <div class="page-header">
        <h1 class="page-title">
        Edit Paper Academic misconduct guide of the {{$journalpolicy->title}}
        </h1>
    </div>
    <div class="card col-lg-12 mx-auto">
       @include('journals.journalpolicies.edit_tab')
        <form  method="post" action="{{route('journals.misconduct.update', $journalpolicy->id)}}">
            @csrf
            @method('put')
            <div class="card-body">
                <h3 class="card-title">Please describe how the journal misconduct policy guide will be</h3>
                <div class="row">
                <div class="col-md-10">
                    <div class="form-group mb-0">
                    <wysiwyg name="academic_misconduct" value="{{$journalpolicy->academic_misconduct}}"></wysiwyg>
                    </div>

                </div>
                </div>
            </div>
            <div class="card-footer text-left">
                <button type="submit" class="btn btn-primary">Update a misconduct</button>
            </div>
        </form>
    </div>
</div>

@endsection
