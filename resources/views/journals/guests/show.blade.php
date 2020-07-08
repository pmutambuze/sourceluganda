@extends('pages.layouts')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Journals</li>
        </ol>
        <h2>{{$journal->title}}</h2>
      </div>
    </section><!-- End Breadcrumbs -->
        <div class=" container" >
              <div class="row">
                <div class="col-md-9">
                  <p class="lead text-justify">{!! $journal->description !!}</p>
                  <ul class="list-unstyled mt-2 pl-3">
                  <li><span class="font-weight-bold p-2 capitalize">Frequency:</span> {{$journal->frequency}}</li>
                    <li><span class="font-weight-bold p-2">Publishing Since:</span> {{$journal->publishing_date}}</li>
                      <li><span class="font-weight-bold p-2">Publishing Fee : </span>shs   {{$journal->publishing_fee}}</li>
                  </ul>
                </div>
                <div class="col-md-3 d-flex justify-content-center align-items-center">
                   <div class="btn-wrap">
                    <a href="#" class="btn btn-primary border border-warning" style="background: #FF6B3B;">Publish Now</a>
                  </div>
                </div>
              </div>
        </div>
      </div>


    <!-- ======= Portfolio Section ======= -->
    <section id="policies" class="policies">
      <div class="container">
        <div class="" data-aos="fade-up" data-aos-delay="100">
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="false">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-layout-tab" data-toggle="pill" href="#pills-layout" role="tab" aria-controls="pills-layout" aria-selected="true">Layout</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-publication-tab" data-toggle="pill" href="#pills-publication" role="tab" aria-controls="pills-publication" aria-selected="false">Publication Process</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" id="pills-guidelines-tab" data-toggle="pill" href="#pills-guidelines" role="tab" aria-controls="pills-guidelines" aria-selected="false">Guidelines</a>
            </li><li class="nav-item">
              <a class="nav-link" id="pills-submission-tab" data-toggle="pill" href="#pills-submission" role="tab" aria-controls="pills-submission" aria-selected="false">Paper Submission</a>
            </li><li class="nav-item">
              <a class="nav-link" id="pills-plagiarism-tab" data-toggle="pill" href="#pills-plagiarism" role="tab" aria-controls="pills-plagiarism" aria-selected="false">Plagiarism</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" id="pills-payment-tab" data-toggle="pill" href="#pills-payment" role="tab" aria-controls="pills-payment" aria-selected="false">Payment</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" id="pills-misconduct-tab" data-toggle="pill" href="#pills-misconduct" role="tab" aria-controls="pills-misconduct" aria-selected="false">Misconduct</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" id="pills-download-tab" data-toggle="pill" href="#pills-download" role="tab" aria-controls="pills-download" aria-selected="false">Download</a>
            </li>
          </ul>
          <div class="tab-content container" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
             home
            </div>
            <div class="tab-pane fade" id="pills-layout" role="tabpanel" aria-labelledby="pills-layout-tab">
                {!! $journalpolicy->layout !!}
            </div>
            <div class="tab-pane fade" id="pills-publication" role="tabpanel" aria-labelledby="pills-layout-tab">
             {!! $journalpolicy->paperpublication !!}
            </div>
             <div class="tab-pane fade" id="pills-guidelines" role="tabpanel" aria-labelledby="pills-guidelines-tab">
             {!! $journalpolicy->guidelines !!}
            </div>
             <div class="tab-pane fade" id="pills-submission" role="tabpanel" aria-labelledby="pills-submission-tab">
             {!! $journalpolicy->submission !!}
            </div>
            <div class="tab-pane fade" id="pills-plagiarism" role="tabpanel" aria-labelledby="pills-plagiarism-tab">
              {!! $journalpolicy->plagiarism !!}
            </div>
            <div class="tab-pane fade" id="pills-payment" role="tabpanel" aria-labelledby="pills-payment-tab">
               {!! $journalpolicy->payment_policy !!}
            </div>
            <div class="tab-pane fade" id="pills-misconduct" role="tabpanel" aria-labelledby="pills-misconduct-tab">
             {!! $journalpolicy->academic_misconduct !!}
            </div>
            <div class="tab-pane fade" id="pills-download" role="tabpanel" aria-labelledby="pills-download-tab">
              Download
            </div>
          </div>
      </div>
    </section><!-- End Portfolio Section -->
@endsection
