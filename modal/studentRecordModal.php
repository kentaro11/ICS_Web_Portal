<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Record - ICS Guidance Portal</title>
    <link rel="stylesheet" href="../css/classScheduleModal.css">
</head>

<body>
    <!-- Modal -->
    <div class="modal fade modal-xl" id="studentRecordModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" id="staticBackdropLabel">STUDENT RECORD</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Search Bar -->
                    <div class="row search-bar">
                        <div class="col-10">
                            <input type="text" class="form-control" placeholder="Search Student">
                        </div>
                        <div class="col-2 d-flex justify-content-between">
                            <button class="icon-btn">
                                <img src="https://img.icons8.com/material-outlined/24/000000/upload.png" alt="Upload">
                            </button>
                            <button class="icon-btn">
                                <img src="https://img.icons8.com/material-outlined/24/000000/synchronize.png" alt="Sync">
                            </button>
                            <button class="icon-btn">
                                <img src="https://img.icons8.com/material-outlined/24/000000/filter.png" alt="Filter">
                            </button>
                        </div>
                    </div>

                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table table-bordered text-center">
                            <thead class="table-warning">
                                <tr>
                                    <th scope="col">LRN</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Sex</th>
                                    <th scope="col">Grade</th>
                                    <th scope="col">Section</th>
                                    <th scope="col">Address</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Empty rows for now -->
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>