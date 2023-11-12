<?php

// Start session
session_start();
include "db_connection.php";

// If the user has submitted the login form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email_or_username = $_POST["email_or_username"];
    $password = $_POST["password"];

    // Check if the email or username exists in the database
    $sql = "SELECT * FROM wth_users WHERE email = '$email_or_username' OR username = '$email_or_username'";
    $result = $conn->query($sql);
    if ($result->num_rows == 0) {
        header("Location: ../index.php?error=Incorrect Email/Username");
        exit();
    } else {
        // The email or username exists in the database, so check the password
        $row = $result->fetch_assoc();
        if ($password == $row["password"]) {
            $_SESSION["username"] = $row["username"];
            header("Location: ../home.php");
            exit();
        } else {
            header("Location: ../index.php?error=Incorrect password");
            exit();
        }
    }
} else {
    header("Location: ../index.php");
    exit();
}