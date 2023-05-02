<!DOCTYPE html>
<html lang="en">
<?php 
session_start(); 
if (!$_SESSION['nama']){
  header ('location:../index.php?session=expired');
}
 include ('header.php');?>
<?php include ('../config/config.php');?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <?php include ('preloader.php'); ?>

  <!-- Navbar -->
  <?php include ('navbar.php');?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <?php include ('logo.php'); ?>

    <!-- Sidebar -->
    <?php include ('sidebar.php'); ?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php include ('content_header.php'); ?>
    <!-- /.content-header -->

    <!-- Main content -->
    <?php 
    if (isset($_GET['page'])){
      if ($_GET['page']=='dashboard'){ 
      include ('dashboard.php') ; 
      }
      else if ($_GET['page']=='data-anggota'){ 
        include ('data_anggota.php') ; 
      } 
      else if ($_GET['page']=='edit-data'){ 
        include ('edit/edit_data.php') ; 
      }
      else if ($_GET['page']=='simpanan-anggota'){ 
        include ('simpanan/simpanan.php') ; 
      }
       else if ($_GET['page']=='edit-simpanan-anggota'){ 
         include ('simpanan/edit_data_simpanan.php') ; 
      }
      else if ($_GET['page']=='pinjaman-anggota'){ 
        include ('pinjaman/pinjaman.php') ; 
      }
      else if ($_GET['page']=='edit-pinjaman-anggota'){ 
        include ('pinjaman/edit_data_pinjaman.php') ; 
     }
     else if ($_GET['page']=='cicilan-anggota'){ 
      include ('cicilan/cicilan.php') ; 
     }
     else if ($_GET['page']=='edit-cicilan-anggota'){ 
      include ('cicilan/edit_data_cicilan.php') ; 
    }
    else if ($_GET['page']=='shu-anggota'){ 
      include ('SHU/shu.php') ; 
     }
     else if ($_GET['page']=='edit-shu-anggota'){ 
      include ('SHU/edit_data_shu.php') ; 
    }
    else if ($_GET['page']=='laporan-anggota'){ 
      include ('laporan/laporan_data_anggota.php') ; 
    }

    //bagian user

    else if ($_GET['page']=='dashboard-user'){ 
      include ('user/dashboard_user.php') ; 
    } 
    else if ($_GET['page']=='data-anggota-user'){ 
      include ('user/data_anggota_user.php') ; 
    }
    else if ($_GET['page']=='simpanan-anggota-user'){ 
      include ('user/simpanan_user.php') ; 
    }
    else if ($_GET['page']=='pinjaman-anggota-user'){ 
      include ('user/pinjaman_user.php') ; 
   }
   else if ($_GET['page']=='cicilan-anggota-user'){ 
    include ('user/cicilan_user.php') ; 
  }
  else if ($_GET['page']=='shu-anggota-user'){ 
    include ('user/shu_user.php') ; 
  }

      else{
        include ('not_found.php');
          }
     }
      else{
        include ('dashboard.php') ;    
    }?>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include ('footer.php'); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


</body>
</html>
