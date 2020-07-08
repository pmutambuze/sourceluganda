@extends('layouts.app')
@section('content')
<div class="container">
    <div class="page-header d-flex justify-content-between">
        <h1 class="page-title">
         Journals Page
        </h1>
        <div class="page-title">
        <a href="{{route('journals.create')}}"  class="btn btn-primary">Create Journal</a>
        </div>
    </div>
    <div class="col-12">
      <div class="card">
        <div class="card-header">
        </div>
        <div class="table-responsive">
          <table class="table card-table table-vcenter text-nowrap datatable">
            <thead>
              <tr>
                <th class="w-1">No.</th>
                <th>Title</th>
                <th>Frequency</th>
                <th>Publishing Since</th>
                <th>Publishing Fee</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                @foreach($journals as $journal)
              <tr>
                <td><span class="text-muted">{{$journal->id}}</span></td>
                <td><a href="{{$journal->path()}}" class="text-inherit">{{$journal->title}}</a></td>
                <td>
                 {{$journal->frequency}}
                </td>
                <td>
                  {{$journal->publishing_date}}
                </td>
                <td>${{$journal->publishing_fee}}</td>
                <td class="text-right">
                  <div class="dropdown">
                      <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">
                        Actions
                      </button>
                      <div class="dropdown-menu dropdown-menu-right">
                      <a href="{{route('journals.admin.show', $journal->id)}}" class="dropdown-item">
                          <i class="dropdown-icon fe fe-eye"></i> view </a>
                      <a href="{{route('journals.edit', $journal->id)}}" class="dropdown-item">
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
