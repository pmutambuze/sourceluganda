<!doctype html>
<html lang="en" dir="ltr">
  <head>
    @include('layouts.meta')
    @include('layouts.links')
  </head>
  <body class="">
    <div id="app" class="page">
      <div class="flex-fill">
        @include('admin.top_header')
        @include('admin.header')
        <div class="my-3 my-md-5">
          @yield('content')
        </div>
      </div>
      @include('admin.footer')
    </div>
    <script src="/js/app.js"></script>
  </body>
</html>
