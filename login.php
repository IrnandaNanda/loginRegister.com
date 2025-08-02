<?php
include "service/database.php";

    if (isset($_POST['login'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];

        // Here you would typically check the credentials against a database
        // For demonstration purposes, we'll just echo them
        echo "username: $username <br>";
        echo "password: $password <br>";

        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = $db->query($sql);

        if($result->num_rows > 0) {
            echo "<p style='color: green;'>Login successful!</p>";
        } else {
            // Invalid credentials
            echo "<p style='color: red;'>Invalid username or password.</p>";

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
    <h3>Masuk Akun</h3>
    <form action="login.php" method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="******" required>
        <button type="submit" name="login">Masuk</button>
    </form>
    <?php include "layout/footer.html" ?>
</body>
</html>