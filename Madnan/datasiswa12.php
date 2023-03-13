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
  <title>REGULER</title>
</head>
<body>
  <div class="atas">
  <img src="logo.png" width="120px" height="145px">
  <h3> REKAYASA PERANGKAT LUNAK</3>
  <h4> SMKN 4 PADALARANG</h4>
  <div>
    <ul>
      <li><a href="index.php"  style="text-decoration: none;">Beranda</a></li>
      <li ><a href="dataguru.php" style="text-decoration: none;">Data Guru</li>
      <li class="dropdown">
                <a href="#" class="dropbtn" style="text-decoration: none;">Data Siswa</a>
                <div class="dropdown-content">
                    <a href="datasiswa.php" style="text-decoration: none;">X</a>
                    <a href="datasiswa11.php" style="text-decoration: none;">XI</a>
                    <a href="datasiswa12.php" style="text-decoration: none;">XII</a>
                </div>   
      <li><a href="alumni.php" style="text-decoration: none;">Alumni</a></li>
      <li><a href="galery.php" style="text-decoration: none;">Galery</a></li>
        <li><a href="partner.php" style="text-decoration: none;">Partner</a></li>
    </ul>
    <h2>DATA SISWA XII RPL</h2>

    <button><a href="datasiswaor12.php" style="text-decoration: none">INDUSTRI</a></button> 


<table border="2" align="center">
    <tr align="center">
        <th>NO</th>
      <th>NISN</th>
      <th>NAMA</th>
      <th>KELAS</th>
      <th>JENIS KELAMIN</th>
     
    </tr>

    <?php
    include "koneksi.php";
    $no=1;
    $ambil = mysqli_query($koneksi,"select*from vdata2 ");
    while ($tampil = mysqli_fetch_array($ambil)){
        echo"
        <tr>
        <td>$no</td>
            <td>$tampil[nisn]</td>
            <td>$tampil[nama]</td>
            <td>$tampil[kelas]</td>
            <td>$tampil[jenis_kelamin]</td>
           
        </tr>";  
        $no++;
        }
    ?>
</table>
<button style="margin-top: 20px;"><a style="text-decoration: none;" a target="_blank" href="export2.php">UNDUH</a></li></button>
</body>
</html>
</body>
</html>