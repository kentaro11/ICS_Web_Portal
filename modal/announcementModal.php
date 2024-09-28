<link rel="stylesheet" href="../css/modal.css">

<!-- Modal -->
<div class="modal fade modal-xl" id="announcementModal" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="height: 450px !important;">
            <div class="modal-header justify-content-center" style="border-bottom: none; height: 100px !important; padding: 0 !important;">
                <h1 class="modal-title" id="staticBackdropLabel">ANNOUNCEMENT</h1>
                <button type="button" class="btn-close position-absolute top-0 end-0" style="top: 25px !important; right: 25px !important;" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="padding: 0;">
                <div class="announcement-card px-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="profile-icon" style="width: 100px;">
                            <img class="img-fluid" src="../img/avatar.jpg" alt="profilePicture" style="width: 100px;">
                        </div>
                        <div>
                            <strong>JUAN C. DELA CRUZ</strong><br>
                            <span>Guidance Counselor</span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <form action="../function/createAnnouncement.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="announcementTitle" placeholder="Title" name="announcement_title" required>
                            </div>

                            <div class="mb-3">
                                <input type="text" class="form-control" id="announcementText" placeholder="Type Text" name="announcement_text" required>
                            </div>

                            <div class="mb-3">
                                <input class="form-control" type="file" id="announcementFile" name="announcement_file" required>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>