<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "latihan1";
$conn = mysqli_connect($host, $user, $pass, $db, 3306);
if ($conn == false)
{
echo "Koneksi ke server gagal.";
die();
} else {
    //echo "Koneksi berhasil";
}
?>