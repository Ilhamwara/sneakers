<?php 

include 'php/control/koneksi.php';

session_start();
error_reporting(0);

?>


<!DOCTYPE html>
<html>
<head>
  <?php include("php/part/head-part.php"); ?>
</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <b>ADMIN</b>PANEL
    </div><!-- /.login-logo -->
    <div class="login-box-body">

      <?php 



      if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = mysql_query("SELECT * FROM admin WHERE username='$username' AND password='$password'");
        $cek = mysql_fetch_array($query);
      }
      if ($cek) {
        $id_admin = $_SESSION['id_admin'];
        header("location:main.php?page=admin-control");
      }
      elseif(isset($_POST['username']) || isset($_POST['password'])){
        ?>

        <div class="login-logo">
          <b class="text-danger">Login Denied !</b>
        </div><!-- /.login-logo -->
        <div class="row">
          <div class="col-xs-12">
            <div class="col-xs-12" style="padding-bottom:20px;">
              <a href="index.php" type="submit" class="btn btn-primary btn-block">Back to Login </a>
            </div>
          </div>
        </div>
        <?php 
      }

      else{
        ?>
        <p class="login-box-msg"><b>Sign in with your username</b></p>
        <form action="index.php" method="POST">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="username" placeholder="Username" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <button type="submit" name="submit" class="btn btn-primary btn-block">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>
        <br>
        <?php
      }
      ?>
    </div><!-- /.login-box-body -->
  </div><!-- /.login-box -->

  <!-- jQuery 2.1.4 -->
  <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
  <!-- Bootstrap 3.3.5 -->
  <script src="../../bootstrap/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="../../plugins/iCheck/icheck.min.js"></script>
</body>
</html>
