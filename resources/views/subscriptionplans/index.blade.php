 @extends('pages.layouts')
@section('content')
     <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
          <div class="container">
            <ol>
              <li><a href="index.html">Home</a></li>
              <li>Pricing</li>
            </ol>
            <h2>Pricing</h2>
          </div>
        </section><!-- End Breadcrumbs -->
       <div class="container">
        <div class="row">
         <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">
            <div class="section-title">
          <p data-aos="fade-up">Let's get started..</p>
        </div>

        <div class="row">
          <div class="col-md-12 d-flex">
            @foreach($subscriptionplans as $plan)
          <div class="rounded-0 ml-5" data-aos="fade-up" style="min-height: 425px;">
            <div class="box rounded-0" style="min-height: 425px;">
              @if($plan->name == 'premium')
                <span class="advanced">Most Popular</span>
              @endif
              <h3>{{$plan->name}}</h3>
              <h4><sup>$</sup>{{$plan->rate}}<span></span></h4>
              <ul>
                 <li><strong>{{$plan->word_limit}}</strong></li>
                  @if($plan->interval != 0)
                  <li><strong>{{$plan->interval}} months</strong></li>
                  @endif
                @foreach($plan->features as $feature)
                  <li> {{$feature->description}}</li>
                @endforeach
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy rounded-0">Buy Now</a>
              </div>
            </div>
          </div>
          @endforeach
          </div>
        </div>
      </div>
    </section><!-- End Pricing Section -->
        </div>
      </div>
@endsection




