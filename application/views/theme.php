<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ITERA</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?=base_url();?>assets/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url();?>assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url();?>assets/Ionicons/css/ionicons.min.css">

  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?=base_url();?>assets/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

  <link rel="stylesheet" href="<?=base_url();?>assets/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url();?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="<?=base_url();?>assets/dist/css/skins/skin-purple.min.css">

  <!-- jQuery 3 -->
  <script src="<?=base_url();?>assets/dist/js/jquery.min.js"></script>
  <script src="<?=base_url();?>assets/dist/js/highcharts.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?=base_url();?>assets/bootstrap/dist/js/bootstrap.min.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>PD</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>ITERA</b></span>
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
 <?php if($this->session->userdata('level')==('admin')){ ?>
  <?php 
  include"koneksi/conn.php";
  $no = mysqli_num_rows(mysqli_query($koneksi,"select * from peminjaman where baca='D'"));
  $ruang = mysqli_num_rows(mysqli_query($koneksi,"select * from peminjaman_ruang where baca='D'"));
  $kuisioner = mysqli_num_rows(mysqli_query($koneksi,"select * from kuisioner where baca='D'"));
 ?>

<li class="dropdown notifications-menu">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<i class="fa fa-bell-o"></i>
<?php $total = $no+$ruang+$kuisioner; ?>
<span class="label label-warning"><?php echo $total ?></span>
</a>
<ul class="dropdown-menu">

<li>

<ul class="menu">

<li>
<a href="<?php echo base_url() ?>peminjaman/index">
<i class="fa fa-bell-o text-red"></i>Kamu Memiliki <?php echo $no ?> Peminjaman Alat
</a>
</li>
<li>
<a href="<?php echo base_url() ?>peminjaman_ruang/index">
<i class="fa fa-bell-o text-red"></i>Kamu Memiliki <?php echo $ruang ?> Peminjaman Ruang
</a>
</li>

<li>
<a href="<?php echo base_url() ?>kuisioner/index">
<i class="fa fa-bell-o text-red"></i>Kamu Memiliki <?php echo $kuisioner ?> Kuisioner
</a>
</li>
</ul>
</li>

</ul>
</li>
 <?php } ?>


          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="<?=base_url();?>assets/dist/img/itera.png" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?=$this->session->userdata('nama');?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?=base_url();?>assets/dist/img/itera.png" class="img-circle" alt="User Image">

                <p>
                  <?=$this->session->userdata('nama');?> - <?=$this->session->userdata('level');?>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
              
                <div class="pull-right">
                  <a href="<?=base_url();?>login/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>

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
          <img src="<?=base_url();?>assets/dist/img/itera.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?=$this->session->userdata('level');?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">DASHBOARD</li>


        <?php if($this->session->userdata('level')==('admin')){ ?>
          <li><a href="<?=base_url();?>dashboard/index"><i class="fa fa-dashboard"></i> <span>Halaman Utama</span></a></li>
   <li><a href="<?=base_url();?>user/index"><i class="fa fa-users"></i> <span>Data User</span></a></li>
    <li><a href="<?=base_url();?>mahasiswa/index"><i class="fa fa-users"></i> <span>Data Mahasiswa</span></a></li>
        <li><a href="<?=base_url();?>alat/index"><i class="fa fa-cogs"></i> <span>Data Alat</span></a></li>
         <li><a href="<?=base_url();?>peminjaman/index"><i class="fa fa-upload"></i> <span>Peminjaman Alat</span></a></li>
          <li><a href="<?=base_url();?>peminjaman_ruang/index"><i class="fa fa-home"></i> <span>Peminjaman Ruangan</span></a></li>
          <li><a href="<?=base_url();?>kuisioner/index"><i class="fa fa-book"></i> <span>Kuisioner</span></a></li>

          <li class="treeview">
<a href="#">
<i class="fa fa-laptop"></i>
<span>Konseling</span>
<span class="pull-right-container">
<i class="fa fa-angle-left pull-right"></i>
</span>
</a>
<ul class="treeview-menu">
<li><a href="<?=base_url();?>jenis/index"><i class="fa fa-circle-o"></i> Jenis</a></li>
<li><a href="<?=base_url();?>pertanyaan/index"><i class="fa fa-circle-o"></i> Pertanyaan</a></li>
<li><a href="<?=base_url();?>konseling/index"><i class="fa fa-circle-o"></i> Hasil Konseling</a></li>
</ul>
</li>

            <li><a href="<?=base_url();?>login/logout"><i class="fa fa-lock"></i> <span>Keluar</span></a></li>
        <?php } else if($this->session->userdata('level')==('Mahasiswa')){ ?>

          <li><a href="<?=base_url();?>dashboard/index"><i class="fa fa-dashboard"></i> <span>Halaman Utama</span></a></li>
          <li><a href="<?=base_url();?>mahasiswa/edit"><i class="fa fa-cogs"></i> <span>Edit Profil</span></a></li>
   <li><a href="<?=base_url();?>peminjaman/index"><i class="fa fa-download"></i> <span>Peminjaman Alat</span></a></li>
   <li><a href="<?=base_url();?>peminjaman_ruang/index"><i class="fa fa-home"></i> <span>Peminjaman Ruangan</span></a></li>
   <li><a href="<?=base_url();?>kuisioner/index"><i class="fa fa-book"></i> <span>Kuisioner</span></a></li>
          <li><a href="<?=base_url();?>konseling/index"><i class="fa fa-comment"></i> <span>Konseling</span></a></li>
            <li><a href="<?=base_url();?>login/logout"><i class="fa fa-lock"></i> <span>Keluar</span></a></li>

        <?php } else {} ?>


        



        
      

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <?=$content; ?>
    
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      <i class="fa fa-instagram"></i>
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2023 <a href="#">ITERA</a>.</strong> All rights reserved.
  </footer>

</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- DataTables -->
<script src="<?=base_url();?>assets/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url();?>assets/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script src="<?=base_url();?>assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url();?>assets/fastclick/lib/fastclick.js"></script>

<!-- AdminLTE App -->
<script src="<?=base_url();?>assets/dist/js/adminlte.min.js"></script>

<script src="<?=base_url();?>assets/ckeditor/ckeditor.js"></script>

<!-- bootstrap datepicker -->
<script src="<?=base_url();?>assets/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<script>
  $(function () {
    /*CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');*/
    CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');

    //Date picker
    $('.datepicker').datepicker({autoclose:true, format: "yyyy-mm-dd"});

    //$('#example1').DataTable()
    $('.nameTable').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    });

    $('.pelaksanaTable').DataTable({
      'paging'      : false,
      'lengthChange': true,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true,
      'scrollY'     : 200
    });


    
  })
</script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>



<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>