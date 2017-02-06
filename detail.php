<?php 
session_start();
include 'admin/php/control/koneksi.php';
$id = $_GET['kode'];
$query = mysql_query("SELECT * FROM barang WHERE id='$id'");
$cek = mysql_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<?php include 'php/head.php'; ?>
   <style type="text/css">
    .btn-beli{
        background:#2c3e50;
        color: #fff;
        padding: 10px;                                                 
    }
    .btn-beli:hover{
        color: white;
        background: #ffa726;
    }
    .detail > li{
        padding: 15px;
    }
    tr{
        background: black;
    }
    td{                            
        border-top: 1px solid #fff !important;
        overflow: hidden;
    }
    button{
        border:none;
    }
</style>
</head>

<body id="body">

	<!-- preloader -->
	<div id="preloader">
		<img src="img/preloader.gif" alt="Preloader">
	</div>
	<!-- end preloader -->

        <!-- 
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-fixed-top">
        	<?php include 'php/topbar.php'; ?>
        </header>
        <section id="works" class="works clearfix" style="padding:100px;">
            <?php 
            error_reporting(0);
            if ($_GET['message'] == 'error') { ?>
            <div class="alert alert-danger" id="alert">
                <strong>Gagal Menyimpan Ke cart</strong>
            </div>
            <?php
        }
        if ($_GET['message'] == 'stok-habis') { ?>
        <div class="alert alert-danger" id="alert">
            <strong>Maaf jumlah barang yang anda beli melebih stock kami</strong>
        </div>
        <?php
    }
    ?>    
    <div class="container">
        <div class="col-md-12 row">
            <div class="col-md-6" style="margin-bottom: 20px;">
                <img src="img/produk/<?php echo $cek['foto']; ?>" style="width: 100%; height:400px; border-radius: 5px;">
            </div> 
            <div class="col-md-6">
                <form action="php/control/pemesanan.php?kode=<?php echo $_GET['kode']; ?>" method="POST">
                    <ul class="detail">
                        <li><h2 style="font-weight: 900;"><?php echo $cek['nama_barang']; ?></h2></li>
                        <li><h4>Tersedia Ukuran : <?php echo $cek['ukuran']; ?></h4></li>
                        <li><h4 style="font-weight: 900;">Rp <?php echo $cek['harga']; ?>,00</h4></li>
                        <li><input type="text" name="harga" class="form-control" value="<?php echo $cek['harga']; ?>"></li>
                        <li><input type="text" name="ukuran" class="form-control" placeholder="Pilih Ukuran" required></li>
                        <li><input type="number" name="qty" class="form-control" placeholder="Jumlah Barang" required></li>
                        <hr>
                        <li>Deskripsi :</li>
                        <li>
                            <p>
                               <?php echo $cek['deskripsi']; ?>
                           </p>
                       </li>
                       <li>
                           <?php 
                           $total_stock = $cek['total'];
                           if ($total_stock <= 0 ) { ?>
                           <div style="background:#e74c3c; color: #fff; padding: 10px;" class="text-center">
                               <h4><b>Maaf Stock Barang Ini Sudah Habis</b></h4>
                           </div>
                           <?php
                       }
                       else{ ?>
                       <button class="btn-beli" name="pesan">Pesan Sekarang</button>
                       <?php
                   }
                   ?>

               </li>
           </ul>
       </form>
   </div>                    
</div>
</div>
</section>
<?php include 'php/footer.php' ?>
<script type="text/javascript">
  $("#alert").fadeTo(2000, 500).slideUp(500, function(){
    $("#alert").slideUp(500);
});   
</script>
</body>
</html>
