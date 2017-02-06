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
          <div class="container">
            <div class="row mb50" style="margin-top: 100px; margin-bottom:270px; ">
              <div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
                <h2>Login</h2>
                <hr style="width: 200px;">  

                <?php 
                error_reporting(0);
                if ($_GET['message'] == 'success') { ?>
                <div class="alert alert-success">
                  <strong>Akun anda berhasil di buat! Silahkan login</strong>
                </div>
                <?php 
              }
              elseif ($_GET['message'] == 'error') { ?>
              <div class="alert alert-danger">
                <strong>Kesalahan pada username atau password anda! Silahkan coba lagi</strong>
              </div>
              <?php
            }
            elseif ($_GET['message'] == 'akun') { ?>
            <div class="alert alert-warning">
              <strong>Anda harus login terlebih dahulu unutuk melakukan pemesanan</strong>
            </div>
            <?php
          }
          ?>                                      
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms">
          <div class="contact-form">
            <form action="php/control/login.php" method="POST" style="margin-left: 30%;" >
              <div class="form-group row">
                <label class="col-xs-2 col-form-label">Username</label>
                <div class="col-xs-4">
                  <input class="form-control" required type="text" placeholder="Username" name="username">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-xs-2 col-form-label">Password</label>
                <div class="col-xs-4">
                  <input class="form-control" required type="password" placeholder="Password" name="password">
                </div>
              </div>
              <div class="form-group row">
                <label for="example-text-input" class="col-xs-2 col-form-label"></label>
                <div class="col-xs-10">
                  <a href="register.php" style="color: blue;">Menjadi member kami</a>
                </div>
              </div>                        
              <div class="form-group row">
                <label for="example-text-input" class="col-xs-2 col-form-label"></label>
                <div class="col-xs-10">
                  <button class="btn btn-primary" name="login">Login</button>
                </div>
              </div>
            </form>
          </div>
        </div>    
      </div> 
    </div>          
  </section>
  <?php include 'php/footer.php' ?>
</body>
</html>
