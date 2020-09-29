<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin panel</title>
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <!-- font awesome -->
    <link rel="stylesheet" type="text/css" href="../assets/css/icons.css">
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="../assets/fonts/line-icons.css">
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="../assets/plugins/morris/morris.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">

<!-- Custom writen styles -->
<link rel="stylesheet" type="text/css" href="../assets/css/_custom.css">

  </head>

  <body>
    <div class="app header-default side-nav-dark">
      <div class="layout">
        
        @include('admin.layouts.includes.header')

        @include('admin.layouts.includes.sidenav')
        <!-- Page Container START -->
        <div class="page-container">
          
          <!-- Content Wrapper START -->
          <div class="main-content">
            <div class="container-fluid">
         @yield('main-content')
            </div>
          </div>
          <!-- Content Wrapper END -->

          <!-- Footer START -->
         @include('footer')
          <!-- Footer END -->

        </div>
        <!-- Page Container END -->
      </div>
    </div>

    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../assets/js/jquery-min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.app.js"></script>
    <script src="../assets/js/main.js"></script>

    <!--Morris Chart-->
    <script src="../assets/plugins/morris/morris.min.js"></script>
    <script src="../assets/plugins/raphael/raphael-min.js"></script>
    <script src="../assets/js/dashborad1.js"></script>

  </body>
</html>

