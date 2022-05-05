<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
          label{
           display: inline-block;
            width: 200px;
          }
         
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
  </head>
  <body>
    
        @include('admin.sidebar')
      <!-- partial -->
        @include('admin.navbar')
        <!-- partial -->
        
        <div class="container-fluid page-body-wrapper">
            <div class="container" align="center">
            <h1 style="color: white; padding-top: 25px; font-size: 25px;">Add Admin</h1> 
           <form method="post" action="{{url('addadmin')}}" enctype="multipart/form-data">
            @csrf
            <div style="padding: 15px">
               <label>Name</label>
               <input style="color: black" type="text" name="name" placeholder="admin name" required="" >
           </div>

           <div style="padding: 15px">
            <label>Email</label>
            <input style="color: black" type="text" name="email" placeholder="email" required="" >
        </div>
        <div style="padding: 15px">
            <label>Phone</label>
            <input style="color: black" type="text" name="phone" placeholder="phone" required="" >
        </div>
        <div style="padding: 15px">
            <label>Password</label>
            <input style="color: black" type="text" name="password" placeholder="password" required="">
        </div>
        <div style="padding: 15px">
            <label>Address</label>
            <input style="color: black" type="text" name="address" placeholder="address" required="">
        </div>
        <div style="padding: 15px">
            <input class="btn btn-success" type="submit">
        </div>
           </form>
            </div>
        </div> 
         <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>