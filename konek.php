<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "kerjaprojek_db";
$conn = mysqli_connect($server, $user, $password, $database);
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>