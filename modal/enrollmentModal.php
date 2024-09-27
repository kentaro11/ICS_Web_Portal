<link rel="stylesheet" href="../css/modal.css">
<script src="../js/gradeLevel.js"></script>
<script src="../js/gradeLevelFilter.js"></script>
<script src="../js/studentIdInput.js"></script>
<script src="../js/enrollAlert.js"></script>

<div class="modal fade modal-xl" id="enrollmentModal" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="height: 700px !important;">
            <div class="modal-header justify-content-center" style="border-bottom: none; height: 100px !important; padding: 0 !important;">
                <h1 class="modal-title" id="staticBackdropLabel">ENROLLMENT</h1>
                <button type="button" class="btn-close position-absolute top-0 end-0" style="top: 25px !important; right: 25px !important;" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Tabs Navigation -->
                <ul class="nav nav-tabs mx-3" id="enrollmentTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="enrollment-tab" data-bs-toggle="tab" data-bs-target="#enrollment" type="button" role="tab" aria-controls="enrollment" aria-selected="true">Enrollment</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pending-tab" data-bs-toggle="tab" data-bs-target="#pending" type="button" role="tab" aria-controls="pending" aria-selected="false">Pending</button>
                    </li>
                </ul>

                <div class="tab-content" id="enrollmentTabContent">
                    <!-- Enrollment Tab -->
                    <div class="tab-pane fade show active overflow-y-scroll" id="enrollment" role="tabpanel" aria-labelledby="enrollment-tab" style="height: 500px;">
                        <div class="form-container">
                            <!-- Your existing form starts here -->
                            <div class="form-container m-3">
                                <form id="enrollmentForm" action="../function/processEnrollment.php" method="POST" enctype="multipart/form-data">
                                    <div class="row mb-3">
                                        <div class="col">
                                            <label for="firstName" class="form-label">Student's First Name</label>
                                            <input type="text" class="form-control" id="firstName" name="first_name" required>
                                        </div>
                                        <div class="col">
                                            <label for="middleName" class="form-label">Student's Middle Name</label>
                                            <input type="text" class="form-control" id="middleName" name="middle_name">
                                        </div>
                                        <div class="col">
                                            <label for="lastName" class="form-label">Student's Last Name</label>
                                            <input type="text" class="form-control" id="lastName" name="last_name" required>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="sex" class="form-label">Sex</label>
                                        <select class="form-select" id="sex" name="sex" required>
                                            <option selected disabled>Select</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="dateOfBirth" class="form-label">Birth Date</label>
                                        <input type="date" class="form-control" id="dateOfBirth" name="date_of_birth" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="address" name="address" required>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col">
                                            <label for="parentFirstName" class="form-label">Parent's First Name</label>
                                            <input type="text" class="form-control" id="parentFirstName" name="parent_first_name" required>
                                        </div>
                                        <div class="col">
                                            <label for="parentMiddleName" class="form-label">Parent's Middle Name</label>
                                            <input type="text" class="form-control" id="parentMiddleName" name="parent_middle_name">
                                        </div>
                                        <div class="col">
                                            <label for="parentLastName" class="form-label">Parent's Last Name</label>
                                            <input type="text" class="form-control" id="parentLastName" name="parent_last_name" required>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="parentEmail" class="form-label">Parent's Email</label>
                                        <input type="email" class="form-control" id="parentEmail" name="parent_email" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="parentContact" class="form-label">Parent's Contact Number</label>
                                        <input type="tel" class="form-control" id="parentContact" name="parent_contact" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="civilStatus" class="form-label">Civil Status</label>
                                        <select class="form-select" id="civilStatus" name="civil_status" required>
                                            <option selected disabled>Select</option>
                                            <option value="single">Single</option>
                                            <option value="married">Married</option>
                                            <option value="widowed">Widowed</option>
                                            <option value="separated">Separated</option>
                                        </select>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col">
                                            <label for="gradeLevel" class="form-label">Grade Level</label>
                                            <select class="form-select" id="gradeLevel" name="grade_level" required>
                                                <option selected disabled>Select</option>
                                            </select>
                                        </div>

                                        <div class="col">
                                            <label for="section" class="form-label">Section</label>
                                            <select class="form-select" id="section" name="section" required>
                                                <option selected disabled>Select</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="studentPicture" class="form-label">Student's Picture</label>
                                        <input class="form-control" type="file" id="studentPicture" name="student_picture" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="psaBirthCertificate" class="form-label">PSA - Birth Certificate</label>
                                        <input class="form-control" type="file" id="psaBirthCertificate" name="psa_birth_certificate" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="progressReportCard" class="form-label">Progress Report Card</label>
                                        <input class="form-control" type="file" id="progressReportCard" name="progress_report_card" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="medicalAssessment" class="form-label">Medical Assessment</label>
                                        <input class="form-control" type="file" id="medicalAssessment" name="medical_assessment" required>
                                    </div>

                                    <button type="submit" class="btn btn-primary w-100">Enroll</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Pending Tab -->
                    <div class="tab-pane fade" id="pending" role="tabpanel" aria-labelledby="pending-tab">
                        <div class="m-2">
                            <form id="filterForm" class="mb-3">
                                <div class="row">
                                    <!-- Search Name Input -->
                                    <div class="col-md-4">
                                        <input type="text" id="fullName" name="full_name" class="form-control" placeholder="Search Name">
                                    </div>
                                    <!-- Filter Icon -->
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button type="button" class="btn btn-secondary position-absolute end-0" data-bs-toggle="collapse" data-bs-target="#filterOptions" style="margin: 0 30px 0 0;">
                                                    <i class="fas fa-filter"></i> Filter
                                                </button>
                                            </div>
                                            <div class="col-md-6 collapse" id="filterOptions">
                                                <div class="row" style="margin: 0 90px 0 0;">
                                                    <!-- Grade Level Filter -->
                                                    <div class="col-md-6">
                                                        <select class="form-select" id="gradeLevelFilter" name="grade_level_filter">
                                                            <option value="">Grade Level</option>
                                                            <!-- Dynamic grade level options from DB -->
                                                        </select>
                                                    </div>

                                                    <!-- Section Filter -->
                                                    <div class="col-md-6">
                                                        <select class="form-select" id="sectionFilter" name="section_name_filter">
                                                            <option value="">Section</option>
                                                            <!-- Dynamic section options from DB -->
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div class="table-responsive m-2 overflow-y-scroll" style="height: 450px;">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Grade Level</th>
                                        <th>Section</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="tableBody">
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
                                                WHERE s.lrn IS NULL";

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

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('fullName').addEventListener('input', filterData);
    document.getElementById('gradeLevelFilter').addEventListener('change', filterData);
    document.getElementById('sectionFilter').addEventListener('change', filterData);

    function filterData() {
        // Get the input and filter values
        const fullName = document.getElementById('fullName').value.trim();
        const gradeLevel = document.getElementById('gradeLevelFilter').value;
        const sectionName = document.getElementById('sectionFilter').value;

        // Treat "Grade Level" and "Section" defaults as empty
        const gradeLevelFilter = (gradeLevel === "Grade Level" || gradeLevel === "") ? '' : gradeLevel;
        const sectionFilter = (sectionName === "Section" || sectionName === "") ? '' : sectionName;

        // Log the filter values for debugging
        console.log("Filter Values:", {
            fullName,
            gradeLevelFilter,
            sectionFilter
        });

        // Create the query string
        const queryString = `full_name=${encodeURIComponent(fullName)}&grade_level_filter=${encodeURIComponent(gradeLevelFilter)}&section_name_filter=${encodeURIComponent(sectionFilter)}`;

        // Fetch the filtered data from the server
        fetch(`../function/filterPendingStudent.php?${queryString}`)
            .then(response => response.text())
            .then(data => {
                // Update the table body with the new data
                document.getElementById('tableBody').innerHTML = data;
            })
            .catch(error => console.error('Error fetching data:', error));
    }
</script>