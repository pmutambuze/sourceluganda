@extends('layouts.app')
@section('content')
<div class="container">
    <div class="page-header">
        <h1 class="page-title">
        Edit Paper Submission guide of the  {{$journalpolicy->title}}
        </h1>
    </div>
    <div class="card col-lg-12 mx-auto">
        @include('journals.journalpolicies.edit_tab')
        <form  method="post" action="{{route('journals.paymentpolicy.update', $journalpolicy->id)}}">
            @csrf
            @method('put')
            <div class="card-body">
                <h3 class="card-title">Please describe how the journal Paper payment policy guide will be</h3>
                <div class="row">
                <div class="col-md-10">
                    <div class="form-group mb-0">
                    <wysiwyg name="payment_policy" value="{{$journalpolicy->payment_policy}}"></wysiwyg>
                    </div>

                </div>
                </div>
            </div>
            <div class="card-footer text-left">
                <button type="submit" class="btn btn-primary">Update a journal paper payment policy</button>
            </div>
        </form>
    </div>
</div>

@endsection
