<?php
include("../../database/connection.php");

// Check if the e-book ID is provided in the URL
if (isset($_GET['id'])) {
    $ebookId = $_GET['id'];
    
    // Query to fetch e-book details from the database based on the provided ID
    $sql = "SELECT * FROM ebooks WHERE ebook_id = $ebookId";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if ($result) {
        // Fetch the e-book details as an associative array
        $ebook = mysqli_fetch_assoc($result);
    } else {
        // Handle the case where the query fails
        echo "Error fetching e-book details: " . mysqli_error($conn);
        exit; // Exit the script to prevent further execution
    }
} else {
    // Handle the case where the e-book ID is not provided in the URL
    echo "E-book ID is missing.";
    exit; // Exit the script to prevent further execution
}
?>

<div class="container mt-5">
    <h3 class="page-heading mb-4">Edit E-Book Details</h3>
    <div class="row mb-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">E-Book Details</h5>
                    
                    <!-- START EDIT FORM -->
                    <form id="editEbookForm" action="admin_page/ebooks/edit_page_backend.php" method="POST">
                      <input type="hidden" name="ebook_id" value="<?php echo $ebookId; ?>">

                        <div class="form-group">
                            <label for="editEbookTitle">Title</label>
                            <input type="text" class="form-control p-input" id="editEbookTitle" placeholder="Enter E-Book Title" value="<?php echo $ebook['ebook_title']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="editAuthors">Author(s)</label>
                            <input type="text" class="form-control p-input" id="editAuthors" placeholder="Enter Author(s)" value="<?php echo $ebook['authors']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="editPublisher">Publisher</label>
                            <input type="text" class="form-control p-input" id="editPublisher" placeholder="Enter Publisher" value="<?php echo $ebook['publisher']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="editPublicationDate">Publication Date</label>
                            <input type="date" class="form-control p-input" id="editPublicationDate" value="<?php echo $ebook['publication_date']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="editDescription">Description</label>
                            <textarea class="form-control p-input" id="editDescription" placeholder="Enter Description"><?php echo $ebook['description']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="editLanguage">Language</label>
                            <input type="text" class="form-control p-input" id="editLanguage" placeholder="Enter Language" value="<?php echo $ebook['language']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="editSubject">Subject</label>
                            <input type="text" class="form-control p-input" id="editSubject" placeholder="Enter Subject" value="<?php echo $ebook['subject']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="editFormat">Format</label>
                            <input type="text" class="form-control p-input" id="editFormat" placeholder="Enter Format" value="<?php echo $ebook['format']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="editAccessUrl">Access URL</label>
                            <input type="text" class="form-control p-input" id="editAccessUrl" placeholder="Enter Access URL" value="<?php echo $ebook['access_url']; ?>">
                        </div>

                        <!-- Add more form fields for other e-book details -->
                        
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                        <a href="ebooks.php" class="btn btn-primary">Back</a>
                    </form>
                    <!-- END EDIT FORM -->
                </div>
            </div>
        </div>
    </div>
</div>
