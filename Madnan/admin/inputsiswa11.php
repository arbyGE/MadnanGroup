<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap.css">
  <title>Tambah Data</title>
</head>
<body>

  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-light text-dark" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">
  <h2 class="justify-content-xl-center">Tambah Data</h2>
  <form  action="" method="POST">
  <div class="mb-3">
    <label for="exampleInputnisn" class="form-label">NISN</label>
    <input type="nisn" class="form-control" id="exampleInputnisn" aria-describedby="namaHelp" name="nisn">
  </div>
  <div class="mb-3">
    <label for="exampleInputnama" class="form-label">Nama</label>
    <input type="nama" class="form-control" id="exampleInputnama" name="nama">
  </div>
  <div class="mb-3">
    <label for="exampleInputid_kelas" class="form-label">kelas</label>
    <input type="kelas" class="form-control" id="exampleInputid_kelas" aria-describedby="namaHelp" name="id_kelas">
  </div>
  <div class="mb-3">
    <label for="exampleInputjenis_kelamin" class="form-label">Jenis Kelamin</label>
    <input type="jenis_kelamin" class="form-control" id="exampleInputjenis_kelamin" name="jenis_kelamin">
  </div>
  <button type="submit" class="btn btn-success"value="Tambah Data" name="proses" class="btn btn-success btn-block mb-4 ">Submit</button>
</form>

  
</div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>

<?php
include "koneksi.php";
if(isset($_POST['proses'])){
    mysqli_query($koneksi,"insert into siswa1 set
    nisn = '$_POST[nisn]',
    nama = '$_POST[nama]',
    id_kelas = '$_POST[id_kelas]',
    jenis_kelamin ='$_POST[jenis_kelamin]'");

    echo"<p class='pesan'>data siswa telah ditambahkan</p>";
    echo "<meta http-equiv=refresh content=1;URL='datasiswam11.php'>";
}
?>
</body>
</html>