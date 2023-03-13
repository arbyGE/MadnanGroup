<?php
include "session.php";
include "koneksi.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style1.css">
  <style>
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
 min-width: 90px;
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
    .isi img{
      margin-top: 65px;
      width: 211px;
            height: 240px;
            margin-left: 20px;
    }
    .sejarah h3{
      font-size:30px;
      font-family: Arial;
      margin-top: -250px;
      margin-left: 300px;
    }
    .sejarah h4{
      font-family: 'Merriweather Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 22px;
            margin-right: 100px;

            color: #000000;


            color: #000000;
      margin-top: -10px;
      margin-left: 300px;
    }
    .singkat h3{
      margin-top: 30px;
    }
    .skt img{
      width: 360px;
            height: 226px;
      margin-top: -10px;
      margin-left: 970px;
    }
    .skt h3{
      margin-top: 200px;
      margin-left: 50px;
      font-family: Arial;
    }
    .skt h4{
      font-family: 'Merriweather Sans';
            font-style: normal;
            font-weight: 100;
            font-size: 20px;
            line-height: 22px;

            color: #000000;


      
      margin-top: -200px;
      margin-left: 50px;
      margin-right: 370px;
    }
    </style>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda</title>
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
        <li><a href="logout.php" style="text-decoration: none;">Logout</a></li>
    </ul>
    <div class="isi">
    <div class="sejarah">
    <img src="logo.png">
    <h3>SMK NEGERI 4 PADALARANG</h3>
    <h4>SMK Negeri 4 Padalarang berdiri diawali dari Sekolah Pertanian bernama Sekolah Pertanian Pembangunan
        - Sekolah Pertanian Menengah Atas (SPP-SPMA) wilayah Jawa Barat. Sejalan perkembangan peraturan daerah mengenai Sekolah Menengah 
        Kejuruan maka pada tahun 2002 SPP-SPMA berganti nama menjadi SMK Negeri 4 Padalarang. Penamaan SMK Negeri 4 Padalarang ini didasarkan 
        dari penamaan dan penomoran sekolah di wilayah Kabupaten Bandung pada saat itu,yaitu SMK Negeri 1 Katapang, SMK Negeri 2 Baleendah,
        SMK Negeri 3 Baleendah, SMK Negeri 4 Padalarang, SMK Negeri 5 Pangalengan, SMK Negeri 6 Rancaekek 
        (sekarang SMK Ne Sejalan dengan otonomi daerah, dengan berpisahnya Kabupaten Bandung Barat dengan Kabupaten Bandung, secara administrasi SMK Negeri 4 Padalarang pun lepas dari Kabupaten Bandung,
        namun dengan kebijakan sekolah nama dan penomoran pada SMK Negeri 4 Padalarang tetap dipertahankan sampai saat ini.geri 1 Rancaekek) dan SMKN 7 Baleendah. </h4>
        </div>
  </div>
  <div class="skt">
    <div class="singkat">
    <h3>REKAYASA PERANGKAT LUNAK</h3>
    <img src="rpl.jpeg" >
    <h4>Rekayasa perangkat lunak merupakan istilah yang digunakan yang erat kaitannya dengan pengembangan suatu perangkat lunak.
        Di tahun 1968 dan 1968 konferensi tentang perangkat lunak diselenggarakan yang disponsori oleh komite sains NATO. Konferensi tersebut memberikan dampak yang sangat signifikan dalam pengembangan rekayasa perangkat lunak.
        Di tahun 1960-an hingga 1980-an, terdapat banyak masalah yang ditemukan oleh praktisi pengembangan perangkat lunak. Pada saat itu, disebut krisis perangkat lunak karena banyaknya projek yang gagal. 
        Kegagalan pengembangan perangkat lunak terjadi dikarenakan projek melebihi anggaran, projek yang mengakibatkan kerusakan fisik dan projek yang menyebabkan kematian. 
        Salah satu kasus yang terkenal dalam kegagalan pengembangan perangkat lunak adalah meledaknya roket Ariane. Berbagai Teknik dan metode mulai dikembangkan untuk mengatasi krisis. Pengembangan pemrograman terstruktur,
        perangkat pembantu pengembangan perangkat lunak (CASE tools), pemrograman berorientasi objek, berbagai standar,
        dan UML dilkakukan sebagai langkah untuk menghasilkan software yang sesuai anggaran dan tepat waktu.</h4>
    </div>
    </div>
</body>
</html>
</html>
