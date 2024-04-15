<?php
include("view_page_backend.php");
?>

<div class="container mt-5">
    <h3 class="page-heading mb-4">View Book Details</h3>
    <div class="row mb-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">Book Details</h5>

                    <!-- Start of View Form -->
                    <form class="forms-sample">
                        <div class="form-group">
                            <label for="viewTitle">Title</label>
                            <input type="text" class="form-control" id="viewTitle" value="<?php echo $row['book_title']; ?>"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="viewAuthors">Author(s)</label>
                            <input type="text" class="form-control" id="viewAuthors" value="<?php echo $row['authors']; ?>"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="viewAuthors">Catalog Category</label>
                            <input type="text" class="form-control" id="viewAuthors" value="<?php echo $row['catalog_name']; ?>"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="viewISBN">ISBN (International Standard Book Number)</label>
                            <input type="text" class="form-control" id="viewISBN" value="<?php echo $row['isbn']; ?>"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="viewPublisher">Publisher</label>
                            <input type="text" class="form-control" id="viewPublisher"
                                value="<?php echo $row['publisher']; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="viewPublicationDate">Publication Date</label>
                            <input type="text" class="form-control" id="viewPublicationDate"
                                value="<?php echo $row['publication_date']; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="viewPlaceOfPublication">Place of Publication</label>
                            <input type="text" class="form-control" id="viewPlaceOfPublication"
                                value="<?php echo $row['place_of_publication']; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="viewEdition">Edition</label>
                            <input type="text" class="form-control" id="viewEdition" value="<?php echo $row['edition']; ?>"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="viewLanguage">Language</label>
                            <input type="text" class="form-control" id="viewLanguage"
                                value="<?php echo $row['language']; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="viewNumPages">Number of Pages</label>
                            <input type="text" class="form-control" id="viewNumPages"
                                value="<?php echo $row['number_of_pages']; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="viewNumPages">Shelving Location</label>
                            <input type="text" class="form-control" id="viewNumPages"
                                value="<?php echo $row['shelving_location']; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="viewNumPages">Call Number</label>
                            <input type="text" class="form-control" id="viewNumPages"
                                value="<?php echo $row['call_number_ddc']; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="viewNumPages">Subject</label>
                            <input type="text" class="form-control" id="viewNumPages"
                                value="<?php echo $row['subject']; ?>" readonly>
                        </div>
                        <!-- Add more fields as needed -->
                    </form>
                    <!-- End of View Form -->

      <div class="form-group row m-3">
              <label class="col-sm-2 col-form-label">Image Cover</label>
              <div class="col-sm-10">
                <img id="viewImageCover" src="../../uploads/<?php echo $row['image_cover']; ?>" alt="Image Cover" style="max-width: 100%; max-height: 200px;">
              </div>
            </div>

                    <a href="books.php" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

