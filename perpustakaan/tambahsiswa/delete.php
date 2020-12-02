<?php 

$id_siswa = (int) $_GET['id'];

//include(dbconnect.php);

	include('dbkoneksi.php');
	$query = "DELETE FROM siswa WHERE siswa.id ='{$id_siswa}' ";
	
	if (mysqli_query($conn , $query)) {
		# redirect ke index.php
		header("location:index.php");
	}
	else{
		echo "ERROR, data gagal dihapus". mysqli_error($conn);
	}
	
	mysqli_close($conn);



?>
