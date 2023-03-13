<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style1.css">
  <style>
 
    table {
          border-collapse: collapse;
          width: 80%;
          background-color: #D0F0C0;
          margin-top:100px;
  

  
        }

        th, td {
          text-align: center;
          padding: 8px;
  
  
        }
            tr:nth-child(even) {background-color: #FFFF;}
    </style>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>REGULER</title>
</head>
<body>
  <div class="atas">
  <img src="logo.png" width="120px" height="145px">
  <h3> REKAYASA PERANGKAT LUNAK</3>
  <h4> SMKN 4 PADALARANG</h4>
  <div>
    <ul>
      <li><a href="beranda.php"  style="text-decoration: none;">Beranda</a></li>
      <li ><a href="dataguru.php" style="text-decoration: none;">Data Guru</li>
      <li class="dropdown">
                <a href="#" class="dropbtn" style="text-decoration: none;">Data Siswa</a>
                <div class="dropdown-content">
                    <a href="datasiswam.php" style="text-decoration: none;">X</a>
                    <a href="datasiswam11.php" style="text-decoration: none;">XI</a>
                    <a href="datasiswam12.php" style="text-decoration: none;">XII</a>
                </div>   
      <li><a href="alumni.php" style="text-decoration: none;">Alumni</a></li>
      <li><a href="galery.php" style="text-decoration: none;">Galery</a></li>
        <li><a href="partner.php" style="text-decoration: none;">Partner</a></li>
    </ul>
    <h2>DATA ALUMNI RPL</h2>


<table border="2" align="center">
    <tr align="center">
        <th>NO</th>
      <th>NAMA</th>
      <th>PERIODE</th>
      <th>JENIS KELAMIN</th>
      <th colspan="2">ACTION</th>
     
    </tr>

    <?php
    include "koneksi.php";
    $no=1;
    $ambil = mysqli_query($koneksi,"select*from alumni ");
    while ($tampil = mysqli_fetch_array($ambil)){
        echo"
        <tr>
        <td>$no</td>
            
            <td>$tampil[nama]</td>
            <td>$tampil[periode]</td>
            <td>$tampil[jenis_kelamin]</td>
            <td><a style=color:black;font-size:20px;text-decoration:none;font-family:Arial;  href='?kode=$tampil[id]'>Hapus</a></td>
            <td><a style=color:black;font-size:20px;text-decoration:none;font-family:Arial; href='editalumni.php?kode=$tampil[id]'>Ubah</a></td>
           
        </tr>";  
        $no++;
        }
    ?>
</table>
<li><button style="margin-top:10;"><a href="inputalumni.php" style="text-decoration: none;">TAMBAH DATA</a></button></li>
<?php
            if(isset($_GET['kode'])){
                mysqli_query($koneksi, "delete from alumni where id ='$_GET[kode]'");

                echo "Data Telah Terhapus";
                echo "<meta http-equiv=refresh content=2;URL='alumni.php'>";
            }
            ?>
</body>
</html>
</body>
</html>