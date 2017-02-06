<?php 

include 'php/control/koneksi.php';
$page = $_GET['page'];

if ($page == 'member') {
	?>

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<h3 class="panel-title"><b>Member</b></h3>
					<br><br>
					<table class="table table-bordered" style="text-align:center;">
						<tr>
							<th style="text-align:center;">Nama</th>
							<th style="text-align:center;">Username</th>
							<th style="text-align:center;">Alamat</th>
							<th style="text-align:center;">Phone</th>
							<th style="text-align:center;">Email</th>
							<th style="text-align:center;">Password</th>
						</tr>

						<!-- DATA KOSONG -->
						<?php 
						$show = mysql_query("SELECT * FROM member");
						$row = mysql_num_rows($show);
						if ($row == 0) {
							?>						
							<tr>
								<td colspan="6" class="bg-red"><b>DATA KOSONG</b></td>
							</tr>
							<?php } ?>
							<!-- DATA KOSONG -->

							<!-- SHOW DATA -->

							<?php while ($cek = mysql_fetch_array($show)) {  
								?>
								<tr>
									<td><?php echo $cek['nama']; ?></td>
									<td><?php echo $cek['username']; ?></td>
									<td><?php echo $cek['alamat']; ?></td>
									<td><?php echo $cek['phone']; ?></td>
									<td><?php echo $cek['email']; ?></td>
									<td><?php echo $cek['password']; ?></td>									
								</tr>
								<?php } ?>
								<!-- SHOW DATA -->
							</table>		
						</div>  
					</div>
				</div>
			</div>
			<?php
		}
		?>


