<?php

include "koneksi.php";

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['add'])){
	
	// ambil data dari formulir
	$Id_pasien = $_POST['Id_pasien'];
	$nm_pasien = $_POST['nm_pasien'];
	$alamat = $_POST['alamat'];
	$penyakit = $_POST['penyakit'];
	$tgl_masuk = $_POST['tgl_masuk'];
	
	// buat query
	$sql = "INSERT INTO pasien( Id_pasien, nm_pasien, alamat, penyakit, tgl_masuk) VALUE ('Id_pasien','$nm_pasien', '$alamat', '$penyakit', '$tgl_masuk')";

	$query = mysqli_query($db, $sql);
	
	// apakah query simpan berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: index.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: index.php?status=gagal');
	}
	
	
} else {
	echo("Akses dilarang...");
}

?>
