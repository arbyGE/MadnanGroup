<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.css">
    <title>REGULER</title>
    <style>
        body{

        }
        li a, .dropbtn{
 
 text-align: center;

 text-decoration: none;
}
li a:hover, .dropdown:hover .dropbtn {
 transition: all 0.5s ease;
}

li.dropdown{
  display: inline-block;
}


.dropdown-content {
  display: none;
  position: absolute;
  background-color: #87A96B;
  min-width: 90  px;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2); 
  z-index: 1;
}

.dropdown-content a {
  color: white;

  text-decoration: none;
  display: block;
  text-align: center;
}


.dropdown-content a:hover {
  border: 3px solid white;
}

.dropdown:hover .dropdown-content {
  display: block;
}
        table {
          border-collapse: collapse;
          width: 80%;
          background-color: #D0F0C0;
          margin-top:500px;
  

  
        }

        th, td {
          text-align: center;
          padding: 8px;
  
  
        }
            tr:nth-child(even) {background-color: #FFFF;}
        h2{
            position: absolute;
            width: 558px;
            height: 55px;
            left: 105px;
            top: 387px;

            font-family: 'Merriweather Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 36px;
            line-height: 45px;
            text-transform: uppercase;

            color: #000000;

        }
        ul{
            position: absolute;
            width: 1535px;
            height: 75px;
            left: auto;
            right:auto;
            top: 158px;

            background: #87A96B;
        }
        li{
            margin:auto;
            padding: 20px 19px;
            display: inline-block;
        }
        a{
            color:white;
            width: 120px;
            height: 30px;
            left: 23px;
            top: 191px;

            text-decoration:none;
            font-size:25px;
            font-family:sans-serif;
        }
    
        .atas img{
            position: absolute;
            width: 120px;
            height: 145px;
            left: 18px;
            top: 11px;
        }
        
        .atas h3{
            position: absolute;
            width: 451px;
            height: 50px;
            left: 150px;
            top: 30px;

            font-family: 'Merriweather Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 24px;
            line-height: 30px;
            text-transform: uppercase;

            color: #000000;

        
        }
        .atas h4{
            position: absolute;
            width: 451px;
            height: 28px;
            left: 150px;
            top: 60px;
        
            font-family: 'Merriweather Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 30px;

            color: #000000;
        }
    </style>
    <div class="atas">
    <img src="img/Logosmkn4padalarang-removebg-preview.png">
    <h3>REKAYASA PERANGKAT LUNAK(RPL)</h3>
    <h4>SMKN 4 PADALARANG</h4>
    </div>
    <ul>
      <li><a href="home.php"  style="text-decoration: none;">Beranda</a></li>
      <li class="dropdown">
                <a href="#" class="dropbtn" style="text-decoration: none;">Data Siswa</a>
                <div class="dropdown-content">
                    <a href="datasiswaadmin.php" style="text-decoration: none;">X</a>
                    <a href="datasiswaadmin11.php" style="text-decoration: none;">XI</a>
                    <a href="datasiswaadmin12.php" style="text-decoration: none;">XII</a>
                    </div> 
        <li><a href="alumniadmin.php" style="text-decoration: none;">Alumni</a></li>  
    </ul>
    <button style="display:block;background: #87A96B;;margin-top:300px;margin-left:1230px;margin-bottom:opx;"><a href="datasiswaadminor11.php">INDUSTRI</a></button>
</head>
<body>
    <h2>SISWA XI RPL</h2>

<table border="2" style="margin-top:115px;margin-left:150px;">
    <tr align="center">              
      <th scope="col">NISN</th>
      <th scope="col">NAMA</th>
      <th scope="col">KELAS</th>
      <th scope="col">JENIS KELAMIN</th>
      <th colspan="2">ACTION</th>
    </tr>

<?php
        $mysqli = new mysqli("localhost","root","","dbmadnan");

?>
    <?php
    include "koneksi.php";
    $ambil = mysqli_query($mysqli,"select*from vdata1 ");
    while ($tampil = mysqli_fetch_array($ambil)){
        echo"
        <tr>
            <td>$tampil[nisn]</td>
            <td>$tampil[nama]</td>
            <td>$tampil[kelas]</td>
            <td>$tampil[jenis_kelamin]</td>
            <td><a style=color:black;font-size:20px; href='?kode=$tampil[nisn]'>Hapus</a></td>
            <td><a style=text-decoration:none;color:black;font-size:20px; href='editsiswa11.php?kode=$tampil[nisn]'>Edit</a></td>
        </tr>";  
        }
    ?>
    
</table>
        <button style=display:block;margin-top:90px;margin-left:660px;><a style="color:black;" href="inputsiswa11.php">Tambah Data</a></button>
            <?php
            if(isset($_GET['kode'])){
                mysqli_query($koneksi, "delete from siswa1 where nisn ='$_GET[kode]'");

                echo "Data Telah Terhapus";
                echo "<meta http-equiv=refresh content=2;URL='datasiswaadmin11.php'>";
            }
            ?>
</body>
</html>