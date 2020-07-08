@extends('pages.layouts')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Library</li>
        </ol>
        <h2>Library</h2>
      </div>
    </section><!-- End Breadcrumbs -->
    <div class="container">
        <div class="col-md-12">
          <index-library data-library="{{json_encode($library)}}"></index-library>
        </div>
    </div>
@endsection
