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
                  <a href="../docs/index.html" class="list-group-item list-group-item-action active"><span class="icon mr-3"><i class="fe fe-flag"></i></span>View journal</a>
                </div>
                <!-- Components -->
                <div class="list-group list-group-transparent mb-0">
                  <a href="../docs/alerts.html" class="list-group-item list-group-item-action"><span class="icon mr-3"><i class="fe fe-file"></i></span>View Attachment</a>
                  <a href="../docs/avatars.html" class="list-group-item list-group-item-action"><span class="icon mr-3"><i class="fe fe-download"></i></span>Download</a>
                  <a href="../docs/avatars.html" class="list-group-item list-group-item-action"><span class="icon mr-3"><i class="fe fe-edit-2"></i></span>Edit</a>
                </div>
              </div>
              <div class="col-lg-9">
                <div class="card">
                  <div class="card-body">
                    <div class="text-wrap p-lg-6">
                      <h2 class="mt-0 mb-4">{{$journal->title}}</h2>
                      <p>{{$journal->description}}</p>
                      <h3 id="setup-environment">Other Information</h3>
                      <p>The following are other details that belongs to the journal:</p>
                      <ol>
                        <li><strong>Publishing Date:</strong>{{$journal->publishing_date}}</li>
                        <li><strong>Publishing Fee:</strong>{{$journal->publishing_fee}}</li>
                        <li><strong>Team member who added this journal:</strong> {{$journal->creator->name}}</li>
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
