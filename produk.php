<?php 
session_start();
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
    .caption{
        width: 100%;
        padding: 10px 0px;
    }
    .caption > span{
        font-size: 15px;
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
            <div class="container">
                <div class="row">

                    <div class="sec-title text-center" style="margin-bottom: 20px;">
                        <h2>All Produk</h2>                                   
                    </div>

                    <div class="col-md-12" style="margin-bottom: 20px;">
                        <img src="img/banner/sneakers1.jpg" style="width: 100%; height:400px;">
                    </div>

                    <div class="work-filter wow fadeInRight animated" data-wow-duration="500ms">
                        <ul class="text-center">
                            <li><a href="javascript:;" data-filter="all" class="active filter">All</a></li>
                            <li><a href="javascript:;" data-filter=".Men" class="filter">Mens</a></li>
                            <li><a href="javascript:;" data-filter=".Women" class="filter">Womens</a></li>
                            <li><a href="javascript:;" data-filter=".Casual" class="filter">Casual</a></li>
                            <li><a href="javascript:;" data-filter=".Sport" class="filter">Sport</a></li>
                            <!-- <li><a href="javascript:;" data-filter=".photography" class="filter">photography</a></li> -->
                        </ul>
                    </div>

                </div>
            </div>

            <div class="project-wrapper">
                <?php 
                $query = mysql_query("SELECT * FROM barang ORDER BY tanggal DESC LIMIT 8");
                while ($cek = mysql_fetch_array($query)) {
                 ?>
                 <figure class="mix work-item <?php echo $cek['kategori']; ?>" style="border:1px solid #eee; overflow: hidden;">
                    <img src="img/produk/<?php echo $cek['foto']; ?>" alt="">                                                               
                    <div class="caption text-center">
                        <h3><b><?php echo $cek['nama_barang']; ?></b></h3><br>
                        <span><b>Ukuran</b> : <?php echo $cek['ukuran']; ?></span><br>
                        <span><b>Rp <?php echo $cek['harga']; ?></b></span><br><br>
                        <a href="detail.php?kode=<?php echo $cek['id']; ?>" class="btn-beli">Beli Sekarang</a>
                    </div>                                
                </figure>
                <?php 
            }
            ?> 
        </div>
    </section>
    <?php include 'php/footer.php' ?>
</body>
</html>
