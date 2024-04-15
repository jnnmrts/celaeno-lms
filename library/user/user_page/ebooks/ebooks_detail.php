<?php
// Include database connection file
include("../../database/connection.php");

// Check if ebook ID is set in the URL
if(isset($_GET['id'])) {
    // Retrieve ebook ID from the URL
    $ebookId = $_GET['id'];

    // Fetch ebook data from the database based on the ebook ID
    $sql = "SELECT * FROM ebooks WHERE ebook_id = $ebookId";
    $result = $conn->query($sql);

    // Check if there is a result
    if ($result->num_rows > 0) {
        // Fetch ebook details
        $row = $result->fetch_assoc();

        // Display ebook details dynamically
?>
<div class="container border mt-3 pt-5 pb-3 bg-white rounded shadow">

    <div class="row container-fluid mb-5">

        <div class="col text-center mb-5">
            <img class="border rounded shadow" src="../../uploads/<?php echo $row['image_cover']; ?>" height="400" width="250" style="object-fit: cover">
        </div>

        <div class="col ">
            <span class="text-muted" style="font-size: 12px">Title</span>
            <h5><?php echo $row['ebook_title']; ?></h5>

            <span class="text-muted" style="font-size: 12px">Author(s)</span>
            <h5><?php echo $row['authors']; ?></h5>

            <span class="text-muted" style="font-size: 12px">Publisher</span>
            <h5><?php echo $row['publisher']; ?></h5>

            <span class="text-muted" style="font-size: 12px">Publication Date</span>
            <h5><?php echo $row['publication_date']; ?></h5>

            <span class="text-muted" style="font-size: 12px">Language</span>
            <h5><?php echo $row['language']; ?></h5>

            <span class="text-muted" style="font-size: 12px">Access URL</span>
            <h5><?php echo $row['access_url']; ?></h5>

            <span class="text-muted" style="font-size: 12px">Subject</span>
            <h5><?php echo $row['subject']; ?></h5>

            <span class="text-muted" style="font-size: 12px">Format</span>
            <h5><?php echo $row['format']; ?></h5>
        </div>
    </div>

    <hr>

    <div class="text-justify p-1">
        <div>
            <h5>Description</h5>
        </div>
        <div>
            <p><?php echo $row['description']; ?></p>
        </div>
        <div>
            <a href="<?php echo $row['access_url']; ?>" class="btn btn-secondary"><i class="fa-solid fa-download"></i> Download this Ebook</a>
        </div>
    </div>
</div>
<?php
    } else {
        echo "<p>No ebook found with the provided ID.</p>";
    }
} else {
    echo "<p>No ebook ID provided.</p>";
}

// Close database connection
$conn->close();
?>
