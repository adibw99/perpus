<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
</head>
<style>
div.a {
	text-align: center;
}
</style>
<body>
<div class ="container bg-info" >
<div class="row">
<div class="col-sm">
<div class="a">

    <form role="form"  method="POST">
        <fieldset>
        <legend>Data Mahasiswa</legend>
        <p>
            <label > NIS &nbsp; : </label>
            
            <input type="int" name="nis" placeholder="Enter NIS..." />
            
        </p>
        <p>
            <label>Nama:</label>
            <input type="text" name="nama" placeholder="your name..." />
        </p>
        <p> 
            <label>Kelas :</label>
            <input type="text" name="kelas" placeholder="your class..." />
        </p>
        <p>
            <input type="submit" name="proses" value="Send" class="btn btn-primary "/>
		
        </p>
<a href="logout.php">Logout</a>
        </fieldset>
    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</div>
<?php
	//tambahkan dbconnect
	include('dbkoneksi.php');

	//query
	$query = "SELECT * FROM siswa";

	$result = mysqli_query($conn , $query);

	?>
    <div class="b">
			<div class="col-sm-8">
				<h3>Tabel Siswa</h3>
				<table class="table table-striped table-hover dtabel">
					<thead>
						<tr>
							<th>No</th>
							<th>ID</th>
							<th>NIS</th>
							<th>Nama Siswa</th>
							<th>Kelas</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody> 
						
						<?php
							$no = 1;  
							while ($row = mysqli_fetch_assoc($result)) {
						?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['nis']; ?></td>
							<td><?php echo $row['nama']; ?></td>
							<td><?php echo $row['kelas']; ?></td>
							<td>
								<a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger" role="button">Delete</a>
							</td>
						</tr>

						<?php
							}
							mysqli_close($conn); 
						?>
					</tbody>
				</table>
			</div>
			
		</div>
		
	</div>
</div>
</div>
<script>
	$(document).ready(function() {
		$('.dtabel').DataTable();
	} );
	</script>
</div>
</body>

</html>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
mysqli_query($koneksi, "insert into siswa set  
nis = '$_POST[nis]',
nama = '$_POST[nama]',
kelas = '$_POST[kelas]'");

//direct link

}

?>