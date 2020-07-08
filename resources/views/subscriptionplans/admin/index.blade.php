@extends('layouts.app')
@section('content')
<div class="container">
    <div class="page-header d-flex justify-content-between">
        <h1 class="page-title">
         Subscription plans Page
        </h1>
        <div class="page-title">
        <a href="{{route('plans.create')}}"  class="btn btn-primary">Add a subscription Plan</a>
        </div>
    </div>
    <div class="col-12">
          @foreach($subscriptionplans as $plan)
          <div class="card mt-2 mx-4">
              <div class="card-header">
                <h2 class=" text-capitalize">{{$plan->name}}</h2>
              </div>
              <div class="card-body">
                <p class="lead">Rate: ${{$plan->rate}}</p>
                <p class="lead">Words: {{$plan->word_limit}}</p>
                <p class="lead">Interval:{{$plan->interval}}</p>
                <p class="lead">Currency:{{$plan->currency}}</p>
                <h2>Features</h2>
                  @foreach($plan->features as $feature)
                  <div class="d-flex alert alert-icon alert-success" role="alert">
                    <span class="mr-4"><i class="fe fe-check mr-2" aria-hidden="true"></i> {{$feature->description}}</span>
                    <span><a  class="text-danger" onclick="return confirm('DO YOU WANT TO REMOVE THIS FEATURE?')" href="{{route('features.detach',[$feature->id, $plan->id])}}"><i class="fe fe-trash mr-2" aria-hidden="true"></i></a></span>
                  </div>
                  @endforeach
                <form method="post" action="{{route('features.attach', $plan->id)}}">
                  @csrf
                  <div class="row p-5">
                    <div class="col-2"> <label><b>Add Feature</b></label></div>
                    <div class="col-7">
                      <select name="feature" class="form-control">
                        <option>Choose Features</option>
                        @foreach($features as $feature)
                          <option value="{{$feature->id}}">{{$feature->description}}</option>
                         @endforeach
                      </select>
                    </div>
                    <div class="col-3">
                      <button type="submit" class="btn btn-primary">Add Feature</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
         @endforeach
        </div>
      </div>
    </div>
</div>

@endsection
