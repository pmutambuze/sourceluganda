@extends('layouts.app')
@section('content')
<div class="container">
    <div class="page-header d-flex justify-content-between">
        <h1 class="page-title">
         Admin Library Page
        </h1>
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
                <th>Status</th>
                <th>Owner</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                @foreach($library as $lib)
              <tr>
                <td><span class="text-muted">{{$lib->id}}</span></td>
                <td><a  class="text-inherit">{{$lib->title}}</a></td>
                <td>
                  {{$lib->status}}
                </td>
                <td>{{$lib->owner->name}}</td>
                <td class="text-right">
                  <div class="dropdown">
                      <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">
                        Actions
                      </button>
                      <div class="dropdown-menu dropdown-menu-right">
                      <a href="{{route('library.admin.show',$lib->id)}}" class="dropdown-item">
                          <i class="dropdown-icon fe fe-eye"></i> view </a>
                      <a href="" class="dropdown-item">
                          <i class="dropdown-icon fe fe-check-circle"></i> Approve</a>
                      <a href="javascript:void(0)" class="dropdown-item">
                          <i class="dropdown-icon fe fe-briefcase"></i> Publish</a>
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
