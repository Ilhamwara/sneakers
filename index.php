<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<?php include 'php/head.php'; ?>
</head>

<body id="body">

	<!-- preloader -->
	<div id="preloader">
		<img src="img/preloader.gif" alt="Preloader">
	</div>
    <header id="navigation" class="navbar-fixed-top navbar">
       <?php include 'php/topbar.php'; ?>
   </header>
   <section id="slider">
       <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

          <!-- Indicators bullet -->
          <ol class="carousel-indicators">
             <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
             <li data-target="#carousel-example-generic" data-slide-to="1"></li>
         </ol>
         <!-- End Indicators bullet -->				

         <!-- Wrapper for slides -->
         <div class="carousel-inner" role="listbox">

             <!-- single slide -->
             <div class="item active" style="background-image: url(img/sneakers1.jpg);">
                <div class="carousel-caption">
                   <h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated" style="color:#ffa726;"><span>Selamat Datang</span></h2>
                   <h3 data-wow-duration="1000ms" class="wow slideInLeft animated"><span > <b>Kami siap melayani anda</b></span></h3>
               </div>
           </div>
           <div class="item" style="background-image: url(img/sneakers2.jpg);">
            <div class="carousel-caption">
               <h2 data-wow-duration="500ms" data-wow-delay="500ms" class="wow bounceInDown animated"><span style="color:#ffa726;">Sneakers Terbaik</span></h2>                                                
               <h3 data-wow-duration="500ms" class="wow slideInLeft animated"><span><b>Original</b></span></h3>        				
           </div>
       </div>
   </div>
</div>
</section>

<section id="works" class="works clearfix" style="padding: 70px 0px;">
   <div class="container">
      <div class="row">

         <div class="sec-title text-center">
            <h2>Produk Terbaru</h2>
            <hr>        				
        </div>

        <div class="sec-sub-title text-center">
            <p>Menampilkan list produk terbaru kami disini</p>
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
     <figure class="mix work-item <?php echo $cek['kategori']; ?>">
         <img src="img/produk/<?php echo $cek['foto']; ?>" alt="">
         <figcaption class="overlay">
            <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/produk/<?php echo $cek['foto']; ?>"><i class="fa fa-eye fa-lg"></i></a>
            <h4><?php echo $cek['nama_barang']; ?></h4>
            <p><?php echo $cek['kategori']; ?></p>
        </figcaption>
    </figure>
    <?php 
}
?>
</div>
</section>
<section id="facts" class="facts">
   <div class="parallax-overlay">
      <div class="container">
         <div class="row number-counters">
            <div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
               <h2>Review Kami</h2>        					
               <hr style="width: 100px;">
           </div>
           <!-- first count item -->
           <div class="col-md-4 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
             <div class="counters-item">
              <i class="fa fa-archive fa-3x"></i>
              <strong data-to="3200">0</strong>
              <!-- Set Your Number here. i,e. data-to="56" -->
              <p>Produk Aktif</p>
          </div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
         <div class="counters-item">
          <i class="fa fa-users fa-3x"></i>
          <strong data-to="120">0</strong>
          <!-- Set Your Number here. i,e. data-to="56" -->
          <p>Anggota</p>
      </div>
  </div>
  <div class="col-md-4 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
     <div class="counters-item">
      <i class="fa fa-rocket fa-3x"></i>
      <strong data-to="360">0</strong>
      <!-- Set Your Number here. i,e. data-to="56" -->
      <p>Barang Terjual</p>
  </div>
</div>        				
<!-- end first count item -->
</div>
</div>
</div>
</section>
<?php include 'php/footer.php' ?>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/581c3db416936807170c6d66/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>
