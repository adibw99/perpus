<?php
//add dbconnect

include('dbconnect.php');

$judul = $_POST['judul_bk'];
$pengarang = $_POST['pengarang_bk'];
$terbitan = $_POST['terbitan_bk'];

//query

$query =  "INSERT INTO buku(judul , pengarang , terbitan ) VALUES('$judul' , '$pengarang' , '$terbitan' )";

if (mysqli_query($conn , $query)) {
	# code redicet setelah insert ke index
	header("location:index.php");
}
else{
	echo "ERROR, tidak berhasil". mysqli_error($conn);
}

mysqli_close($conn);
?>