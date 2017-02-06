<!DOCTYPE html>
<html>
<head>
  <?php include("php/part/head-part.php");?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <?php include("php/part/header-part.php"); ?>

    <?php include("php/part/sidebar-part.php"); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Main content -->
      <section class="content">
        <?php 
        $page = $_GET['page'];
        if ($page == 'dashboard') {
          include 'php/body/home.php';
        }
        elseif (($page == 'admin-control') || ($page == 'tambah-admin') || ($page == 'update-admin')) {
          include 'php/body/admin.php';
        }
        elseif (($page == 'pemesanan') || ($page == 'form-pemesanan')) {
          include 'php/body/pemesanan.php';
        }  
        elseif (($page == 'member')) {
          include 'php/body/member.php';
        }  
        elseif (($page == 'chat')) {
          include 'php/body/chat.php';
        }   
        elseif ($page == 'transaksi') {
          include 'php/body/transaksi.php';
        }   
        elseif (($page == 'stok-barang') || ($page == 'update-barang') || ($page == 'tambah-barang')) {
          include 'php/body/stok.php';
        }   
        elseif ($page == 'oltp') {
          include 'php/body/oltp.php';
        }      
        ?>
      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <?php include("php/part/footer-part.php"); ?>
  </body>
  <script src="plugins/iCheck/icheck.min.js"></script>
  </html>
