<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "rumah_sakit";

$db = mysqli_connect($server, $user, $password, $nama_database);

if ( $db ) {
	echo "Sukses terhubung dengan database ";

}


?>