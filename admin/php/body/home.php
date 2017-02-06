<?php
include 'php/control/koneksi.php';                     
?>
<style type="text/css">
 .count{
  font-family: 'Orbitron', sans-serif;
  font-size: 40px;
  color: #adadad;
}
.box-count{
  /*background-color: #f7dc6f; */
  padding: 30px; 
 /* padding-left: 10px; 
  padding-top: 35px; */
/*  width: 150px; 
  height:150px; */
  border-radius: 100%; 
  margin: auto;
}
.bg-biru{background:#2c3e50 ; color: #fff;}
.bg-merah{background:#e74c3c; color: #fff;}
.bg-hijau{background:#1abc9c; color: #fff;}
.bg-kuning{background:#f4d03f; color: #fff;}      
/*highcharts-button highcharts-contextbutton highcharts-button-normal*/
.highcharts-button{
  display: none;
}
.highcharts-credits{
 display: none; 
}
</style>
<!-- Main row -->
<div class="row">
  <!-- Left col -->
  <h3 style="padding-left: 20px; padding-bottom: 20px;"><b>Laporan Penjualan Bulan Ini</b></h3>

  <!-- MENS -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <?php 
    $men = mysql_query("SELECT barang.kategori AS Kategori, SUM(pemesanan.qty) AS Barang_Pesan , SUM(pemesanan.harga) AS total_harga FROM `pemesanan` INNER JOIN barang ON pemesanan.id_barang = barang.id WHERE pemesanan.status = '1' AND month(pemesanan.tanggal) = '11' AND barang.kategori = 'men'");
    $cek_men = mysql_fetch_array($men);
    ?>
    <div class="small-box bg-biru">
      <div class="inner">
        <h3><span class="count" style="color: #fff;"><?php echo $cek_men['Barang_Pesan']; ?></span></h3>
        <p>Barang Keluar</p>
      </div>
      <div class="icon">
        <i class="fa fa-male"></i>
      </div>
      <span class="small-box-footer"><h4 style="padding: 5px;"><b>MEN</b></h4></span>
    </div>
  </div><!-- ./col -->
  <!-- MENS -->

  <!-- WOMENS -->
  <div class="col-lg-3 col-xs-6">
    <?php 
    $women = mysql_query("SELECT barang.kategori AS Kategori, SUM(pemesanan.qty) AS Barang_Pesan , SUM(pemesanan.harga) AS total_harga FROM `pemesanan` INNER JOIN barang ON pemesanan.id_barang = barang.id WHERE pemesanan.status = '1' AND month(pemesanan.tanggal) = '11' AND barang.kategori = 'women'");
    $cek_women = mysql_fetch_array($women);
    ?>
    <!-- small box -->
    <div class="small-box bg-kuning">
      <div class="inner">
        <h3><span class="count" style="color: #fff;"><?php echo $cek_women['Barang_Pesan']; ?></span></h3>
        <p>Barang Keluar</p>
      </div>
      <div class="icon">
        <i class="fa fa-female"></i>
      </div>
      <span class="small-box-footer"><h4 style="padding: 5px;"><b>WOMEN</b></h4></span>
    </div>
  </div><!-- ./col -->
  <!-- WOMENS -->

  <!-- CASUAL -->
  <div class="col-lg-3 col-xs-6">
    <?php 
    $casual = mysql_query("SELECT barang.kategori AS Kategori, SUM(pemesanan.qty) AS Barang_Pesan , SUM(pemesanan.harga) AS total_harga FROM `pemesanan` INNER JOIN barang ON pemesanan.id_barang = barang.id WHERE pemesanan.status = '1' AND month(pemesanan.tanggal) = '11' AND barang.kategori = 'casual'");
    $cek_casual = mysql_fetch_array($casual);
    ?>
    <!-- small box -->
    <div class="small-box bg-merah">
      <div class="inner">
        <h3><span class="count" style="color: #fff;"><?php echo $cek_casual['Barang_Pesan']; ?></span></h3>
        <p>Barang Keluar</p>
      </div>
      <div class="icon">
        <i class="fa fa-bicycle"></i>
      </div>
      <span class="small-box-footer"><h4 style="padding: 5px;"><b>CASUAL</b></h4></span>
    </div>
  </div><!-- ./col -->
  <!-- CASUAL -->

  <!-- SPORT -->
  <div class="col-lg-3 col-xs-6">
    <!-- small box -->
    <?php 
    $sport = mysql_query("SELECT barang.kategori AS Kategori, SUM(pemesanan.qty) AS Barang_Pesan , SUM(pemesanan.harga) AS total_harga FROM `pemesanan` INNER JOIN barang ON pemesanan.id_barang = barang.id WHERE pemesanan.status = '1' AND month(pemesanan.tanggal) = '11' AND barang.kategori = 'sport'");
    $cek_sport = mysql_fetch_array($sport);
    ?>
    <div class="small-box bg-hijau">
      <div class="inner">
        <h3><span class="count" style="color: #fff;"><?php echo $cek_sport['Barang_Pesan']; ?></span></h3>
        <p>Barang Keluar</p>
      </div>
      <div class="icon">
        <i class="fa fa-soccer-ball-o"></i>
      </div>
      <span class="small-box-footer"><h4 style="padding: 5px;"><b>SPORT</b></h4></span>
    </div>
  </div><!-- ./col -->
  <!-- SPORT -->

  <div class="col-md-12">
    <!-- PRODUCT LIST -->
    <div class="box box-primary ">
      <div class="box-header with-border text-center">
        <h3 class="box-title"><b>Laporan Penjualan Keseluruhan</b></h3>
      </div><!-- /.box-header -->
      <?php           
      $bulan = date("m");
      $barang = mysql_query("SELECT SUM(total) AS total FROM barang WHERE month(tanggal)='$bulan'");            
      $penjualan = mysql_query("SELECT SUM(harga) AS total FROM pemesanan WHERE month(tanggal)='$bulan' AND status = 1");
      $qty = mysql_query("SELECT SUM(qty) AS total FROM pemesanan WHERE month(tanggal)='$bulan' AND status = 1");
      $cek_barang = mysql_fetch_array($barang);
      $cek_penjualan = mysql_fetch_array($penjualan);
      $cek_qty = mysql_fetch_array($qty);
      ?>
      <div class="box-body">
        <div class="col-md-12">
         <div class="box-count text-center">
          <span class="count"><?php echo $cek_penjualan['total']; ?></span>              
        </div>
        <h4 class="text-center"><b>Total Pendapatan</b></h4>
      </div>
      <div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto; clear: both;"></div>
    </div><!-- /.box-body -->
  </div><!-- /.box -->     
</div><!-- /.col -->
</div><!-- /.row -->



<script type="text/javascript">
  $('.count').each(function () {
    $(this).prop('Counter',0).animate({
      Counter: $(this).text()
    }, {
      duration: 2000,
      easing: 'swing',
      step: function (now) {
        $(this).text(Math.ceil(now));
      }
    });
  });
</script>
<script type="text/javascript">
  $(function () {
    Highcharts.chart('container', {
      chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
      },
      title: {
        text: ''
      },
      plotOptions: {
        pie: {
          allowPointSelect: true,
          cursor: 'pointer',
          dataLabels: {
            enabled: true,
            format: '<b>{point.name}</b>: {point.y}',
            style: {
              color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
            }
          }
        }
      },
      series: [{
        name: 'Jumlah',
        colorByPoint: true,
        data: [{
          name: 'Total Barang',
          y: <?php echo $cek_barang['total']; ?>
        }, {
          name: 'Total Barang Keluar',
          y: <?php echo $cek_qty['total']; ?>
        }]
      }]
    });
  });
</script>