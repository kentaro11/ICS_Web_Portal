<?php
include "../connectDb.php";

// Initialize query with base SQL
$query = "SELECT CONCAT(s.first_name, ' ', s.middle_name, ' ', s.last_name) AS full_name,
                gl.grade_level AS grade_level,
                sec.section_name AS section_name,
                s.student_id AS student_id_lrn
            FROM student s
            LEFT JOIN section sec ON s.section_id = sec.section_id
            LEFT JOIN grade_level gl ON sec.grade_level_id = gl.grade_level_id
            WHERE s.lrn IS NULL";  // Base condition: Only list students without an LRN

// Initialize filter array to store query conditions
$filters = [];

// Full name filter: Only apply if full_name is provided
if (isset($_GET['full_name']) && !empty(trim($_GET['full_name']))) {
    $full_name = mysqli_real_escape_string($conn, $_GET['full_name']);
    $filters[] = "CONCAT(s.first_name, ' ', s.middle_name, ' ', s.last_name) LIKE '%$full_name%'";
}

// Grade level filter: Apply only if a grade level is selected
if (isset($_GET['grade_level_filter']) && !empty($_GET['grade_level_filter'])) {
    $grade_level = mysqli_real_escape_string($conn, $_GET['grade_level_filter']);
    $filters[] = "gl.grade_level = '$grade_level'";
}

// Section filter: Apply only if a section is selected and grade level is also selected
if (isset($_GET['section_name_filter']) && !empty($_GET['section_name_filter'])) {
    $section_name = mysqli_real_escape_string($conn, $_GET['section_name_filter']);
    $filters[] = "sec.section_name = '$section_name'";
}

// Append filters to the query if they exist
if (!empty($filters)) {
    $query .= " AND " . implode(" AND ", $filters);
}

// Debug: Print the query to check its correctness
error_log("Constructed Query: " . $query);

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['full_name']) . "</td>";
        echo "<td>" . htmlspecialchars($row['grade_level']) . "</td>";
        echo "<td>" . htmlspecialchars($row['section_name']) . "</td>";
        echo "<td><button class='btn btn-primary'>Add LRN</button></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>No records found.</td></tr>";
}
?>
