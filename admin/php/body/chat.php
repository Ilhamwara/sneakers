<?php 

include 'php/control/koneksi.php';
$page = $_GET['page'];

if ($page == 'chat') {
	?>

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
				<iframe src="https://dashboard.tawk.to/login" width="100%" height="600"></iframe>		
				</div>  
			</div>
		</div>
	</div>
	<?php
}
?>


