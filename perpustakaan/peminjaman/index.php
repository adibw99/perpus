<html>
<head>
    <title>Data Peminjaman</title>
    <link rel="stylesheet" type="text/css" href="location:style.css">
</head>


<body>
<div class="bingkai">
  <div class="header">
   <h1>Data Pengesahan Peminjaman</h1>

   <table border="2">
  <tr>
  </div><th>PENJAGA PERPUSTAKAAN</th>
  <br>
  </tr>
            <?php include_once("koneksi.php");
           $hasil1 = mysqli_query ($koneksi,"SELECT siswa.id,penjaga.id,penjaga.nama_pj FROM siswa INNER JOIN penjaga ON siswa.id=penjaga.id");
           while ($baris = mysqli_fetch_assoc($hasil1)){
            ?>
          
            <td><?php echo $baris['nama_pj']  ; ?></td>
            


            <?php   
?>

 
 <table border="1">
  <tr>
  <th>ID SISWA</th>
            <th>NIS Siswa</th>
            <th>NAMA SISWA</th>
            <th>KELAS</th>
            
            <th>ID BUKU</th>
            <th>JUDUL BUKU</th>
            <th>PERSETUJUAN</th>
            
  </tr>
  
           <?php include_once("koneksi.php");
          
            $hasil = mysqli_query ($koneksi, "SELECT siswa.id, siswa.nis ,siswa.nama , siswa.kelas ,buku.id_buku, buku.judul ,penjaga.id,penjaga.nama_pj FROM siswa INNER JOIN buku ON siswa.id = buku.id_buku INNER JOIN penjaga ON siswa.id = penjaga.id");
                        while ($baris = mysqli_fetch_assoc($hasil))
                  {
                      ?>
                      <tr>
                      <td><?php echo $baris['id']; ?></td>
                        <td><?php echo $baris['nis']; ?></td>
                        <td><?php echo $baris['nama']; ?></td>
                        <td><?php echo $baris['kelas']; ?></td>
                        <td><?php echo $baris['id_buku']; ?></td>
                        <td><?php echo $baris['judul']; ?></td>
                        <td><?php echo $baris['nama_pj']; ?></td>
                        
                      </tr>
                      
                    <?php

                    }
                }
                ?>
                </table>
                
                <h2>
				<form method="POST" action="/./perpustakaan/peminjaman/disetujui.php">
					<button type="submit" class="btn btn-info btn-block">Disetujui</button>					
					</form>
					</h2>
          <a href="logout.php">Logout</a>
            </body>
            </html>