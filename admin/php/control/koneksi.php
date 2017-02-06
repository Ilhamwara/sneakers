<?php 

	$username 	= 'u323390900_root';
	$server 	= 'mysql.idhostinger.com';
	$pass		= 'nisa1234';
	$db			= 'u323390900_nisa';

	$conn = mysql_connect($server,$username,$pass);
	$conn_db = mysql_select_db($db);
 ?>