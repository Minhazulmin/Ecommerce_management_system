<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('css/materialdesignicons.min.css')}}">
  
  <link rel="stylesheet" href="{{asset('css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('css/vendor.bundle.addons.css')}}"> 
  <link rel="stylesheet" href="{{asset('css/simple-line-icons.css')}}">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.5.95/css/materialdesignicons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('css/datatables.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/admin_style.css')}}">
  <link rel="stylesheet" href="{{asset('css/master.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('images/favicon.png')}}">
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('backend.partials.nav')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">


      @include('backend.partials.left_sidebar')

      @yield('content')
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->

  <!-- container-scroller -->

  <!-- plugins:js -->
  

  <script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/datatables.min.js')}}"></script>
  <script type="text/javascript">
    
    $(document).ready(function() {
    $('#dataTable').DataTable();
} );
  </script>

       <!--   <script src="{{asset('js/vendor.bundle.base.js')}}"></script>
      <script src="{{asset('js/vendor.bundle.addons.js')}}"></script> -->
      <!-- endinject -->
      <!-- Plugin js for this page-->
      <!-- End plugin js for this page-->
      <!-- inject:js -->
      <script src="{{asset('js/off-canvas.js')}}"></script>
      <script src="{{asset('js/misc.js')}}"></script>
      <!-- endinject -->
      <!-- Custom js for this page-->
      <script src="{{asset('js/dashboard.js')}}"></script>
      <!-- End custom js for this page-->
    </body>

</html>