<!DOCTYPE html>
<html lang="en">
    
@include('partials._header')

<body>
    <div class="container-scroller">

@include('partials._navbar')
   
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">   
        <!-- partial:partials/_sidebar.html -->
      @include('partials._sidebar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            @yield('content')
          </div>
          <!-- footer -->
          @include('partials._footer')
          <!-- end footer -->

        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('partials._script')
  </body>
</html>