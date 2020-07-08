@extends('pages.layouts')
@section('content')
<!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Library</li>
        </ol>
        <h2>Add a Content</h2>
      </div>
    </section><!-- End Breadcrumbs -->
    <div class="container">
        <div class="col-md-12">
            <div class="filters-content">
                <div class="row grid">
                    <div class="col-lg-12 mx-auto">
                      <form method="post" action="{{route('library.store')}}"  enctype="multipart/form-data">
            				    @include('library.form',[
                            'library' => new App\Library,
                            'buttonText' => 'Add Content'
                        ])
                      </form>
   					        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
