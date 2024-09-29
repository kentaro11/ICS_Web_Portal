<?php
session_start();
include "../connectDb.php";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    // Sanitize input to prevent SQL injection
    $announcement_title = $conn->real_escape_string($_POST['announcement_title']);
    $announcement_text = $conn->real_escape_string($_POST['announcement_text']);

    $upload_dir = '../announcement/'; // Ensure this directory exists and is writable
    $announcement_file = $upload_dir . basename($_FILES['announcement_file']['name']);

    // Begin transaction to ensure data integrity
    $conn->begin_transaction();

    try {

        $insert_announcement_sql = "INSERT INTO announcements (title, announcement_text, announcement_file) 
                                    VALUES ('$announcement_title', '$announcement_text', '$announcement_file')";

        if ($conn->query($insert_announcement_sql) !== TRUE) {
            throw new Exception("Error inserting into announcements: " . $conn->error);
        }

        $conn->commit();

        // Set a success message and redirect
        $_SESSION['success_message'] = "Announcement uploaded!";
        header("Location: ../pages/guidanceDashboard.php");
    } catch (Exception $e) {
        // If there is an error, rollback the transaction
        $conn->rollback();

        // Set an error message and redirect back to the form
        $_SESSION['error_message'] = $e->getMessage();
        header("Location: ../pages/guidanceDashboard.php");
    }

} else {
    // If accessed without POST request, redirect back
    $_SESSION['error_message'] = "Invalid request method.";
    header("Location: ../pages/guidanceDashboard.php");
}

// Close the connection
$conn->close();
?>
