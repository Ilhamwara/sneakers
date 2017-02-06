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
        <section id="contact" class="contact" style="margin-top: 100px;">                                
                <div class="container">
                        <div class="row mb50">
                                <div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
                                        <h2>Cara Pembayaran</h2>
                                        <hr style="width: 200px;">                                        
                                </div>

                                <div class="sec-sub-title wow rubberBand animated" data-wow-duration="1000ms">
                                        <p style="font-weight: bold;">
                                                Bagaimana cara saya transfer melalui bank BCA?
                                                Pembayaran menggunakan BCA dapat dilakukan melalui metode-metode berikut ini:
                                                <br><br>
                                                <ul>
                                                        <li><b>- Via Internet Banking</b></li>
                                                        <li><b>- Via M-BCA</b></li>
                                                        <li><b>- Via BCA ATM</b></li>
                                                        <li><b>- Via KlikBCA</b></li>
                                                        <li><b>- Via Internet Banking</b></li>
                                                </ul>
                                        </p>
                                        <p>
                                                <br>
                                                Login pada aplikasi KlikBCA, masukkan user ID & PIN
                                                Pilih "Transfer Dana", kemudian pilih "Transfer ke BCA Virtual Account"
                                                Masukkan no. BCA Virtual Account (71111XXXXXXXX) & klik "Lanjutkan"
                                                Isi kolom "Berita" dengan nama Anda & klik "Lanjut"
                                                Pastikan data yang dimasukkan sudah benar, dan Input "Respon KeyBCA", lalu klik "Kirim"
                                                Via M-BCA
                                                <br><br>
                                                Login pada aplikasi M-BCA, masukkan PIN M-BCA
                                                Pilih "m-Transfer", pilih "BCA Virtual Account"
                                                Klik "Input no. Virtual Account", lalu masukkan no. BCA Virtual Account (71111XXXXXXXX)
                                                Klik "OK" & "Send"
                                                Periksa data transaksi kemudian pilih "OK"
                                                Isi kolom "Berita" dengan nama Anda, lalu klik "OK", kemudian masukkan PIN M-BCA Anda
                                                Periksa kembali data transaksi Anda, kemudian klik "OK"
                                                Via BCA ATM
                                                <br><br>
                                                Masukkan kartu ATM kemudian masukkan nomor PIN Anda
                                                Pilih "Transaksi lainnya", kemudian pilih "Transfer"
                                                Silahkan masukkan no. BCA Virtual Account (71111XXXXXXXX), lalu tekan "Benar"
                                                Periksa kembali data transaksi kemudian tekan "Benar"
                                                Via KlikBCA
                                                <br><br>
                                                Login pada aplikasi KlikBCA, masukkan user ID & PIN
                                                Pilih "e-Commerce Payment"
                                                Pilih Category "Market Place" dan Merchant Name "Toko Sneakers Shoes" lalu klik "Continue"
                                                Ceklis pada pesanan yang Anda ingin proses, lalu klik "Continue"
                                                Masukkan angka dari token Anda, lalu klik "Continue"
                                        </p>
                                </div>
                        </div> 
                </div>          
        </section>
        <?php include 'php/footer.php' ?>
</body>
</html>
