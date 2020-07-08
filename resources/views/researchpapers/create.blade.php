@extends('pages.layouts')
@section('content')
<!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Papers</li>
        </ol>
        <h2>Create Research Paper</h2>
      </div>
    </section><!-- End Breadcrumbs -->
    <div class="container">
        <div class="col-md-12">
            <div class="filters-content">
                <div class="row grid">
                    <div class="col-lg-12 mx-auto">
        				@include('researchpapers.create_form')
   					</div>
                </div>
            </div>
        </div>
    </div>
@endsection

