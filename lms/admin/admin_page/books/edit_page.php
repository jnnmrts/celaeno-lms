<?php
include("view_page_backend.php");
?>

<div class="container mt-5">
    <h3 class="page-heading mb-4">Edit Book Details</h3>
    <div class="row mb-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">Book Details</h5>

                    <!-- Start of Edit Form -->
                    <form action="admin_page/books/update_book.php" method="POST" class="forms-sample">
                        <div class="form-group">
                            <label for="editTitle">Title</label>
                            <input type="text" class="form-control" id="editTitle" name="editTitle" value="<?php echo $row['book_title']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="editAuthors">Author(s)</label>
                            <input type="text" class="form-control" id="editAuthors" name="editAuthors" value="<?php echo $row['authors']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="editISBN">ISBN (International Standard Book Number)</label>
                            <input type="text" class="form-control" id="editISBN" name="editISBN" value="<?php echo $row['isbn']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="editPublisher">Publisher</label>
                            <input type="text" class="form-control" id="editPublisher" name="editPublisher" value="<?php echo $row['publisher']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="editPublicationDate">Publication Date</label>
                            <input type="text" class="form-control" id="editPublicationDate" name="editPublicationDate" value="<?php echo $row['publication_date']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="editPlaceOfPublication">Place of Publication</label>
                            <input type="text" class="form-control" id="editPlaceOfPublication" name="editPlaceOfPublication" value="<?php echo $row['place_of_publication']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="editEdition">Edition</label>
                            <input type="text" class="form-control" id="editEdition" name="editEdition" value="<?php echo $row['edition']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="editLanguage">Language</label>
                            <input type="text" class="form-control" id="editLanguage" name="editLanguage" value="<?php echo $row['language']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="editNumPages">Number of Pages</label>
                            <input type="text" class="form-control" id="editNumPages" name="editNumPages" value="<?php echo $row['number_of_pages']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="editShelvingLocation">Shelving Location</label>
                            <select class="form-control" id="editShelvingLocation" name="editShelvingLocation">
                                <?php
                                include("../../database/connection.php");
                                $shelvingLocationsQuery = "SELECT * FROM shelving";
                                $shelvingLocationsResult = $conn->query($shelvingLocationsQuery);
                                if ($shelvingLocationsResult->num_rows > 0) {
                                    while ($shelvingLocationRow = $shelvingLocationsResult->fetch_assoc()) {
                                        // Check if the current shelving location matches the book's shelving location
                                        $selected = ($shelvingLocationRow['shelving_name'] == $row['shelving_name']) ? 'selected' : '';
                                        echo "<option value='" . $shelvingLocationRow['shelving_name'] . "' $selected>" . $shelvingLocationRow['shelving_name'] . "</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="editCallNumber">Call Number (DDC)</label>
                            <input type="text" class="form-control" id="editCallNumber" name="editCallNumber" value="<?php echo $row['call_number_ddc']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="editAccessionNumber">Accession Number</label>
                            <input type="text" class="form-control" id="editAccessionNumber" name="editAccessionNumber" value="<?php echo $row['accession_number']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="editCopyrightYear">Copyright Year</label>
                            <input type="text" class="form-control" id="editCopyrightYear" name="editCopyrightYear" value="<?php echo $row['copyright_year']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="editSubject">Subject</label>
                            <input type="text" class="form-control" id="editSubject" name="editSubject" value="<?php echo $row['subject']; ?>">
                        </div>
                        <!-- Add more fields as needed -->
                        <input type="hidden" name="bookId" value="<?php echo $row['book_id']; ?>">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                        <a href="books.php" class="btn btn-secondary">Cancel</a>
                    </form>
                    <!-- End of Edit Form -->
                </div>
            </div>
        </div>
    </div>
</div>
