<?php
session_start();
include "koneksi.php";
?>
    <link rel="stylesheet" href="style2.css">
    <body>
    <div class="center">
        <h1>LOGIN</h1>
        <form method="post">
            <div class="txt_field">
                <input type="text" required name="username">
                <span></span>
                <label>Username: </label>
            </div>
            <div class="txt_field">
                <input type="password" required name="password">
                <span></span>
                <label>Password: </label>
            </div>
            <input type="submit" value="Login" name="proseslog">
            <h4>ADMIN</h4>
            <a href="../../madnan/index.php" target="_blank">Beranda</a>
        </form>
    </div>

<?php
if(isset($_POST{'proseslog'})) {
    $sql = mysqli_query($koneksi, "select * from admin where username = '$_POST[username]'
    and password = '$_POST[password]'");

    $cek = mysqli_num_rows($sql);
    if($cek > 0) {
        $_SESSION['username'] = $_POST['username'];

        echo "<meta http-equiv=refresh content=0;URL='beranda.php'>";

    }else{
       
        echo  "<meta http-equiv=refresh content=1;URL='login.php'>";
    }
} 