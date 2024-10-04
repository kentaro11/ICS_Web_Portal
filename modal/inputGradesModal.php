<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Grades - ICS Teacher Portal</title>
    <link rel="stylesheet" href="../css/inputGradesModal.css">
    <script src="../js/gradeLevelSelect.js"></script>
</head>

<body>
    <!-- Modal -->
    <div class="modal fade modal-lg" id="inputGradesModal" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header justify-content-center" style="border-bottom: none; height: 100px !important; padding: 0 !important;">
                    <h1 class="modal-title" id="staticBackdropLabel">INPUT GRADES</h1>
                    <button type="button" class="btn-close position-absolute top-0 end-0" style="top: 25px !important; right: 25px !important;" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="../function/inputGrades.php" method="POST" enctype="multipart/form-data">
                        <!-- Grade Dropdown -->
                        <div class="mb-3">
                            <label for="gradeSelect" class="form-label">Grade Level</label>
                            <select class="form-select" id="gradeSelect" name="grade_select">
                                <option value="Grade 1">Grade Level</option>
                            </select>
                        </div>

                        <!-- Hope Dropdown -->
                        <div class="mb-3">
                            <label for="hopeSelect" class="form-label">Section</label>
                            <select class="form-select" id="sectionSelect" name="section_select">
                                <option value="Hope">Section</option>
                            </select>
                        </div>

                        <!-- File Upload -->
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload File</label>
                            <input class="form-control" type="file" id="formFile" accept=".xlsx, .xls" name="upload_grade">
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary w-100">Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>