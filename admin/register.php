<!DOCTYPE html>
<html>
<head>
  <?php include("php/part/head-part.php"); ?>
</head>
<body class="hold-transition register-page">
  <div class="register-box">
    <div class="register-logo">
      <b>ADMIN</b>PANEL
    </div>

    <div class="register-box-body">
      <p class="login-box-msg">Register a new membership</p>
      <form action="#" method="POST">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Username" required>
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Password" required>
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Retype password" required>
          <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-12">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
          </div><!-- /.col -->
        </div>
      </form>
      <br>

      <a href="index.php" class="text-center">I already have a membership</a>
    </div><!-- /.form-box -->
  </div><!-- /.register-box -->

  <!-- jQuery 2.1.4 -->
  <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
  <!-- Bootstrap 3.3.5 -->
  <script src="../../bootstrap/js/bootstrap.min.js"></script>
  <!-- iCheck -->
  <script src="../../plugins/iCheck/icheck.min.js"></script>
  <script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
    });
  </script>
</body>
</html>
