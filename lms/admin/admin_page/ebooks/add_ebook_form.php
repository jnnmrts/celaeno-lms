

<div class="container mt-5">
    <h3 class="page-heading mb-4">Add New E-Book</h3>
    <div class="row mb-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">E-Book Details</h5>

                    <!-- Start of Add E-Book Form -->
                    <form action="admin_page/ebooks/add_ebook_form_backend.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="ebookTitle">Title</label>
                            <input type="text" class="form-control p-input" id="ebookTitle" name="ebookTitle" placeholder="Enter Title" required>
                        </div>
                        <div class="form-group">
                            <label for="authors">Author(s)</label>
                            <input type="text" class="form-control p-input" id="authors" name="authors" placeholder="Enter Author(s)" required>
                        </div>
                        <div class="form-group">
                            <label for="publisher">Publisher</label>
                            <input type="text" class="form-control p-input" id="publisher" name="publisher" placeholder="Enter Publisher" required>
                        </div>
                        <div class="form-group">
                            <label for="publicationDate">Publication Date</label>
                            <input type="date" class="form-control p-input" id="publicationDate" name="publicationDate" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control p-input" id="description" name="description" placeholder="Enter Description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="language">Language</label>
                            <input type="text" class="form-control p-input" id="language" name="language" placeholder="Enter Language" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control p-input" id="subject" name="subject" placeholder="Enter Subject" required>
                        </div>
                        <div class="form-group">
                            <label for="format">Format</label>
                            <input type="text" class="form-control p-input" id="format" name="format" placeholder="Enter Format" required>
                        </div>
                        <div class="form-group">
                            <label for="accessUrl">Access URL</label>
                            <input type="text" class="form-control p-input" id="accessUrl" name="accessUrl" placeholder="Enter Access URL" required>
                        </div>
                        <div class="form-group">
                            <label for="imageCover">Image Cover</label>
                            <input type="file" class="form-control-file" id="imageCover" name="imageCover" required>
                        </div>

                        <!-- START OF SUBMIT BUTTON -->
                        <button type="submit" class="btn btn-primary">Add E-Book</button>
                        <button type="button" class="btn btn-info mr-2" onclick="window.location.href='ebooks.php'">Cancel</button>
                        <!-- END OF SUBMIT BUTTON -->

                    </form>
                    <!-- End of Add E-Book Form -->

                </div>
            </div>
        </div>
    </div>
</div>
