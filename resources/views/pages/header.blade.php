  @include('pages.main-header')
  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="/"><span>Source Luganda </span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="{{ Nav::isRoute('/') }}"><a href="/">Home</a></li>
          <li class="{{ Nav::isResource('journals') }}"><a href="{{route('journals.index')}}">Journals</a></li>
          <li class="{{ Nav::isResource('library') }}"><a href="{{route('library.index')}}">Library</a></li>
          <li class="{{ Nav::isRoute('papers.create') }}"><a href="{{route('papers.create')}}">Submit Paper</a></li>
          <li class="{{ Nav::isRoute('papers.index') }}"><a href="#team">Archive</a></li>
          <li class="{{ Nav::isRoute('plans.index') }}"><a href="{{route('plans.index')}}">Pricing</a></li>
          <li><a href="{{route('home_page')}}#contact">Contact</a></li>
          @guest
          <li><a href="{{route('register')}}">Login/Sign up</a></li>
          @else
           <li class="drop-down"><a href="">{{auth()->user()->name}}</a>
            <ul>
              <li><a href="#">Profile</a></li>
              <li><a href="#">Log out</a></li>
            </ul>
          </li>
          @endguest
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
