<?php
include 'konek.php';
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit();
}
 
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']); // Hash the input password using SHA-256
 
    $sql = "SELECT * FROM log_admin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
 
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: admin.php");
        exit();
    } else {
        echo "<script>alert('Email atau password Anda salah. Silakan coba lagi!')</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="login.css">

</head>

<body>
  <br><br>
  <div id="form">
    <h1 id="heading">Login Form</h1>
    <form name="form" action="" method="POST" required>
      <label>Username: </label>
      <input type="text" id="user" name="username"></br></br>
      <label>Password: </label>
      <input type="password" id="pass" name="password" required></br></br>
      <input type="submit" id="btn" value="Login" name="submit" />
    </form>
  </div>
  <script>
    function isvalid() {
      var user = document.form.user.value;
      if (user.length == "") {
        alert(" Enter username or email id!");
        return false;
      }

      <?php

      if (isset($_POST['submit'])) { // ambil data dari formulir
        $username = $_POST['username'];
        $password = $_POST['password'];
        // buat query
        $sql = "INSERT INTO kerjaprojek_db (username, password) VALUE ('$username', '$password')";
        $query = mysqli_query($db, $sql);
      }

      ?>


    }
  </script>
</body>

</html>

</body>

</html>