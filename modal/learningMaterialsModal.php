<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Materials - ICS Teacher Portal</title>
    <link rel="stylesheet" href="../css/inputGradesModal.css">
</head>

<body>
    <!-- Modal -->
    <div class="modal fade modal-xl" id="teacherMaterialsModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" id="staticBackdropLabel">LEARNING MATERIALS</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Upload Section -->
                    <div class="card my-3">
                        <div class="card-body">
                            <h5 class="card-title">Post</h5>
                            <form id="uploadForm">
                                <div class="mb-3">
                                    <label for="grade" class="form-label">Grade</label>
                                    <select id="grade" class="form-select">
                                        <option selected disabled>Choose grade</option>
                                        <option value="Grade 1">Grade 1</option>
                                        <option value="Grade 2">Grade 2</option>
                                        <!-- Add more grades as needed -->
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="section" class="form-label">Section</label>
                                    <select id="section" class="form-select">
                                        <option selected disabled>Choose section</option>
                                        <option value="Section A">Section A</option>
                                        <option value="Section B">Section B</option>
                                        <!-- Add more sections as needed -->
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="fileInput" class="form-label">Upload File</label>
                                    <input type="file" class="form-control" id="fileInput">
                                </div>
                                <button type="submit" class="btn btn-primary">Post</button>
                            </form>
                        </div>
                    </div>

                    <!-- Uploaded Section -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Uploaded</h5>
                            <div id="uploadedFiles">
                                <!-- Files will be displayed here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>