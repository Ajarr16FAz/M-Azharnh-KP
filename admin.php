<?php
include('konek.php');
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit(); // Terminate script execution after the redirect
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <title>Admin Panel</title>
</head>

<body>
    <div class="container-logout">
        <form action="logout.php" method="POST" class="login-email">
            <h1>Selamat Datang,
                <?php echo $_SESSION['username']; ?>!
            </h1>
            <div class="input-group">
                <button type="submit" class="btn">Logout</button>
            </div>
        </form>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>NOMER</th>
                <th>TANGGAL</th>
                <th>NAMA</th>
                <th>EMAIL</th>
                <th>PESAN</th>
                <th>TINDAKAN</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM commet";
            $result = mysqli_query($conn, $query);
            $NO=1;
            while ($fetch_pesan = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $NO . "</td>";
                echo "<td>" . $fetch_pesan['tanggal_komentar'] . "</td>";
                echo "<td>" . $fetch_pesan['nama'] . "</td>";
                echo "<td>" . $fetch_pesan['email'] . "</td>";
                echo "<td>" . $fetch_pesan['komen'] . "</td>";
                echo "<td>";
                echo "<a href='hapus.php?id=" . $fetch_pesan['ID'] . "'class='btn btn-danger' onclick='return confirmDelete()'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
                $NO++;
            }
            ?>
            <script src="style.js"></script>
        </tbody>
    </table>
</body>

</html>