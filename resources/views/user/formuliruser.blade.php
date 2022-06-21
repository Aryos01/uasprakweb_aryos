<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Stellar Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="../../vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../css/style.css" <!-- End layout styles -->
    <link rel="shortcut icon" href="../../images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">

            </li>
            <li class="nav-item nav-category"><span class="nav-link">72190348</span></li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">User</span>
                <i class="icon-layers menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.html">Buttons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/typography.html">Typography</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../pages/icons/simple-line-icons.html">
                <span class="menu-title">Dosen</span>
                <i class="icon-globe menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <!-- partial -->


        <div class="col-lg-10 vh-100">
                    <div class="card">
                    <div class="card-body">
                        <form action="/user/simpanuser" method="POST" class="pt-2 pb-2">
                            @csrf
                            <div class="form-group w-25">
                                <label>NIK User</label>
                                <input type="text" name="nik_user" class="form-control" placeholder="Masukan NIK User" required>
                            </div>
                            <div class="form-group w-25">
                                <label>Nama User</label>
                                <input type="text" name="nama_user" class="form-control" placeholder="Masukan Nama User" required>
                            </div>
                            <div class="form-group w-25">
                                <label>No Hp</label>
                                <input type="number" name="no_hp" class="form-control" placeholder="Masukan Nomor HP" required>
                            </div>
                            <div class="form-group w-25">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Masukan Password Anda" required>
                            </div>
                            <div class="form-group pt-4">
                                <input type="submit" value="SIMPAN" class="btn btn-outline-primary">
                            </div>
                        </form>
                </div>
                </div>
                </div>


        <div class="main-panel">
          <div class="content-wrapper">
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>
