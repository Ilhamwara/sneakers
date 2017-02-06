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
            <div class="row mb50" style="margin-top: 100px;">
              <div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
                <h2>Register</h2>
                <hr style="width: 200px;">   

                <?php 
                error_reporting(0);
                if($_GET['message'] == 'error'){ ?>
                <div class="alert alert-error">
                  <strong>Gagal menyimpan akun anda!</strong>
                </div>
                <?php }
                ?>

              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms">
                <div class="contact-form">                
                  <form action="php/control/register.php" method="POST" style="margin-left: 30%;" >
                   <div class="form-group row">
                    <label class="col-xs-2 col-form-label">Nama</label>
                    <div class="col-xs-4">
                      <input class="form-control" required type="text" placeholder="Nama Lengkap" name="nama">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-xs-2 col-form-label">Username</label>
                    <div class="col-xs-4">
                      <input class="form-control" required type="text" placeholder="Username" name="username">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-xs-2 col-form-label">Alamat</label>
                    <div class="col-xs-4">
                      <input class="form-control" required type="text" placeholder="Alamat" name="alamat">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-xs-2 col-form-label">Phone</label>
                    <div class="col-xs-4">
                      <input class="form-control" required type="text" placeholder="Phone" name="phone">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-xs-2 col-form-label">E-mail</label>
                    <div class="col-xs-4">
                      <input class="form-control" required type="email" placeholder="E-mail" name="email">
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
                      <button class="btn btn-primary" name="reg">Register</button>
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
