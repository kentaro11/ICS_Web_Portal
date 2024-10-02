<?php
session_start();
include '../connectDb.php'; // Modify with your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_POST['userId'];
    $password = $_POST['password'];

    // Escape inputs to prevent SQL Injection
    $userId = mysqli_real_escape_string($conn, $userId);
    $password = mysqli_real_escape_string($conn, $password);

    // Check student_credential
    $query = "SELECT * FROM student_credential WHERE user_id = '$userId' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['user'] = $userId;
        header("Location: ../pages/parentDashboard.php");
        exit();
    }

    // Check teacher_credential
    $query = "SELECT * FROM teacher_credential WHERE user_id = '$userId' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['user'] = $userId;
        header("Location: ../pages/teacherDashboard.php");
        exit();
    }

    // Check guidance_credential
    $query = "SELECT * FROM guidance_credential WHERE user_id = '$userId' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['user'] = $userId;
        header("Location: ../pages/guidanceDashboard.php");
        exit();
    }

    // Check principal_credential
    $query = "SELECT * FROM principal_credential WHERE user_id = '$userId' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['user'] = $userId;
        header("Location: ../pages/principalDashboard.php");
        exit();
    }

    // Check pdo_credential
    $query = "SELECT * FROM pdo_credential WHERE user_id = '$userId' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['user'] = $userId;
        header("Location: ../pages/pdoDashboard.php");
        exit();
    }

    // If no match is found, redirect to index.php with an error message
    header("Location: ../index.php?error=Invalid credentials");
    exit();
} else {
    header("Location: ../index.php");
    exit();
}
?>
