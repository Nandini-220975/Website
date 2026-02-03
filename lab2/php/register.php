<?php
include "connect.php";   // include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass  = $_POST['password'];

    // Encrypt password
    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (Name,Email, Password)
            VALUES ('$name', '$email', '$hashed_password')";

    if (mysqli_query($conn, $sql)) {
        echo "Registration successful <br>";
        echo "<a href='login.html'>Go to Login</a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>