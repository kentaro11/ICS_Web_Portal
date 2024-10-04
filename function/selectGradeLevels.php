<?php
session_start();
include "../connectDb.php";

if (isset($_SESSION['section_id'])) {
    $section_id = $_SESSION['section_id'];

    // Prepare the SQL statement to fetch the grade level for the given section
    $sql = "SELECT gl.grade_level_id, gl.grade_level
            FROM `section` sec
            LEFT JOIN grade_level gl ON sec.grade_level_id = gl.grade_level_id
            WHERE sec.section_id = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $section_id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Fetch the grade levels
    $grade_levels = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $grade_levels[] = $row;
        }
    }

    // Return the grade levels as JSON
    echo json_encode($grade_levels);
    
    // Close the statement and connection
    $stmt->close();
} else {
    echo json_encode(['error' => 'Section ID not found in session.']);
}

$conn->close();
?>
