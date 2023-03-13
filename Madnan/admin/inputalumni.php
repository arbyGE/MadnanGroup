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
    <label for="exampleInputid" class="form-label">Id</label>
    <input type="nisn" class="form-control" id="exampleInputid" aria-describedby="namaHelp" name="id">
  </div>
  <div class="mb-3">
    <label for="exampleInputnama" class="form-label">Nama</label>
    <input type="nama" class="form-control" id="exampleInputnama" name="nama">
  </div>
  <div class="mb-3">
    <label for="exampleInputperiode" class="form-label">Periode</label>
    <input type="kelas" class="form-control" id="exampleInputperiode" aria-describedby="namaHelp" name="periode">
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
    mysqli_query($koneksi,"insert into alumni set 
    id = '$_POST[id]',
    nama = '$_POST[nama]',
    periode = '$_POST[periode]',
    jenis_kelamin ='$_POST[jenis_kelamin]'");

    echo"<p class='pesan'>data alumni telah ditambahkan</p>";
    echo "<meta http-equiv=refresh content=1;URL='alumni.php'>";
}
?>
</body>
</html>