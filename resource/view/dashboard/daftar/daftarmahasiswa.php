
<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../../../../public/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../../public/admin/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../../../public/admin/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../../../../public/admin/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../../../../public/admin/dist/css/skins/skin-blue.min.css">
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SIA</b>kad</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">          
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="../../../../public/admin/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Mukhlis Febriansyah</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="../../../../public/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Mukhlis Febriansyah - Web Developer of SMK WIKRAMA BOGOR
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../../../public/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Mukhlis Febriansyah</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->                
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Kartu Rencana Study</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Kartu Rencana Study</a></li>
            <li><a href="#">Kartu Hasil Study</a></li>
            <li><a href="#">Transkrip Nilai</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Kartu Hasil Study</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Kartu Rencana Study</a></li>
            <li><a href="#">Kartu Hasil Study</a></li>
            <li><a href="#">Transkrip Nilai</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Transkrip Nilai</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Kartu Rencana Study</a></li>
            <li><a href="#">Kartu Hasil Study</a></li>
            <li><a href="#">Transkrip Nilai</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Input Data</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="daftar/daftarmahasiswa.php">Pendaftaran Mahasiswa</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Selamat Datang Mahasiswa/Mahasiswi        
      </h1>    
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">Data Pribadi</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse">
              <i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove">
              <i class="fa fa-remove"></i>
            </button>
          </div>
      </div>
      <div class="box-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-grup">
              <label>Nama Lengkap:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-user"></i>
                </div>
                <input type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-grup">
              <label>Tempat Lahir:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-building"></i>
                </div>
                <input type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-grup">
              <label>Tanggal Lahir:</label>
              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control pull-right" id="datepicker">
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-grup">
              <label>Jenis Kelamin:</label>
              <select class="form-control select2 select2-hidden-accessible" style="width:100%;" tabindex="-1" aria-hidden="true">
                <option selected="selected" disabled="disabled">Jenis Kelamin</option>
                <option>Laki Laki</option>
                <option>Wanita</option>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-grup">
              <label>Status Martial:</label>
              <select class="form-control select2 select2-hidden-accessible pull-right" style="width:100%;" tabindex="-1" aria-hidden="true">
                <option selected="selected" disabled="disabled">Status Martial</option>
                <option>Menikah</option>
                <option>Belum Menikah</option>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-grup">
              <label>Kewarganegaraan:</label>
              <select class="form-control select2 select2-hidden-accessible" style="width:100%;" tabindex="-1" aria-hidden="true">
                <option selected="selected" disabled="disabled">Kewarganegaraan</option>
                <option>WNI</option>
                <option>WNA</option>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-grup">
              <label>Agama:</label>
              <select class="form-control select2 select2-hidden-accessible pull-right" style="width:100%;" tabindex="-1" aria-hidden="true">
                <option selected="selected" disabled="disabled">Agama</option>
                <option>Islam</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Kristen</option>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-grup">
              <label>Alamat Tempat Tinggal:</label>
              <textarea class="form-control" rows="4" placeholder="Enter..."></textarea>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-grup">
              <label>No. HP:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-phone"></i>
                </div>
                <input type="number" class="form-control" data-inputmask=""mask": "(999) 999-9999"" data-mask>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-grup">
              <label>Telepon Rumah:</label>
              <div class="input-group pull-right">
                <div class="input-group-addon">
                  <i class="fa fa-phone"></i>
                </div>
                <input type="number" class="form-control" data-inputmask=""mask": "(999) 999-9999"" data-mask>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-grup">
              <label for="ExampleInputEmail1">Email:</label>
              <div class="input-group">
                <div class="input-group-addon">@
                  <i class="fa fa-email"></i>
                </div>
                <input type="email" class="form-control" id="ExampleInputEmail1" placeholder="Enter Email">
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-grup">
              <label>Pin BB/BBM:</label>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-btc"></i>
                </div>
                <input type="text" class="form-control pull-right">
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">Data Asal Sekolah</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse">
              <i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove">
              <i class="fa fa-remove"></i>
            </button>
          </div>
          <div class="box-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-grup">
                  <label>Asal Sekolah:</label>
                  <select class="form-control select2 select2-hidden-accessible pull-right" style="width:100%;" tabindex="-1" aria-hidden="true">
                    <option selected="selected" disabled="disabled">Asal Sekolah</option>
                    <option>SMK</option>
                    <option>SMA</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-grup">
                  <label>Jurusan:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-gg-circle"></i>
                    </div>
                    <input type="text" class="form-control pull-right">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-grup">
                  <label>Nama Sekolah:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-building"></i>
                    </div>
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-grup">
                  <label>Tahun Lulus:</label>
                  <div class="input-group pull-right">
                    <div class="input-group-addon">
                      <i class="fa fa-hourglass-half"></i>
                    </div>
                    <input type="number" class="form-control" data-inputmask=""mask": "(999) 999-9999"" data-mask>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-grup">
                  <label>No Ijazah:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-windows"></i>
                    </div>
                    <input type="number" class="form-control" data-inputmask=""mask": "(999) 999-9999"" data-mask>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-grup">
                  <label>Alamat Sekolah:</label>
                  <textarea class="form-control pull-right" rows="4" placeholder="Enter..."></textarea>
                </div>
              </div>
            </div>
          </div>    
      </div>
    </div>
    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">Data Orang Tua/Wali</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse">
              <i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove">
              <i class="fa fa-remove"></i>
            </button>
          </div>
          <div class="box-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-grup">
                  <label>Nama Orangtua/Wali:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-user"></i>
                    </div>
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-grup">
                  <label>No Telepon:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-phone"></i>
                    </div>
                    <input type="number" class="form-control pull-right" data-inputmask=""mask": "(999) 999-9999"" data-mask>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-grup">
                  <label for="ExampleInputEmail1">Email:</label>
                  <div class="input-group">
                    <div class="input-group-addon">@
                      <i class="fa fa-email"></i>
                    </div>
                    <input type="email" class="form-control" id="ExampleInputEmail1" placeholder="Enter Email">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-grup">
                  <label>Pekerjaan:</label>
                  <select class="form-control select2 select2-hidden-accessible pull-right" style="width:100%;" tabindex="-1" aria-hidden="true">
                    <option selected="selected" disabled="disabled">Pekerjaan</option>
                    <option>PNS</option>
                    <option>TNI/Polri</option>
                    <option>Dosen/Guru</option>
                    <option>Pensiunan</option>
                    <option>Petani/Buruh</option>
                    <option>Swasta</option>
                    <option>Wirausaha</option>
                    <option>Lain-lain</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-grup">
                  <label>Nama Instansi:</label>
                  <div class="input-group">
                    <div class="input-group-addon">
                      <i class="fa fa-building-o"></i>
                    </div>
                    <input type="text" class="form-control">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-grup">
                  <label>Pendidikan Terakhir:</label>
                  <select class="form-control select2 select2-hidden-accessible pull-right" style="width:100%;" tabindex="-1" aria-hidden="true">
                    <option selected="selected" disabled="disabled">Pendidikan Terakhir</option>
                    <option>S3</option>
                    <option>S2</option>
                    <option>S1</option>
                    <option>Diploma</option>
                    <option>SLTA</option>
                  </select>
                </div>
              </div>
            </div>
          </div>    
      </div>
    </div>
    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">Data Kelas & Jurusan</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse">
              <i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove">
              <i class="fa fa-remove"></i>
            </button>
          </div>
          <div class="box-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-grup">
                  <label>Kelas:</label>
                  <select class="form-control select2 select2-hidden-accessible" style="width:100%;" tabindex="-1" aria-hidden="true">
                    <option selected="selected" disabled="disabled">Kelas</option>
                    <option>Reguler</option>
                    <option>Karyawan</option>
                    <option>Eksekutif</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-grup">
                  <label>Ekonomi & Manajemen:</label>
                  <select class="form-control select2 select2-hidden-accessible pull-right" style="width:100%;" tabindex="-1" aria-hidden="true">
                    <option selected="selected" disabled="disabled">Ekonomi & Manajemen</option>
                    <option>D3 Keuangan Perbankan</option>
                    <option>D3 Akuntansi</option>
                    <option>S1 Akuntansi</option>
                    <option>S1 Manajemen</option>
                    <option>S1 Manajemen Perpajakan</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-grup">
                  <label>Informatika:</label>
                  <select class="form-control select2 select2-hidden-accessible" style="width:100%;" tabindex="-1" aria-hidden="true">
                    <option selected="selected" disabled="disabled">Informatika</option>
                    <option>S1 Teknik Informatika</option>
                    <option>D3 Komputerisasi Akuntansi</option>
                    <option>D3 Manajemen Informatika</option>
                  </select>
                </div>
              </div>
            </div>
          </div>    
      </div>
    </div>    
    <div class="col-md-6">
      <div class="form-grup">
        <label for="ExampleInputFor">Masukkan File:</label>
        <input type="file" id="ExampleInputFile">
        <p class="help-block">Masukkan Foto</p>
      </div>
    </div>
    <button class="btn btn-block btn-primary btn-lg" style="margin-top:6%;">Simpan</button>   

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>
  
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="../../../../public/admin/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../../../public/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../../public/admin/dist/js/adminlte.min.js"></script>

</body>
</html>