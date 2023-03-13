<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style1.css">
  <style>
 
        th, td {
          text-align: center;
          padding: 8px;
  
  
        }
            tr:nth-child(even) {background-color: #FFFF;}
    </style>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INDUSTRI</title>
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
                    <a href="datasiswaorm.php" style="text-decoration: none;">X</a>
                    <a href="datasiswaorm11.php" style="text-decoration: none;">XI</a>
                    <a href="datasiswaorm12.php" style="text-decoration: none;">XII</a>
                </div>   
      <li><a href="alumni.php" style="text-decoration: none;">Alumni</a></li>
      <li><a href="galery.php" style="text-decoration: none;">Galery</a></li>
        <li><a href="partner.php" style="text-decoration: none;">Partner</a></li>
    </ul>
    <h2>DATA SISWA XI ORACLE</h2>

    <button><a href="datasiswam11.php" style="text-decoration: none">REGULER</a></button> 

<table border="2" align="center">
    <tr align="center">
        <th>NO</th>
      <th>NISN</th>
      <th>NAMA</th>
      <th>KELAS</th>
      <th>JENIS KELAMIN</th>
      <th colspan="2">ACTION</th>
     
    </tr>

    <?php
    include "koneksi.php";
    $no=1;
    $ambil = mysqli_query($koneksi,"select*from vdata4 ");
    while ($tampil = mysqli_fetch_array($ambil)){
        echo"
        <tr>
        <td>$no</td>
            <td>$tampil[nisn]</td>
            <td>$tampil[nama]</td>
            <td>$tampil[kelas]</td>
            <td>$tampil[jenis_kelamin]</td>
            <td><a style=color:black;font-size:20px;text-decoration:none;font-family:Arial; href='?kode=$tampil[nisn]'>hapus</a></td>
            <td><a style=color:black;font-size:20px;text-decoration:none;font-family:Arial; href='editsiswaorm11.php?kode=$tampil[nisn]'>ubah</a></td>
           
        </tr>";  
        $no++;
        }
    ?>
</table>
<?php
            if(isset($_GET['kode'])){
                mysqli_query($koneksi, "delete from siswa5 where nisn ='$_GET[kode]'");

                echo "<center>DATA TELAH TERHAPUS </center>"; 
                echo "<meta http-equiv=refresh content=1;URL='datasiswaorm11.php'>";
            }
            ?>
            <li><button style="margin-top:10;"><a href="inputsiswa12.php" style="text-decoration: none;">TAMBAH DATA</a></button></li>
</body>
</html>
</body>
</html>