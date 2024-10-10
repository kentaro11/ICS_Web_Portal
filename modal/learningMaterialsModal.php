<link rel="stylesheet" href="../css/inputGradesModal.css">
<script src="../js/gradeLevelMaterials.js"></script>

<!-- Modal -->
<div class="modal fade modal-xl" id="teacherMaterialsModal" dx` tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header justify-content-center" style="border-bottom: none; height: 100px !important; padding: 0 !important;">
                <h1 class="modal-title" id="staticBackdropLabel">SCHOOL MATERIALS</h1>
                <button type="button" class="btn-close position-absolute top-0 end-0" style="top: 25px !important; right: 25px !important;" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <ul class="nav nav-tabs mx-3" id="uploadTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="post-tab" data-bs-toggle="tab" data-bs-target="#post" type="button" role="tab" aria-controls="post" aria-selected="true">Post</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="uploaded-tab" data-bs-toggle="tab" data-bs-target="#uploaded" type="button" role="tab" aria-controls="uploaded" aria-selected="false">Uploaded</button>
                    </li>
                </ul>

                <div class="tab-content" id="postTabContent">

                    <div class="tab-pane fade show active" id="post" role="tabpanel" aria-labelledby="post-tab" style="height: 400px;">
                        <!-- Upload Section -->
                        <div class="card m-3">
                            <div class="card-body">
                                <h5 class="card-title">Post</h5>
                                <form action="../function/uploadSchoolMaterial.php" id="uploadForm" method="POST" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="gradeLevel" class="form-label">Grade Level</label>
                                        <select id="gradeLevel" class="form-select" name="grade">
                                            <option selected disabled>Grade Level</option>
                                            <!-- Add more grades as needed -->
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="sectionLevel" class="form-label">Section</label>
                                        <select id="sectionLevel" class="form-select" name="section">
                                            <option selected disabled>Section</option>
                                            <!-- Add more sections as needed -->
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="fileInput" class="form-label">Upload File</label>
                                        <input type="file" class="form-control" id="fileInput" name="school_materials">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Post</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="uploaded" role="tabpanel" aria-labelledby="uploaded-tab" style="height: 400px;">
                        <!-- Uploaded Section -->
                        <div class="card m-3 overflow-y-auto" style="height: 360px;">
                            <div class="card-body">
                                <h5 class="card-title">Uploaded</h5>
                                <div id="uploadedFiles">
                                    <?php

                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>