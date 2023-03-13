<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GALERI</title>
    <link rel="stylesheet" href="style1.css">
<style>
    .atas{
        margin-bottom: 200px;
        }
    .atas img{
            position: absolute;
            width: 120px;
            height: 145px;
            left: 18px;
            top: 11px;
        }
  
       
div.gallery {
  margin: 5px;
  border: 5px solid #ccc;
  float: left;
  width: 350px;
  margin-top:100px;
}
.gallery{
            
        }

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px 15px;
  text-align: center;
}
</style>
<div class="atas">
    <img src="logo.png">
    <h3>REKAYASA PERANGKAT LUNAK(RPL)</h3>
    <h4>SMKN 4 PADALARANG</h4>
    </div>
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
</head>
<body>

<div class="gallery">

<div class="gallery">
  <a target="_blank" href="rpl.jpeg"style="color: white">
    <img src="rpl.jpeg" alt="Forest" width="600" height="600">
  </a>
  <div class="desc"style="color: black"></div>
</div>

<div class="gallery">
  <a target="_blank" href="rpll.JPG">
    <img src="rpll.JPG" alt="Northern Lights" width="600" height="600">
  </a>
  <div class="desc"style="color: black">Mengikuti Kegiatan Lobmba Hadroh</div>
</div>


</div>

</body>
</html>