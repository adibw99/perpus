<html>
<head>
    <title>Data Disetujui</title>
    <link rel="stylesheet" type="text/css" href="location:style.css">
</head>


<body>
<div class="bingkai">
  <div class="header">
   <h1>Data Persetujuan</h1>

   
  
  </div>
  
            
          
           

 
 <table border="1">
  <tr>
            <th>ID SISWA</th>
            <th>NIS Siswa</th>
            <th>NAMA SISWA</th>
            <th>KELAS</th>
            
            <th>ID BUKU</th>
            <th>JUDUL BUKU</th>
            <th>DISETUJUI</th>
            <th>DETAIL</th>
            
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
                        <td><?php echo "&#32 &radic;";?></td>
                      </tr>
                      
                    <?php

                    }
                
                ?>
                </table>
                
                <h2>
				<form method="POST" action="/./perpustakaan/peminjaman/index.php">
					<button type="submit" nama = "disetujui"class="btn btn-info btn-block">Printed</button>					
					</form>
					</h2>
            </body>
            </html>