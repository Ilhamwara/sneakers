      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/nisa.jpg" class="img-circle" style="width:50px; height:50px;">
            </div>
            <div class="pull-left info">
              <p>Admin</p>
              <a><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div><br><br>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li>
              <a href="../index.php">
                <i class="fa fa-desktop"></i> <span>View Website</span></a>
              </li>
              <?php 
              $page = $_GET['page'];

              if ($page == 'dashboard') {
                ?>

                <li class="active">
                  <a href="main.php?page=dashboard"><i class="fa fa-dashboard"></i><span>Dashborad</span></a>
                </li>
                <?php 
              }
              else{
               ?>
               <li>
                <a href="main.php?page=dashboard"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
              </li>
              <?php 
            }

            if (($page == 'admin-control') || ($page == 'tambah-admin') || ($page == 'update-admin')) {
              ?>

              <li class="active">
                <a href="main.php?page=admin-control"><i class="fa fa-user"></i><span>Admin</span></a>
              </li>
              <?php 
            }
            else{
             ?>
             <li>
              <a href="main.php?page=admin-control"><i class="fa fa-user"></i><span>Admin</span></a>
            </li>
            <?php 
          }

          if (($page == 'chat')) {
            ?>

            <li class="active">
              <a href="main.php?page=chat"><i class="fa fa-comment-o"></i><span>Live Chat</span></a>
            </li>
            <?php 
          }
          else{
           ?>
           <li>
            <a href="main.php?page=chat"><i class="fa fa-comment-o"></i><span>Live Chat</span></a>
          </li>
          <?php 
        }


        if (($page == 'member')) {
          ?>

          <li class="active">
            <a href="main.php?page=member"><i class="fa fa-group"></i><span>Member</span></a>
          </li>
          <?php 
        }
        else{
         ?>
         <li>
          <a href="main.php?page=member"><i class="fa fa-group"></i><span>Member</span></a>
        </li>
        <?php 
      }

      if (($page == 'pemesanan') || ($page == 'update-pemesanan') || ($page == 'form-pemesanan')) { ?>

      <li class="active">
        <a href="main.php?page=pemesanan"><i class="fa fa-clipboard"></i> <span>Pemesanan</span></a>
      </li>

      <?php }

      else{ 
        ?>

        <li>
          <a href="main.php?page=pemesanan"><i class="fa fa-clipboard"></i> <span>Pemesanan</span></a>
        </li>

        <?php
      }
      if ($page == 'transaksi') { ?>

      <li class="active">
        <a href="main.php?page=transaksi"><i class="fa fa-wpforms"></i> <span>Transaksi</span></a>
      </li>

      <?php
    }
    else{ ?>

    <li>
      <a href="main.php?page=transaksi"><i class="fa fa-wpforms"></i> <span>Transaksi</span></a>
    </li>

    <?php
  }


  if ($page == 'stok-barang') { ?>

  <li class="active">
    <a href="main.php?page=stok-barang"><i class="fa fa-archive"></i> <span>Stock Barang</span></a>
  </li>

  <?php
}
else{ ?>

<li>
  <a href="main.php?page=stok-barang"><i class="fa fa-archive"></i> <span>Stock Barang</span></a>
</li>

<?php
}

if ($page == 'oltp') { ?>

<li class="active">
  <a href="main.php?page=oltp"><i class="fa fa-line-chart"></i> <span>OLTP</span></a>
</li>

<?php
}
else{ ?>

<li>
  <a href="main.php?page=oltp"><i class="fa fa-line-chart"></i> <span>OLTP</span></a>
</li>

<?php
}
?>
<li>
  <a href="php/control/logout.php">
    <i class="fa fa-sign-out"></i><span>Log out</span>
  </a>
</li>
</ul>
</section>
<!-- /.sidebar -->
</aside>