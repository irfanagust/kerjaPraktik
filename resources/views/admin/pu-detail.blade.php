<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Smartcity - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('bootstrap/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('bootstrap/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    @php
      $encrypted1 = encrypt(1);
      $encrypted2 = encrypt(2);
      $encrypted3 = encrypt(3);
      $encrypted4 = encrypt(4);    
    @endphp

    {{-- LAYOUTING NAVBAR --}}
    @include('admin.partials.navbar')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          {{-- <!-- TOPBAR SEARCH -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form> --}}

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{"ini nama user"}}</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Tables</h1>
            <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://irfanagust.github.io/">Irfan Agus Tiawan</a>.</p>
  
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>Nama Perangkat Lunak</th>
                            <th>Intansi Pengaju Software</th>
                            <th>Pilih para Pendaftar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$software->nama_perangkat_lunak}}</td>
                            <td>{{$software->instansi->nama}}</td>
                            <td>
                                @foreach ($software->pengembangs as $sp)
                                  @if ($sp->pivot->status==0)
                                    <label>{{$sp->nama}}</label>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$sp->id}}">
                                      Pilih
                                    </button>
                                  @else
                                    <label>{{$sp->nama}}</label>
                                    <button type="button" class="btn btn-secondary">
                                      Telah Dipilih
                                    </button>
                                  @endif
                                  <br>

                                  <!-- Modal -->
                                  <div class="modal fade" id="exampleModal{{$sp->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Yakin memilih {{$sp->nama}}</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                          <a href="/admin/pengembangan-umum/{{$software->id}}/{{$sp->id}}" type="button" class="btn btn-primary">Yakin</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- END MODAL -->
                                  
                                @endforeach
                                {{-- {{$software->pengembangs)}} --}}
                            </td>
                        </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
  
        </div>
        <!-- End of Main Content -->

        {{-- LAYOUTING FOOTER --}}
        @include('admin.partials.footer')
        
      </div>
    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('bootstrap/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('bootstrap/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('bootstrap/js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{asset('bootstrap/vendor/chart.js/Chart.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('bootstrap/js/demo/chart-area-demo.js')}}"></script>
  <script src="{{asset('bootstrap/js/demo/chart-pie-demo.js')}}"></script>

</body>

</html>
