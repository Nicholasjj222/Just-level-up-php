<?php

session_start();

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if ($email === "admin@example.com" && $password === "secret") {
    $_SESSION['user'] = $email;
    echo "Login successful!";
} else {
    echo "Invalid email or password.";
}

?>