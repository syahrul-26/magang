<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
if(!$_SESSION['nama']){
  header('Location: ../index.php?session=expired');
}
include('header.php');?>
<?php include('../configurasi/config.php');?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <?php include('preloader.php');?>

  <!-- Navbar -->
  <?php include('navbar.php');?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <? include('logo.php');?>

    <!-- Sidebar -->
    <?php include('sidebar.php');?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php include('content_header.php');?>
    <!-- /.content-header -->

    <!-- Main content -->
    <?php
    if (isset($_GET['page'])){
      if ($_GET['page']=='dashboard'){
        include('dashboard.php');
      }
      else if($_GET['page']=='data-model'){
        include('data_model.php');
      }
      else if($_GET['page']=='tambah-data'){
        include('add/tambah_data.php');
      }
      else if($_GET['page']=='tambah-anggota'){
        include('add/tambah_anggota.php');
      }
      else if($_GET['page']=='tambah-komoditas'){
        include('add/tambah_komoditas.php');
      }
      else if($_GET['page']=='edit-data'){
        include('edit/edit_data.php');
      }
      else if($_GET['page']=='edit-anggota'){
        include('edit/edit_anggota.php');
      }
      else if($_GET['page']=='edit-komoditas'){
        include('edit/edit_komoditas.php');
      }
      else if($_GET['page']=='detail-kelompok'){
        include('detail/detail_kelompok.php');
      }
      else if($_GET['page']=='list-anggota'){
        include('list/list_anggota.php');
      }
      else if($_GET['page']=='list-komoditas'){
        include('list/list_komoditas.php');
      }
      else if($_GET['page']=='detail-anggota'){
        include('detail/detail_anggota.php');
      }
      else{
        include('dashboard.php');
      }
    }
    else{
      include('dashboard.php');
    }?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('footer.php');?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

</body>
</html>
