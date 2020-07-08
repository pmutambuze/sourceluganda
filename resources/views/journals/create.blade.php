@extends('layouts.app')
@section('content')
<div class="container">
    <div class="page-header">
        <h1 class="page-title">
        Create Journal
        </h1>
    </div>
    <div class="col-lg-12 mx-auto">
        @include('journals.create_form')
    </div>
</div>

@endsection
