@extends('pages.layouts')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Journals</li>
        </ol>
        <h2>All Journals</h2>
      </div>
    </section><!-- End Breadcrumbs -->
          <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">
        <div class="row">
            @foreach($journals as $journal)
              <div class="col-lg-4 col-md-6" data-aos="fade-up" >
                <div class="icon-box" style="min-height: 300px">
                  <div class="icon"><i class="icofont-tick-mark"></i></div>
                  <h4 class="title"><a href="{{$journal->path()}}">{{$journal->title}}</a></h4>
                  <p class="description">{!! $journal->description !!}</p>
                </div>
              </div>
          @endforeach
        </div>
      </div>
    </section><!-- End Services Section -->
@endsection
