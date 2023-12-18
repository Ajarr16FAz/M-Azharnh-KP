<?php
// Sertakan file konfigurasi
include('konek.php');

// Ambil ID komentar dari parameter URL
$commet_id = $_GET['id'];

// Hapus komentar dari database
$delete_query = "DELETE FROM commet WHERE id = $commet_id";
mysqli_query($conn, $delete_query);

// Redirect kembali ke halaman halaman_panel.php
header("Location: admin.php");
exit();
?>