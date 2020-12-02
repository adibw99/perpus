<?php
//include('dbconnected.php');
include('dbconnect.php');

$id = $_GET['id_bk'];
$judul = $_GET['judul_bk'];
$pengarang = $_GET['pengarang_bk'];
$terbitan = $_GET['terbitan_bk'];
//query update
$query = "UPDATE buku SET judul='$judul' , pengarang='$pengarang' , terbitan='$terbitan' WHERE id_buku='$id' ";

if (mysqli_query($conn, $query)) {
	# credirect ke page index
	header("location:index.php");
	
}
else{
	echo "ERROR, data gagal diupdate". mysqli_error($conn);
}

mysqli_close($conn);
?>