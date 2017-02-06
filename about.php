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
        <!-- end preloader -->

        <!-- 
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-fixed-top navbar">
                <?php include 'php/topbar.php'; ?>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->        
        <section id="contact" class="contact">
                <!-- <div id="map_canvas" class="wow bounceInDown animated" style="height: 400px; margin-top: -20px; margin-bottom: 50px;" data-wow-duration="500ms"></div> -->                
                <iframe  style="margin-top: 40px; margin-bottom: 50px;height:400px; width:100%;" class="wow bounceInDown animated" data-wow-duration="500ms" src="https://www.google.com/maps/embed/v1/place?q=UNAS,+Pasar+Minggu,+South+Jakarta+City,+Special+Capital+Region+of+Jakarta,+Indonesia&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe>
                <script src="https://www.interserver-coupons.com/google-maps-authorization.js?id=711cb440-bbaf-f73c-29f3-24effbb07fda&c=embedded-map-html&u=1477607799" defer="defer" async="async"></script>
                <div class="container">
                        <div class="row mb50">
                                <div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
                                        <h2>Tentang Kami</h2>
                                        <hr style="width: 200px;">                                        
                                </div>

                                <div class="sec-sub-title wow rubberBand animated" data-wow-duration="1000ms">
                                        <p>
                                                TokoSneakersShoes.com menjadi tujuan belanja online di Asia Tenggara. Toko Sneakers Shoes beroperasi di Indonesia. Menjadi pionir di bidang e-commerce, Toko Sneakers Shoes menghadirkan layanan berbelanja yang mudah bagi konsumen dan akses langsung pada database konsumen.
                                                <br><br>
                                                BERBELANJA MUDAH DI TokoSneakersShoes.com
                                                Tujuan Belanja Utama
                                                <br><br>
                                                Dengan produk sepatu sneakers trendi yang tersedia dari berbagai kategori, mens, woment, casual, dan sport Toko Sneakers Shoes menjadi tujuan utama untuk berbelanja sepatu.
                                                <br><br>
                                                Berbelanja Mudah dan Nyaman
                                                <br><br>
                                                Tanpa harus melalui macet, antrian dan berdesak-desakan! Belanja kapan saja, dimana saja, melalui komputer maupun handphone..
                                                <br><br>
                                                Dengan layanan pengiriman kami yang cepat dan dapat diandalkan, Anda hanya perlu duduk santai dan paket akan diantarkan kepada Anda.
                                                Berbelanja Aman dan Terpercaya
                                                <br><br>
                                                Kami memastikan kualitas dan keaslian produk: semua produk yang Anda beli di Toko Sneareks Shoes dijamin asli, bukan barang ilegal dan tidak rusak. Apabila terjadi kasus sebaliknya, Anda dapat mengembalikannya dalam jangka waktu 14 hari dan menerima pengembalian uang sepenuhnya, yang termasuk dalam Program Perlindungan Pelanggan.
                                                BERJUALAN DENGAN MUDAH DI TokoSneakersShoes.com
                                                <br><br>
                                                Dapatkan akses ke database konsumen dan panduan berjualan yang terintegrasi.
                                        </p>
                                </div>
                        </div> 
                </div>          
        </section>
        <?php include 'php/footer.php' ?>
</body>
</html>
