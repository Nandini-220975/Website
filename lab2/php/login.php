<?php
include "connect.php";   // include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $pass  = $_POST['password'];

    $sql = "SELECT * FROM users WHERE Email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {

        $row = mysqli_fetch_assoc($result);

        if (password_verify($pass, $row['Password'])) {
            echo "Login successful <br>";
            echo "Welcome " . $row['first_name'];
        } else {
            echo "Wrong password";
        }

    } else {
        echo "User not found";
    }
}
?>