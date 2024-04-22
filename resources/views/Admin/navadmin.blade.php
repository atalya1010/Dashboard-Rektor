<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Dashboard Rektor IT Del</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="shortcut icon" href="{{ asset('img/icons/itdel.png') }}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
          <!-- Preloader -->
            <div class="preloader flex-column justify-content-center align-items-center">
                <img class="animation__shake" src="{{asset('dist/img/itdel.png')}}" alt="ITDelLogo" height="60" width="60">
            </div>
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#"
                        role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        @auth
                        <img src="{{ asset(Auth::user()->avatar) }}"
                            class="img-circles elevation-1" alt="User Image" />
                        <span class="text-dark"> {{ Auth::user()->name }} <i class="caret"></i></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">

                            <img src="{{ asset(Auth::user()->avatar) }}"
                                class="img-circles elevation-1" alt="User Image" />

                            <p>
                                {{ Auth::user()->name }} <small>
                                Kelompok kerja:
                                    <br>
                                    @if (auth()->user()->level == 0)
                                        <button class="btn btn-primary btn-xs" disabled>Rektor IT Del</button>
                                        <button class="btn btn-warning btn-xs" disabled>Rektorat</button>
                                    @endif
                                    @if (auth()->user()->level == 1)
                                    <button class="btn btn-success btn-xs" disabled>Admin Rektorat</button>
                                    <button class="btn btn-warning btn-xs" disabled>Rektorat</button>
                                    @endif
                                </small>
                            </p>
                            @endauth
                        </li>
                        <li class="user-footer">
                            <div class="pull-right">
                                <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{-- <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> --}}
                                 {{ __('Keluar') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                class="d-none">
                                @csrf
                            </form>
                            </div>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside style="background-color:#062f4f;" class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/beranda" class="brand-link">
                <img src="{{asset('dist/img/itdel.png')}}" alt="IT Del Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span  class="brand-text font-weight-light">DASHBOARD REKTOR</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">

                    <div class="image">

                    </div>
                    <div class="info">
                        <a class="">ADMIN PANEL</a>
                    </div>

                </div>

                <!-- SidebarSearch Form -->
                @if (auth()->user()->level == 1)
                <div class="form-inline"  style="background-color:ffffff;">
                    <div  class="input-group" data-widget="sidebar-search">
                        <input style="background-color:#1f2d3d;" class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button  style="background-color:#b82601;"class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>
                @endif

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu">
                            <a href="/beranda" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        @if (auth()->user()->level == 0)
                        <li class="nav-header">ADMIN PANEL</li>
                        <li class="nav-item">
                            <a href="/dataagendarektor" class="nav-link">
                                <i class="nav-icon fa fa-cogs" aria-hidden="true"></i>
                                <p>
                                    Admin Panel
                                </p>
                            </a>
                        </li>
                        @endif

                        @if (auth()->user()->level == 1)
                        <li class="nav-header">AGENDA REKTOR</li>
                        <li class="nav-item">
                            <a href="/dataagendarektor" class="nav-link">
                                <i class="nav-icon fa fa-calendar"></i>
                                <p>
                                    Agenda Rektor
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">SUMBER DAYA MANUSIA</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-graduation-cap"></i>
                                <p>
                                    Data Dosen
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/datadosenaktif" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dosen Aktif</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/datadosentugas" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dosen Tugas Belajar</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-users"></i>
                                <p>
                                    Staff dan Asisten Dosen
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/datastaf" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Staff</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/dataasistendosen" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Asisten Dosen</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/datakeasramaan" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Keasramaan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/datapegawai" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pegawai</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-user"></i>
                                <p>
                                    Mahasiswa
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/datamahasiswaaktif" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Mahasiswa Aktif</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/datamahasiswaalumni" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Mahasiswa Alumni</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-header">SARANA PRASARANA KAMPUS</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-building"></i>
                                <p>
                                    Gedung dan Bangunan
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/datalistgedung" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List Gedung</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/datakapasitasruangankelas" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Kapasitas Ruangan Kelas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/datakantin" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Kantin</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/dataperumahandalam" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Perumahan Dalam</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/dataperumahanluar" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Perumahan Luar</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-home"></i>
                                <p>
                                    Asrama dan Rusunawa
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/dataasrama" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Asrama/Rusunawa</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/datarusun3" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Rusunawa 3</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-suitcase"></i>
                                <p>
                                    Inventaris Kampus
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/datakomputer" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Komputer</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/datakendaraan" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Kendaraan Kampus</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-header">ASET KAMPUS</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-archive"></i>
                                <p>
                                    Penambahan Aset
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/datalmebeler" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Mebeler</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/datalalattulis" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Alat Tulis/PC/Notebook</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/datalaudiovisual" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Audio Visual</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/datalperalatan" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Peralatan Rumah Tangga</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/datalpersediaan" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Persediaan Kampus</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/datallab" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Peralatan Laboratorium</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/dataljaringan" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Jaringan Kampus</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/datalmaintanance" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Maintanance</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/dataltaman" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Perlengkapan Taman</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-recycle"></i>
                                <p>
                                    Pemusnahan Aset
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/datadispmebeler" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Mebeler</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/datadispalattulis" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Alat Tulis/PC/Notebook</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/datadispaudio" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Audio Visual</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/datadispperalatan" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Peralatan Rumah Tangga</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/datadisppersediaan" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Persediaan Kampus</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/datadisplab" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Peralatan Laboratorium</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/datadispjaringan" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Jaringan Kampus</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/datadispmaintanance" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Maintanance</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/datadisptaman" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Perlengkapan Taman</p>
                                    </a>
                                </li>
                            </ul>
                            <li class="nav-header">KELOLA AKUN & PENDAFTAR</li>
                            <li class="nav-item menu">
                                <a href="/dataakunpengguna" class="nav-link">
                                    <i class="nav-icon fa fa-cog" aria-hidden="true"></i>
                                    <p>
                                        Kelola Akun Pengguna
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item menu">
                                <a href="/datapendaftar" class="nav-link">
                                    <i class="nav-icon fas fa-chart-line mr-1" aria-hidden="true"></i>
                                    <p>
                                        Kelola Pendaftar
                                    </p>
                                </a>
                            </li>
                            @endif
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
