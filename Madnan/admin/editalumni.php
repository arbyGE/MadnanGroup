<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <title>UPDATE DATA</title>
    <style>
        body{
    background-image: url("img/WhatsApp Image 2023-01-30 at 14.23.11 (1).png");
    background-size:cover;

        }
        h3{
            position: absolute;
width: 558px;
height: 55px;
left: 610px;
top: 190px;

font-family: 'Merriweather Sans';
font-style: normal;
font-weight: 400;
font-size: 36px;
line-height: 45px;
text-transform: uppercase;

color: #000000;

        }
        </style>
</head>
<body>
<?php
    include "koneksi.php";

    $sql=mysqli_query($koneksi,"select*from alumni where id='$_GET[kode]'");
    $data=mysqli_fetch_array($sql);

?>
  <div class="container py-5 h-100 ">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg- text-dark" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">
  <h2 class="justify-content-xl-center">Mengedit Data</h2>

<form action="" method="POST">
<table>
<div class="mb-3">
    <label for="exampleInputid" class="form-label">ID</label>
    <input class="form-control" id="exampleInputid" aria-describedby="namaHelp" type="text" name="id" value="<?php echo $data['id'];?>"></input>
  </div>
  <div class="mb-3">
    <label for="exampleInputnama" class="form-label">Nama</label>
    <input  class="form-control" id="exampleInputnama" aria-describedby="namaHelp" type="text" name="nama" value="<?php echo $data['nama'];?>"></input>
  </div>
  <div class="mb-3">
    <label for="exampleInputperiode" class="form-label">Periode</label>
    <input  class="form-control" id="exampleInputperiode" aria-describedby="namaHelp" type="text" name="periode" value="<?php echo $data['periode'];?>"></input>
  </div>
  <div class="mb-3">
    <label for="exampleInputkelamin" class="form-label">JENIS KELAMIN</label>
    <input class="form-control" id="exampleInputkelamin" aria-describedby="namaHelp" type="text" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin'];?>"></input>
  </div>
    <tr class="simpan">
        <td></td>
        <td><input type="submit" value="simpan" name="proses" class="btn btn-success btn-block mb-4 "></td>
    </tr>
</table>
</div>
        </div>
      </div>
    </div>
  </div>
</form>

<?php
include "koneksi.php";
if(isset($_POST['proses'])){
    mysqli_query($koneksi,"update alumni set
    nama = '$_POST[nama]',
    periode = '$_POST[periode]',
    jenis_kelamin ='$_POST[jenis_kelamin]'
    where id = '$_POST[id]'");

    echo"<p class='pesan'>data siswa berhasil diubah</p>";
    echo "<meta http-equiv=refresh content=1;URL='alumni.php'>";
}
?>
</body>
</html>