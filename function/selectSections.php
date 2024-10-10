<?php
session_start();
// fetch_grade_levels.php
include "../connectDb.php";

// Get the grade level id from the AJAX request
$grade_level_id = isset($_POST['grade_level_id']) ? (int)$_POST['grade_level_id'] : 0;

$user_id = $_SESSION['user_id'];
// Prepare the SQL statement
$sql = "SELECT sec.section_name AS section_name 
FROM teacher t
LEFT JOIN section sec ON t.section_id = sec.section_id
WHERE t.teacher_id = RIGHT(?, 4)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $user_id);
$stmt->execute();
$result = $stmt->get_result();

// Fetch the sections
$sections = array();
while ($row = $result->fetch_assoc()) {
    $sections[] = $row;
}

// Return the sections as JSON
echo json_encode($sections);

// Close the connection
$stmt->close();
$conn->close();
?>