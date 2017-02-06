<?php 
session_start();
include('php/control/cek-login.php');
include 'admin/php/control/koneksi.php';
$id = $_SESSION['id'];
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
    td{                            
        border-top: 1px solid #fff !important;
        overflow: hidden;
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
        <section id="works" class="works clearfix" style="padding:138px;">
            <div class="container">
                <div class="col-md-12 row">
                    <h4><b>Shopping Cart</b></h4><br>
                    <div class="panel panel-default">
                        <div class="panel-body">

                            <?php 
                            error_reporting(0);
                            if ($_GET['message'] == 'success') { ?>
                            <div class="alert alert-success" id="alert">
                                <strong>Barang berhasil ditambahkan</strong>
                            </div>
                            <?php 
                        } 
                        elseif ($_GET['message'] == 'success-delete') { ?>
                        <div class="alert alert-success" id="alert">
                            <strong>Barang berhasil dihapus</strong>
                        </div>
                        <?php 
                    }
                    elseif ($_GET['message'] == 'error') {  ?>
                    <div class="alert alert-error" id="alert">
                        <strong>Barang gagal dihapus</strong>
                    </div>
                    <?php 
                }
                elseif ($_GET['message'] == 'error-checkout') { ?>
                <div class="alert alert-error" id="alert">
                    <strong>Barang gagal masuk check-out</strong>
                </div>
                <?php
            }
            ?>  
            <table class="table table-hover text-center">
                <tr>
                    <td><b>No</b></td>
                    <td style="width: 15%;"><b>Image</b></td>
                    <td><b>Deskripsi</b></td>
                    <td><b>Quantity</b></td>
                    <td><b>Total Harga</b></td>
                    <td><b>Action</b></td>
                </tr>   

                <?php 
                $query = mysql_query("SELECT keranjang.id,barang.id AS id_barang,member.id AS id_user,barang.foto,barang.nama_barang,barang.deskripsi,keranjang.harga,keranjang.qty,keranjang.ukuran,keranjang.tanggal FROM keranjang INNER JOIN barang ON keranjang.id_barang=barang.id INNER JOIN member ON keranjang.id_user=member.id WHERE member.id=$id");
                $no = 0;
                while ($cek = mysql_fetch_array($query)) {
                    $no = $no+1;
                    $harga = number_format($cek['harga']); 
                    ?>

                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><img src="img/produk/<?php echo $cek['foto']; ?>" style="width: 100%; height:100px; border-radius: 5px;"></td>
                        <td>
                            <p class="text-left">
                               <?php echo $cek['deskripsi']; ?>
                           </p>
                       </td>
                       <td><?php echo $cek['qty']; ?></td>
                       <td><h4 style="font-weight: 700">Rp <?php echo $harga; ?>,00</h4></td>
                       <td><a href="php/control/delete.php?keranjang=<?php echo $cek['id']; ?>" class="btn btn-danger" style="border-radius: 0px;">Cancel Barang</a></td>
                   </tr>      
                   <?php 
               }
               ?>                  
           </table>
           <hr>
           <div class="pull-right">
            <table class="table">
                <tr>
                    <td><h4 style="font-weight: 700;">Total Pembayaran</h4></td>
                    <td>=</td>
                    <?php 

                    $query = mysql_query("SELECT SUM(harga) AS total , SUM(qty) AS Quantity ,id_barang FROM keranjang WHERE id_user = $id");
                    $cek5 = mysql_fetch_array($query);                                
                    $total = number_format($cek5['total']);
                    ?>                        
                    <td><h4 style="font-weight: 700; color: #48C9B0;">Rp <?php echo $total; ?>,00</h4></td>
                </tr>                    
            </table>                
        </div>
    </div>
</div>   
<div class="col-md-12">
    <div class="pull-right">
        <form action="php/control/check-out.php" method="POST">                    
            <input type="hidden" value="<?php echo $cek5['id_barang']; ?>" name="id_barang">
            <input type="hidden" value="<?php echo $cek5['Quantity']; ?>" name="qty">
            <input type="hidden" value="<?php echo $total; ?>" name="harga">                    
            <button class="btn-primary" name="check-out" style="padding: 10px;">Check-out</button>
        </form>            
    </div>
    <div class="pull-left">
        <a href="produk.php" class="btn-beli"><i class="fa fa-arrow-left"></i>&nbsp; Continue Shopping</a>
    </div>
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
