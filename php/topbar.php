<?php 
include 'admin/php/control/koneksi.php';
error_reporting(0);
$id = $_SESSION['id'];
?>
        	<div class="container">
        		<div class="navbar-header">
        			<!-- responsive nav button -->
        			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        				<span class="sr-only">Toggle navigation</span>
        				<i class="fa fa-bars fa-2x"></i>
        			</button>
        			<!-- /responsive nav button -->

        			<!-- logo -->
        			<!-- <a class="navbar-brand" href="#body">
        				<h1 id="logo">
        					<img src="img/logo.png" alt="Brandi">
        				</h1>
        			</a> -->
        			<!-- /logo -->
        		</div>

        		<!-- main nav -->
        		<nav class="collapse navbar-collapse navbar-right">
        			<ul class="nav navbar-nav">
        				<li class="current"><a href="index.php"><b>Home</b></a></li>
        				<li><a href="produk.php"><b>Product</b></a></li>
        				<li><a href="about.php"><b>About Us</b></a></li>        				\
                                        <li><a href="pembayaran.php"><b>Cara Pembayaran</b></a></li>
                                        <?php 
                                        if ($_SESSION['id']) { ?>
                                        <li><a href="profile.php?page=profile"><b>My Profile</b></a></li>
                                        <li><a href="cart.php"><i class="fa fa-shopping-cart fa-2x"></i></a></li>
                                        <?php
                                }
                                else{ ?>
                                <li><a href="login.php"><b>Login</b></a></li>
                                <?php
                        }
                        ?>                              
                </ul>
        </nav>
        <!-- /main nav -->

</div>