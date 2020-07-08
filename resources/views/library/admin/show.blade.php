@extends('layouts.app')
@section('content')
<div class="container">
    <div class="page-header d-flex justify-content-between">
        <h1 class="page-title">
         Admin Library Page / {{$library->title}}
        </h1>
    </div>
    <div class="col-12">
      <div class="card rounded-0">
        <div class="card-header">
        </div>
           <div class="container rounded-0">
            <div class="row">
              <div class="col-lg-3 order-lg-1 mb-4">
                <a  class="btn btn-block btn-primary mb-6">
                  Attachment
                </a>
                <!-- Getting started -->
                <div class="list-group list-group-transparent mb-0">
                  <a href="../docs/index.html" class="list-group-item list-group-item-action active"><span class="icon mr-3"><i class="fe fe-flag"></i></span>View Library</a>
                </div>
                <!-- Components -->
                <div class="list-group list-group-transparent mb-0">
                  <a href="{{route('library.view', $library->id)}}" class="list-group-item list-group-item-action">
                    <span class="icon mr-3"><i class="fe fe-file"></i></span>
                   View Attachment
                  </a>
                  <a href="{{route('library.download', $library->id)}}" class="list-group-item list-group-item-action">
                    <span class="icon mr-3"><i class="fe fe-arrow-down"></i></span>
                    Download
                  </a>
                  <a href="{{route('library.admin.approve', $library->id)}}" class="list-group-item list-group-item-action">
                    <span class="icon mr-3">
                      <i class="fe fe-check-circle"></i>
                    </span>
                    Approve
                  </a>
                  <a href="{{route('library.publish', $library->id)}}" class="list-group-item list-group-item-action">
                    <span class="icon mr-3"><i class="fe fe-briefcase"></i></span>Publish
                  </a>
                </div>

                <!-- approve -->
                <div>
                  <div>
                     <h4>Approve</h4>
                  <div>
                    <form method="POST" action="{{ route('library.admin.approve', $library->id)}}">
                        @method('PUT')
                        @csrf
                     <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="approved" onChange="this.form.submit()" {{ $library->approved ? 'checked' : '' }}>
                        <span class="custom-control-label"></span>
                      </label>
                    </form>
                  </div>
                  </div>

                </div>
              </div>
              <div class="col-lg-9">
                <div class="card">
                  <div class="card-body">
                    <div class="text-wrap p-lg-6">
                      <h2 class="mt-0 mb-4">Abstract</h2>
                      <p>{!! $library->abstract !!}</p>
                      <h2 class="mt-0 mb-4">Keywords</h2>
                      <p>{!! $library->keywords !!}</p>
                      <h3 id="setup-environment">Other Information</h3>
                      <p>The following are other details that belongs to the library:</p>
                      <ol>
                        <li><strong>Status:  </strong>
                          @if($library->status == 'not_published')
                           <span>Not Published</span>
                          @else
                          <span>Published</span>
                          @endif
                         </li>
                        <li><strong>Address:  </strong>{{$library->address}}</li>
                        <li><strong>Country:  </strong>{{$library->country}}</li>
                        <li><strong>Organisation:  </strong>{{$library->organisation}}</li>
                        <li><strong>Telephone:  </strong>{{$library->mobile}}</li>
                        <li><strong>Viewers Name:  </strong>{{$library->viewers_name}}</li>
                        <li><strong>Viewer's Email:  </strong>{{$library->viewers_email}}</li>
                        <li><strong>Authors Name:  </strong>{{$library->authors_name}}</li>
                        <li><strong>Authors Email:  </strong>{{$library->authors_email}}</li>
                        <li><strong>Owner Name:  </strong> {{$library->owner->name}}</li>
                        <li><strong>Owner Email:  </strong> {{$library->owner->email}}</li>
                      </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
</div>

@endsection
