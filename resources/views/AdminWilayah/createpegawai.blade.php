
<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') Add Anggota Baru</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="{{ asset('style/assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/lib/datatable/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('style/assets/scss/style.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="icon" href="https://i.ibb.co/rpZyCm3/logo.png" sizes="32x32" type="image/png">
    <meta name="theme-color" content="#563d7c">
</head>

<body>
  <script src="{{ asset('style/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
  <script src="{{ asset('style/assets/js/popper.min.js')}}"></script>
  <script src="{{ asset('style/assets/js/plugins.js')}}"></script>
  <script src="{{ asset('style/assets/js/main.js')}}"></script>
  <script src="{{ asset('style/assets/js/lib/data-table/datatables.min.js')}}"></script>
  <script src="{{ asset('style/assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
  <script src="{{ asset('style/assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
  <script src="{{ asset('style/assets/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
  <script src="{{ asset('style/assets/js/lib/data-table/jszip.min.js')}}"></script>
  <script src="{{ asset('style/assets/js/lib/data-table/pdfmake.min.js')}}"></script>
  <script src="{{ asset('style/assets/js/lib/data-table/vfs_fonts.js')}}"></script>
  <script src="{{ asset('style/assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
  <script src="{{ asset('style/assets/js/lib/data-table/buttons.print.min.js')}}"></script>
  <script src="{{ asset('style/assets/js/lib/data-table/buttons.colVis.min.js')}}"></script>
  <script src="{{ asset('style/assets/js/lib/data-table/datatables-init.js')}}"></script>
  <script type="text/javascript">
      $(document).ready(function() {
        $('#bootstrap-data-table-export').DataTable();
      } );
  </script>

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">E-APD</a>
                <a class="navbar-brand hidden" href="./">E</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{ url('/')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                        <a href="{{ url('/profile')}}"> <i class="menu-icon fa fa-user "></i>Profile </a>
                        <a href="{{ url('/pegawai/create')}}"> <i class="menu-icon fa fa-group "></i>Tambah Pegawai </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <div class="dropdown for-notification">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">5</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 3 Notification</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{ asset('style/images/admin.jpg')}}" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="{{ url('/profile')}}"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">5</span></a>

                                <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

        </header>

        @yield('breadcrumbs')

        @yield('content')

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Tambah Pegawai Baru</strong>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('simpan-pegawai') }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group row">
                                    <label class="col-md-4 text-md-right">NIP</label>
                                    <div class="col-md-6">
                                        <input type="number" name="NIP" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 text-md-right">NRK</label>
                                    <div class="col-md-6">
                                        <input type="number" name="NRK" class="form-control" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 text-md-right">PHL</label>
                                    <div class="col-md-6">
                                        <input type="number" name="phl" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 text-md-right">Nama Lengkap</label>
                                    <div class="col-md-6">
                                        <input type="text" name="nama" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 text-md-right">Jabatan</label>
                                    <div class="col-md-6">
                                        <input type="text" name="jabatan_id" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 text-md-right">Kode Pos</label>
                                    <div class="col-md-6">
                                        <input type="text" name="kode_pos" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 text-md-right">No Telepon</label>
                                    <div class="col-md-6">
                                        <input type="number" name="no_telepon" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 text-md-right">Group Piket</label>
                                    <div class="col-md-6">
                                        <input type="text" name="group_piket" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 text-md-right"></label>
                                    <div class="col-md-6">
                                        <button class="btn btn-success" type="submit">Tambah</button>
                                    </div>
                                </div>
                    </form>
                </div>
            </div>

        </div>
    </div> <!-- .card -->

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

</body>
</html>
