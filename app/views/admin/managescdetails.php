
<!DOCTYPE html>
<html lang="en">

<head>
  
  <title>Old Age Home Management System|| Manage Senior Citizen Details</title>
  <!-- base:css -->
  <link rel="stylesheet" href="public/admin/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="public/admin/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="public/admin/css/vertical-layout-light/style.css">
  <!-- endinject -->
  
</head>
<body>
  
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php include_once('includes/header.php');?>
    <!-- partial -->
    <nav class="navbar-breadcrumb col-xl-12 col-12 d-flex flex-row p-0">
   &nbsp;
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item ml-0">
            <h4 class="mb-0">Manage Senior Citizen Details</h4>
          </li>
          <li class="nav-item">
            <div class="d-flex align-items-baseline">
              <p class="mb-0">Home</p>
              <i class="typcn typcn-chevron-right"></i>
              <p class="mb-0">Manage Senior Citizen Details</p>
            </div>
          </li>
        </ul>
       
      </div>
    </nav>
    <div class="container-fluid page-body-wrapper">
  
      <!-- partial:partials/_sidebar.html -->
     <?php include_once('includes/sidebar.php');?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <h4 class="card-title" style="padding-left: 20px; padding-top: 20px;">Manage Senior Citizen Details</h4>
                  <p class="card-description" style="padding-left: 20px;"> 
                    Manage Senior Citizen Details in old age home!!!
                  </p>
                <div class="table-responsive pt-3">
                  
                  <table class="table table-striped project-orders-table">
                    <thead>
                      <tr>
                        <th class="ml-5">#</th>
                        <th>Registration Number</th>
                        <th>Name</th>
                        <th>Contact Number</th>
                        <th>Date of Birth</th>
                        <th>Added By</th>
                        <th>Registration Date</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      <tr>

                        <td></td>
                        <td> </td>
                        <td> </td>
                        <td></td>
                        <td> </td>
                        <td></td>
                        <td></td>
                      
                        
                        <td>
                          <div class="d-flex align-items-center">
                            <a href="/webprojfinal/editscdetails" class="btn btn-success btn-sm btn-icon-text mr-3">Edit <i class="typcn typcn-edit btn-icon-append"></i> </a> 
                                            <a href="/webprojfinal/editscdetails" onClick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-sm btn-icon-text">Delete <i class="typcn typcn-delete-outline btn-icon-append"></i></a>
                          </div>
                        </td>
                      </tr>
                      
                    </tbody>
                  </table>


                </div>
                
              </div>
            </div>
          </div>

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <?php include_once('includes/footer.php');?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src="public/admin/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="public/admin/vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="public/admin/js/off-canvas.js"></script>
  <script src="public/admin/js/hoverable-collapse.js"></script>
  <script src="public/admin/js/template.js"></script>
  <script src="public/admin/js/settings.js"></script>
  <script src="public/admin/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="public/admin/js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>