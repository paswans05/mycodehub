@php
  $adminid=session('uid');
@endphp
@if(empty($adminid))
   <script>
     location.href="{{url('/admin')}}";
   </script>
@endif
<!doctype html>
<html lang="en">
  <head>
    @include('admin.includes.top-head')
  </head>
  <body>
    <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
      <!-- Side Overlay-->
      @include('admin.includes.profile')
      <!-- END Side Overlay -->

      <!-- Sidebar -->
     @include('admin.includes.sidebar')
      <!-- END Sidebar -->

      <!-- Header -->
     @include('admin.includes.header')
      <!-- END Header -->

      <!-- Main Container -->
      <main id="main-container">

        <!-- Hero -->
        @include('admin.includes.hero')
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
          <!-- Overview -->
          @yield('content')
          <!-- END Overview -->

        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->

      <!-- Footer -->
      <footer id="page-footer" class="bg-body-light">
        @include('admin.includes.footer')
      </footer>
      <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    @include('admin.includes.foot')
  </body>
</html>
