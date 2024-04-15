<?php
// Include database connection file
include("../../database/connection.php");

// Check if E-Book ID is set and valid
if(isset($_GET['id']) && is_numeric($_GET['id'])) {
    // Prepare SQL statement to fetch E-Book details by ID
    $sql = "SELECT * FROM ebooks WHERE ebook_id = ?";

    // Prepare and bind parameters
    if($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $_GET['id']);
        
        // Execute the statement
        $stmt->execute();
        
        // Store result
        $result = $stmt->get_result();
        
        // Check if result has rows
        if($result->num_rows == 1) {
            // Fetch E-Book details
            $row = $result->fetch_assoc();
?>

<div class="container mt-5">
  <h3 class="page-heading mb-4">View E-Book Details</h3>
  <div class="row mb-2">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-4">E-Book Details</h5>

          <!-- Start of View Form -->
          <form id="viewEbookForm">
            <div class="form-group">
              <label for="viewTitle">Title</label>
              <input type="text" class="form-control" id="viewTitle" value="<?php echo $row['ebook_title']; ?>" readonly>
            </div>
            <div class="form-group">
              <label for="viewAuthors">Author(s)</label>
              <input type="text" class="form-control" id="viewAuthors" value="<?php echo $row['authors']; ?>" readonly>
            </div>
            <div class="form-group">
              <label for="viewPublisher">Publisher</label>
              <input type="text" class="form-control" id="viewPublisher" value="<?php echo $row['publisher']; ?>" readonly>
            </div>
            <div class="form-group">
              <label for="viewPublicationDate">Publication Date</label>
              <input type="text" class="form-control" id="viewPublicationDate" value="<?php echo $row['publication_date']; ?>" readonly>
            </div>
            <div class="form-group">
              <label for="viewDescription">Description</label>
              <textarea class="form-control" id="viewDescription" rows="4" readonly><?php echo $row['description']; ?></textarea>
            </div>
            <div class="form-group">
              <label for="viewLanguage">Language</label>
              <input type="text" class="form-control" id="viewLanguage" value="<?php echo $row['language']; ?>" readonly>
            </div>
            <div class="form-group">
              <label for="viewSubject">Subject</label>
              <input type="text" class="form-control" id="viewSubject" value="<?php echo $row['subject']; ?>" readonly>
            </div>
            <div class="form-group">
              <label for="viewFormat">Format</label>
              <input type="text" class="form-control" id="viewFormat" value="<?php echo $row['format']; ?>" readonly>
            </div>
            <div class="form-group">
              <label for="viewAccessUrl">Access URL</label>
              <input type="text" class="form-control" id="viewAccessUrl" value="<?php echo $row['access_url']; ?>" readonly>
            </div>

            <!-- View IMAGE File Section -->
            <div class="form-group row m-3">
              <label class="col-sm-2 col-form-label">Image Cover</label>
              <div class="col-sm-10">
                <img id="viewImageCover" src="../../uploads/<?php echo $row['image_cover']; ?>" alt="Image Cover" style="max-width: 100%; max-height: 200px;">
              </div>
            </div>

            <!-- Back Button -->
            <a href="ebooks.php" class="btn btn-primary">Back</a>
          </form>
          <!-- End of View Form -->

        </div>
      </div>
    </div>
  </div>
</div>

<?php
            // Close statement
            $stmt->close();
        } else {
            echo "<p>E-Book not found</p>";
        }
    } else {
        echo "<p>Error: Could not prepare SQL statement</p>";
    }
} else {
    echo "<p>Invalid E-Book ID</p>";
}

// Close database connection
$conn->close();
?>
