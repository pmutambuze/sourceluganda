@extends('pages.layouts')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Library</li>
        </ol>
        <h2>{{$library->title}}</h2>
      </div>
    </section><!-- End Breadcrumbs -->
     <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                <img src="{{asset('assets/img/blog-1.jpg')}}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a>{{$library->title}}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">{{$library->owner->name}}</a></li>
                  <li class="d-flex mr-2 align-items-center text-primary">Not published</li>
                  <li class="d-flex align-items-center btn btn-primary rounded-0">{{$library->category->title}}</a></li>
                </ul>
              </div>

              <div class="entry-content">

                <h3>Abstract</h3>
                <p>
                 {!!$library->abstract!!}
                </p>
                <h3>Key worlds</h3>
               <p>
                 {!!$library->keywords!!}
                </p>


              </div>

              <div class="entry-footer clearfix">
                <div class="float-left">
                  <ul class="cats">
                    <li><a href="{{route('library.view', $library->id)}}" class="btn btn-default rounded-0">View file</a></li>
                    <li><a href="{{route('library.download', $library->id)}}" class="btn btn-secondary rounded-0">Download</a></li>
                    @can('update', $library)
                    <li><a href="{{route('library.edit', $library->id)}}" class="btn btn-secondary rounded-0">Edit</a></li>
                    @endcan
                  </ul>
                </div>

              </div>

            </article><!-- End blog entry -->

            <div class="blog-author clearfix">
               <h4>Authors</h4>
              <p>
                {{$library->authors_name}},
              </p>
               <p>
                <strong>Email:</strong> {{$library->authors_email}}
              </p>
              <p>
                <strong>Organisation:</strong> {{$library->organisation}}
              </p>
              <p>
                <strong>Mobile:</strong> {{$library->mobile}}
              </p>
              <p>
                <strong>Address:</strong> {{$library->address}},
              </p>
               <p>
                <strong>Country:</strong> {{$library->country}}
              </p>
            </div><!-- End blog author bio -->
            <div class="blog-author clearfix">
               <h4>Viewers</h4>
              <p>
               <strong>Name:</strong> {{$library->email_name}},
              </p>
               <p>
                <strong>Email:</strong> {{$library->authors_email}}
              </p>
            </div><!-- End blog author bio -->

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="icofont-search"></i></button>
                </form>

              </div><!-- End sidebar search formn-->

              <h3 class="sidebar-title">Categories</h3>
              <div class="sidebar-item categories">
                <ul>
                  @foreach($categories as $category)
                  <li><a href="#">{{$category->title}} <span>(25)</span></a></li>
                  @endforeach
                </ul>

              </div><!-- End sidebar categories-->

              <h3 class="sidebar-title">Related Posts</h3>
              <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                  <img src="assets/img/blog-recent-1.jpg" alt="">
                  <h4><a href="blog-single.html">Nihil blanditiis at in nihil autem</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/blog-recent-2.jpg" alt="">
                  <h4><a href="blog-single.html">Quidem autem et impedit</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/blog-recent-3.jpg" alt="">
                  <h4><a href="blog-single.html">Id quia et et ut maxime similique occaecati ut</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/blog-recent-4.jpg" alt="">
                  <h4><a href="blog-single.html">Laborum corporis quo dara net para</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/blog-recent-5.jpg" alt="">
                  <h4><a href="blog-single.html">Et dolores corrupti quae illo quod dolor</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

              </div><!-- End sidebar recent posts-->
            </div><!-- End sidebar -->
          </div><!-- End blog sidebar -->
        </div>
      </div>
    </section><!-- End Blog Section -->
@endsection
