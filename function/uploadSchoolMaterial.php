<?php
session_start();
include '../connectDb.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if the file was uploaded without errors
    if (isset($_FILES['school_materials']) && $_FILES['school_materials']['error'] == 0) {
        $teacher_id = $_SESSION['user_id'];
        $subject_id = $_SESSION['subject_id'];
        $section_id = $_SESSION['section_id'];

        // Get the last 4 characters of the teacher_id
        $query = "SELECT teacher_id FROM teacher WHERE teacher_id = RIGHT(?, 4)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('s', $teacher_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $final_teacher_id = $row['teacher_id'];

        // Define the file variables
        $file_name = $_FILES['school_materials']['name'];
        $file_tmp = $_FILES['school_materials']['tmp_name'];
        $file_size = $_FILES['school_materials']['size'];
        $file_type = $_FILES['school_materials']['type'];

        // Specify the directory where the file will be saved
        $upload_directory = '../school_materials/';
        $file_destination = $upload_directory . basename($file_name);

        // Move the file to the specified directory
        if (move_uploaded_file($file_tmp, $file_destination)) {
            // Insert file details into the database
            $query = "INSERT INTO school_materials (teacher_id, subject_id, section_id, school_materials) 
                      VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($query);
            $stmt->bind_param('iiis', $final_teacher_id, $subject_id, $section_id, $file_destination);

            if ($stmt->execute()) {
                echo "File uploaded successfully! Last 4 characters of teacher_id: " . $last_four_chars;
                // Redirect to the teacher dashboard after successful file upload
                header("Location: ../pages/teacherDashboard.php");
                exit(); // Ensure the script stops after redirect
            } else {
                echo "Failed to upload file to the database.";
            }
        } else {
            echo "Failed to move the uploaded file.";
        }
    } else {
        echo "No file uploaded or there was an error uploading the file.";
    }
} else {
    echo "Error: Invalid request method.";
}
?>
