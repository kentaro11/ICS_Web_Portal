<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment - ICS Guidance Portal</title>
    <link rel="stylesheet" href="../css/classScheduleModal.css">
</head>

<body>
    <!-- Modal -->
    <div class="modal fade modal-xl" id="enrollmentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" id="staticBackdropLabel">ENROLLMENT</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-container">
                        <form>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="firstName" class="form-label">Student's First Name</label>
                                    <input type="text" class="form-control" id="firstName">
                                </div>
                                <div class="col">
                                    <label for="lastName" class="form-label">Student's Last Name</label>
                                    <input type="text" class="form-control" id="lastName">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="sex" class="form-label">Sex</label>
                                <select class="form-select" id="sex">
                                    <option selected>Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address">
                            </div>

                            <div class="row mb-3">
                                <div class="col">
                                    <label for="parentFirstName" class="form-label">Parent's First Name</label>
                                    <input type="text" class="form-control" id="parentFirstName">
                                </div>
                                <div class="col">
                                    <label for="parentLastName" class="form-label">Parent's Last Name</label>
                                    <input type="text" class="form-control" id="parentLastName">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password">
                            </div>

                            <div class="mb-3">
                                <label for="confirmPassword" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="confirmPassword">
                            </div>

                            <div class="mb-3">
                                <label for="civilStatus" class="form-label">Civil Status</label>
                                <input type="text" class="form-control" id="civilStatus">
                            </div>

                            <div class="mb-3">
                                <label for="parentContact" class="form-label">Parent's Contact Number</label>
                                <input type="text" class="form-control" id="parentContact">
                            </div>

                            <div class="row mb-3">
                                <div class="col">
                                    <label for="gradeLevel" class="form-label">Grade Level</label>
                                    <select class="form-select" id="gradeLevel">
                                        <option selected>Select</option>
                                        <option value="grade1">Grade 1</option>
                                        <option value="grade2">Grade 2</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="gradeLevel" class="form-label">Grade Level</label>
                                    <select class="form-select" id="gradeLevel">
                                        <option selected>Select</option>
                                        <option value="section-grade1">Hope</option>
                                        <option value="section-grade1">Dream</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="psaBirthCertificate" class="form-label">PSA - Birth Certificate</label>
                                <input class="form-control" type="file" id="psaBirthCertificate">
                            </div>

                            <div class="mb-3">
                                <label for="progressReportCard" class="form-label">Progress Report Card</label>
                                <input class="form-control" type="file" id="progressReportCard">
                            </div>

                            <div class="mb-3">
                                <label for="medicalAssessment" class="form-label">Medical Assessment</label>
                                <input class="form-control" type="file" id="medicalAssessment">
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Enroll</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>