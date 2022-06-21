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


        <div class="col-lg-10 vh-100">
                    <div class="card">
                    <div class="card-body">
                        @php
                            $pakar = explode(',',$dosen->pakar);
                        @endphp
                        <form action="/dosen/updatedosen/{{ $dosen->id }}" method="POST" class="pt-2 pb-2">
                            @csrf
                            @method('PUT')
                            <div class="form-group w-25">
                                <label>NIDN</label>
                                <input type="number" name="nidn" class="form-control" value="{{ $dosen->nidn }}">
                            </div>
                            <div class="form-group w-25">
                                <label>Nama Dosen</label>
                                <input type="text" name="nama" class="form-control" value="{{ $dosen->nama }}">
                            </div>
                            <label>Status</label>
                            <div class="form-check w-25=">
                                <input type="radio" name="status" value="Dosen Tetap" {{ $dosen->status == 'Dosen Tetap' ? 'checked':'' }}
                                class="form-check-input">
                                <label>Dosen Tetap</label>
                            </div>
                            <div class="form-check w-25=">
                                <input type="radio" name="status" value="Dosen Tidak Tetap" {{ $dosen->status == 'Dosen Tidak Tetap' ? 'checked':'' }}
                                class="form-check-input">
                                <label>Dosen Tidak Tetap</label>
                            </div>
                            <div class="form-group w-25">
                                <label>Jabatan Fungsional</label>
                                <select name="jafung" class="form-control">
                                    <option value="0">Pilih Jabatan Fungsional</option>
                                    <option value="Tenaga Pengajar" {{ $dosen->jafung == 'Tenaga Pengajar' ? 'selected':'' }}>Tenaga Pengajar</option>
                                    <option value="Asisten Ahli" {{ $dosen->jafung == 'Asisten Ahli' ? 'selected':'' }}>Asisten Ahli</option>
                                    <option value="Lektor" {{ $dosen->jafung == 'Lektor' ? 'selected':'' }}>Lektor</option>
                                    <option value="Lektor Kepala" {{ $dosen->jafung == 'Lektor Kepala' ? 'selected':'' }}>Lektor Kepala</option>
                                    <option value="Guru Besar" {{ $dosen->jafung == 'Guru Besar' ? 'selected':'' }}>Guru Besar</option>
                                </select>
                            </div>
                            <label>Bidang Keahlian</label>
                            <div class="form-check w-25=">
                                <input type="checkbox" name="pakar[]" value="AI" {{ in_array('AI', $pakar) ? 'checked':'' }}
                                class="form-check-input">
                                <label>AI</label>
                            </div>
                            <div class="form-check w-25=">
                                <input type="checkbox" name="pakar[]" value="Web Developer" {{ in_array('Web Developer', $pakar) ? 'checked':'' }}
                                class="form-check-input">
                                <label>Web Developer</label>
                            </div>
                            <div class="form-check w-25=">
                                <input type="checkbox" name="pakar[]" value="DB Engineer" {{ in_array('DB Engineer', $pakar) ? 'checked':'' }}
                                 class="form-check-input">
                                <label>DB Engineer</label>
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
