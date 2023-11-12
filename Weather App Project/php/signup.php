<?php

// Start the session
session_start();
include "db_connection.php";

// If the user has submitted the signup form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if ($password !== $confirm_password) {
        header("Location: ../signupForm.php?error=The confirm password does not match");
        exit();
    }

    // Check if the email already exists
    $sql = "SELECT * FROM wth_users WHERE email = '$email' OR username = '$username'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        header("Location: ../signupForm.php?error=User already exists");
        exit();
    } else {
        // Insert the user data into the database
        $sql = "INSERT INTO wth_users (username, email, password, confirm_password)
        VALUES ('$username', '$email', '$password', '$confirm_password')";
        if ($conn->query($sql) === TRUE) {
            header("Location: ../index.php?success=Your account has been created successfully");
            exit();
        } else {
            header("Location: ../signupForm.php?error=unknown error occurred");
            exit();
        }
    }
} else {
    header("Location: ../signupForm.php");
    exit();
}
