
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export</title>
</head>
<body>
    <?php
    header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=XII REGULER.xls");
    ?>
    <center>
        <h1>XII REGULER</h1>
</center>
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
</body>
</html>