<?php
include("db_connect.php");

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $check = mysqli_query($link, "SELECT * FROM users WHERE username='$username'");

    if (mysqli_num_rows($check) > 0) {
        echo "Username already exists!<br>";
    } else {
        $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        if (mysqli_query($link, $query)) {
            echo "Account created successfully!<br>";
        } else {
            echo "Error: " . mysqli_error($link) . "<br>";
        }
    }
}
?>

<html>
<head>
    <title>Register</title>
</head>
<body>
    <h2>Create Account</h2>
    <form action="" method="post">
        Username: <input type="text" name="username"><br><br>
        Password: <input type="password" name="password"><br><br>
        <input type="submit" name="register" value="Register">
    </form>
</body>
</html>
