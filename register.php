<?php
 include "service/database.php";

 if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if ($db->query($sql)) {
        echo "koneksi data berhasil";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
 }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "layout/header.html" ?>
    <h3>Daftar Akun</h3>
    <form action="register.php" method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="******" required>
        <button type="submit" name="register">Daftar Sekarang</button>
    </form>
    <?php include "layout/footer.html" ?>
</body>
</html>