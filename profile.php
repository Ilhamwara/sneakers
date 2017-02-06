<?php 
session_start();
include 'admin/php/control/koneksi.php';
include('php/control/cek-login.php');
$id = $_SESSION['id'];
$query = mysql_query("SELECT * FROM member WHERE id = $id");
$user = mysql_fetch_array($query);
$page = $_GET['page'];
?><!DOCTYPE html>
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
  .active{
    background: #5D6D7E;
  }
  .list-group-item:hover{
    background: #5D6D7E;        
    transition: .4s ease-out;
  }
  .list-group-item:hover > a{
    color: white;
  }
  .list-group-item > a{
    color: #aeaeae;
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
        <section id="works" class="works clearfix" style="padding:100px 0px;">
          <?php 
          error_reporting(0);
          if ($_GET['message'] == 'success') { ?>
          <div class="alert alert-success" id="alert">
            <strong>Selamat datang <?php echo $user['nama']; ?> </strong>
          </div>
          <?php 
        } ?>  

        <div class="col-md-4">                    
          <ul class="list-group">
            <li class="list-group-item <?php if ($page == 'profile') {echo 'active';} else{ echo '';} ?>"><a href="profile.php?page=profile"><i class="fa fa-user"></i> Profile</a></li>
            <li class="list-group-item <?php if ($page == 'setting') {echo 'active';} else{ echo '';} ?>"><a href="profile.php?page=setting"><i class="fa fa-gear"></i> Setting Account</a></li>
            <li class="list-group-item <?php if ($page == 'history') {echo 'active';} else{ echo '';} ?>"><a href="profile.php?page=history"><i class="fa fa-cc-visa"></i> History Transaksi</a></li>
            <li class="list-group-item "><a href="php/control/logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
          </ul>
        </div>

        <?php            
        if ($page == 'profile') { ?>
        <div class="col-md-8">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="text-center">
                <img src="img/member/<?php if ($user['foto'] == '') {echo 'user.jpg';} else{echo $user['foto'];} ?>" class="img-circle" width="200" height="200">
              </div>
              <br>
              <table class="table text-center">
                <tr>
                  <td class="text-left">Nama</td>
                  <td><b><?php  echo $user['nama']; ?></b></td>
                </tr>
                <tr>
                  <td class="text-left">Username</td>
                  <td><b><?php  echo $user['username']; ?></b></td>
                </tr>
                <tr>
                  <td class="text-left">Alamat</td>
                  <td>
                    <p class="text-left">
                      <?php  echo $user['alamat']; ?>. 
                    </p>
                  </td>
                </tr>
                <tr>
                  <td class="text-left">Phone</td>
                  <td><b><?php  echo $user['phone']; ?></b></td>
                </tr>
                <tr>
                  <td class="text-left">Email</td>
                  <td><b><?php  echo $user['email']; ?></b></td>
                </tr>
                <tr>
                  <td class="text-left">Password</td>
                  <td><b><?php  echo $user['password']; ?></b></td>
                </tr>
              </table>
            </div>              
          </div>
        </div>
        <?php     
      }
      elseif ($page == 'setting') { ?>
      <div class="col-md-8" style="margin-bottom: 23px;">
        <div class="panel panel-default">        
          <div class="panel-body text-center"> 
            <?php 
            error_reporting(0);
            if ($_GET['pesan'] == 'success') { ?>
            <div class="alert alert-success" id="alert">
              <strong>Profile anda berhasil di update</strong>
            </div>
            <?php 
          }
          elseif ($_GET['pesan'] == 'error') { ?>
          <div class="alert alert-danger" id="alert">
            <strong>Gagal untuk mengupdate profile anda</strong>
          </div>
          <?php
        }
        ?>             
        <form action="php/control/update.php?id=<?php echo $user['id']; ?>" method="POST" enctype="multipart/form-data">
          <div class="form-group row">
            <label class="col-xs-2 col-form-label">Nama</label>
            <div class="col-xs-6">
              <input class="form-control" type="text" name="nama" value="<?php  echo $user['nama']; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-xs-2 col-form-label">Username</label>
            <div class="col-xs-6">
              <input class="form-control" type="text" name="username" value="<?php  echo $user['username']; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-xs-2 col-form-label">Alamat</label>
            <div class="col-xs-6">
              <textarea class="form-control" name="alamat" placeholder="Alamat" value="<?php  echo $user['alamat']; ?>"></textarea> 
            </div>
          </div>
          <div class="form-group row">
            <label class="col-xs-2 col-form-label">Phone</label>
            <div class="col-xs-6">
              <input class="form-control" type="text" name="phone" value="<?php  echo $user['phone']; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-xs-2 col-form-label">E-mail</label>
            <div class="col-xs-6">
              <input class="form-control" type="text" name="email" value="<?php  echo $user['email']; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-xs-2 col-form-label">Password</label>
            <div class="col-xs-6">
              <input class="form-control" type="password" name="password" value="<?php  echo $user['password']; ?>">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-xs-2 col-form-label">Foto Profile</label>
            <div class="col-xs-6">
              <input class="form-control" type="file" name="foto" value="<?php  echo $user['foto']; ?>">
            </div>
          </div>
          <div class="form-group row">              
            <label class="col-xs-2 col-form-label"></label>
            <div class="col-xs-6">
              <button class="btn-primary" style="padding: 10px;" name="update">Update</button>
            </div>
          </div>
        </form>        
      </div>              
    </div>
  </div>
  <?php
}

elseif ($page == 'history') { ?>
<div class="col-md-8" style="margin-bottom: 255px;">
   <h4><b>Histrory Transaksi</b></h4>
   <br>
  <div class="panel panel-default">
    <div class="panel-body">
      <?php 
      error_reporting(0);
      if ($_GET['bukti'] == 'success') { ?>
      <div class="alert alert-success" id="alert">
        <strong>Bukti Pembayaran Berhasil di upload</strong>
      </div>
      <?php 
    }
    elseif ($_GET['bukti'] == 'error') { ?>
    <div class="alert alert-danger" id="alert">
      <strong>Gagal untuk Upload Bukti Pembayaran</strong>
    </div>
    <?php
  }
  ?>
  <table class="table table-hover text-center">
    <tr>
    <td class="text-center"><b>No</b></td>
    <td class="text-center"><b>Gambar</b></td>
    <td class="text-center"><b>Nama Barang</b></td>
      <td class="text-center"><b>Quantity</b></td>
      <td class="text-center"><b>Harga</b></td>
      <td class="text-center"><b>Status</b></td>
      <td class="text-center"><b>Tanggal</b></td>
      <td class="text-center"><b>Action</b></td>
    </tr>
    <?php 
    $query = mysql_query("SELECT pemesanan.id,barang.foto,barang.nama_barang,pemesanan.status,pemesanan.tanggal,pemesanan.bukti,pemesanan.harga AS total,pemesanan.qty AS quantity FROM pemesanan INNER JOIN barang ON pemesanan.id_barang=barang.id WHERE pemesanan.id_user='$id' ORDER BY pemesanan.status ASC");
    $cek = mysql_num_rows($query);
    if ($cek > 0) { 
      $no = 0;
      while ($array = mysql_fetch_array($query)) {
        $no = $no+1;
        ?>
        <tr>
          <td><?php echo $no; ?></td>
          <td><img src="img/produk/<?php echo $array['foto']; ?>" class="img-responsive" style="height:100px; border-radius: 5px;"></td>
          <td><?php echo $array['nama_barang']; ?></td>
          <td><?php echo $array['total']; ?></td>
          <td><?php echo $array['quantity']; ?></td>
          <td><?php if($array['status'] == '0'){ ?>
            <span class="btn btn-warning"><b>Pending</b></span>
            <?php
          } else{ ?>
          <span class="btn btn-success"><b>Confirm</b></span>
          <?php
        } ?></td>
        <td><?php echo $array['tanggal']; ?></td>
        <td>
          <?php if (empty($array['bukti'])) { ?>
          <a href="profile.php?page=upload-permbayaran&&kode=<?php echo $array['id']; ?>" class="btn btn-danger" >Check-Out</a>
          <?php
        } 
        elseif(!empty($array['bukti'])){ ?>
        <a class="btn btn-success" ><i class="fa fa-check"></i> Done</a>
        <?php
      }
      ?>        
    </td>
  </tr>
  <?php
}
}
else{ ?>
<tr>
  <td colspan="8" style="background: #E74C3C; color: white;">DATA KOSONG</td>
</tr>
<?php
}
?>

</table>
</div>
<?php
}
elseif ($page == 'upload-permbayaran') { ?>
<?php $id = $_GET['kode'];  ?>
<div class="panel-heading">
  <h4><b>Upload Bukti Pemabayaran</b></h4>
</div>      
<div class="panel-body">
  <form action="php/control/upload.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="file" name="bukti">
    <br>
    <a href="profile.php?page=history-transaksi" class="btn btn-warning">Back</a>
    <input type="submit" class="btn btn-primary" name="upload" value="Upload">
  </form>
</div>
</div>
</div>
</div>
<?php
} 
?>
</section>
<?php include 'php/footer.php' ?>

<script type="text/javascript">
  $("#alert").fadeTo(2000, 500).slideUp(500, function(){
    $("#alert").slideUp(500);
  });   
</script>
</body>
</html>
