@extends('pages.layouts')
@section('content')
<!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Library</li>
        </ol>
        <h2>Edit Content</h2>
      </div>
    </section><!-- End Breadcrumbs -->
    <div class="container">
        <div class="col-md-12">
            <div class="filters-content">
                <div class="row grid">
                    <div class="col-lg-12 mx-auto">
                      <form method="post" action="{{route('library.update', $library->id)}}"  enctype="multipart/form-data">
                        @method('PUT')
            				    @include('library.form',[
                            'buttonText' => 'Update Content'
                        ])
                      </form>
   					        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
