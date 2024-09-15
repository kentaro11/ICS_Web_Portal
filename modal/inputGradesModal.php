<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Schedule - ICS Parent Portal</title>
    <link rel="stylesheet" href="../css/inputGradesModal.css">
</head>

<body>
    <!-- Modal -->
    <div class="modal fade modal-xl" id="inputGradesModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" id="staticBackdropLabel">INPUT GRADES</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <!-- Grade Dropdown -->
                        <div class="mb-3">
                            <label for="gradeSelect" class="form-label">Grade</label>
                            <select class="form-select" id="gradeSelect">
                                <option value="Grade 1">Grade 1</option>
                                <option value="Grade 2">Grade 2</option>
                                <option value="Grade 3">Grade 3</option>
                            </select>
                        </div>

                        <!-- Hope Dropdown -->
                        <div class="mb-3">
                            <label for="hopeSelect" class="form-label">Hope</label>
                            <select class="form-select" id="hopeSelect">
                                <option value="Hope">Hope</option>
                                <option value="Dream">Dream</option>
                                <option value="Inspiration">Inspiration</option>
                            </select>
                        </div>

                        <!-- File Upload -->
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload File</label>
                            <input class="form-control" type="file" id="formFile" accept=".xlsx, .xls">
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>