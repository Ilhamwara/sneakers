<?php 
include '../../admin/php/control/koneksi.php';

// $page = $_GET['page'];
if (isset($_POST['update'])) {
	$id = $_GET['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$folder = "../../img/member/";
	$simpan_gambar = $folder.basename($_FILES['foto']['name']);

	if((empty($_FILES['foto']['name']))){
		$query = mysql_query("UPDATE member SET nama='$nama',alamat='$alamat',phone='$phone',email='$email',username='$username',password='$password' WHERE id='$id'");

		if ($query) {
			header("location:../../profile.php?page=setting&&pesan=success");
		}
		else{
			header("location:../../profile.php?page=setting&&pesan=error");	
		}
	}
	elseif((!empty($_FILES['foto']['name']))){
		$gambar		= $_FILES['foto']['name'];
		$type_gambar	= $_FILES['foto']['type'];

		if (($type_gambar == "image/jpeg" || $type_gambar == "image/jpg" || $type_gambar == "image/png" || $type_gambar == "")){
			$query = mysql_query("UPDATE member SET nama='$nama',alamat='$alamat',phone='$phone',email='$email',username='$username',password='$password',foto='$gambar'");

			if ($query){
				move_uploaded_file($_FILES['foto']['tmp_name'],$simpan_gambar);
				header("location:../../profile.php?page=setting-profile&&pesan=success");
			}
		}
		else{
			header("location:../../profile.php?page=setting-profile&&pesan=error");
		}
	}
	else{
		header("location:../../profile.php?page=setting-profile&&pesan=error");
	}
}
else{
	header("location:../../profile.php?page=setting-profile&&pesan=error");
}

?>