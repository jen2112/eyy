
<!DOCTYPE html>
<html lang="en">

<head>
  
  <title>Old Age Home Management System || Eligibility Page</title>
  <!-- base:css -->
  <link rel="stylesheet" href="public/admin/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="public/admin/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="public/admin/vendors/select2/select2.min.css">
  <link rel="stylesheet" href="public/admin/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="public/admin/css/vertical-layout-light/style.css">
  <!-- endinject -->
  
  <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->

    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
          <a class="navbar-brand brand-logo" href="index.html"><img src="public/admin/images/logo.svg" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="public/admin/images/logo-mini.svg" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="typcn typcn-th-menu"></span>
          </button>
        </div>
      </div>
      <?php include_once('includes/header.php');?>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
     
    <?php include_once('includes/sidebar.php');?>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
  
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Eligibility</h4>
                  <p class="card-description">
                    Update Eligibility!!!
                  </p>
                  <form class="forms-sample" method="post">
                  
                    <div class="form-group">
                       <label for="exampleInputUsername1">Page Title</label>
                      <input id="pagetitle" name="pagetitle" type="text" class="form-control" required="true" value="">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Page Description</label>
                      <textarea class="form-control" name="pagedes" id="pagedes" rows="5"></textarea>
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary mr-2" name="submit">Submit</button>
                  </form>
                </div>
              </div>
            </div>
     
          </div>
        </div>
        <!-- content-wrapper ends -->
       <?php include_once('includes/footer.php');?>
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="public/admin/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="public/admin/js/off-canvas.js"></script>
  <script src="public/admin/js/hoverable-collapse.js"></script>
  <script src="public/admin/js/template.js"></script>
  <script src="public/admin/js/settings.js"></script>
  <script src="public/admin/js/todolist.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="public/admin/vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="public/admin/vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="public/admin/js/file-upload.js"></script>
  <script src="public/admin/js/typeahead.js"></script>
  <script src="public/admin/js/select2.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
