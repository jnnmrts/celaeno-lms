

<!-- start Recommended content -->
<div class="mt-5 ">
	<div class="text-dark">
		<h5>Recommended</h4>
	</div>


	<div class="row container">

		<?php
// Include database connection file
include("../../database/connection.php");

// Fetch ebooks data from the database
$sql = "SELECT * FROM ebooks";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Loop through each ebook data and display dynamically
    while ($row = $result->fetch_assoc()) {
        // Start a new column for each ebook
        echo '<div class="col d-flex justify-content-center mb-2">';
        echo '<div class="d-flex shadow">';
        
        // Display ebook image
        echo '<div class="bg-white">';
        echo '<a href="ebook_detail.php?id=' . $row["ebook_id"] . '">';
        echo '<img class="border" src="../../uploads/' . $row["image_cover"] . '" height="250" width="170" style="object-fit: cover">';
        echo '</a>';
        echo '</div>';
        
        // Display ebook details
        echo '<div class="bg-white px-2 pt-1" style="height: 250px;width: 170px">';
        echo '<span class="text-muted" style="font-size: 12px">Title</span>';
        echo '<h6>' . $row["ebook_title"] . '</h6>';
        
        echo '<span class="text-muted" style="font-size: 12px">Author</span>';
        echo '<h6>' . $row["authors"] . '</h6>';
        
        echo '<span class="text-muted" style="font-size: 12px">Language</span>';
        echo '<h6>' . $row["language"] . '</h6>';
        
        echo '<span class="text-muted" style="font-size: 12px">Status</span>';
        echo '<h6>' . $row["status"] . '</h6>';
        
        echo '</div>'; // End of details div
        echo '</div>'; // End of shadow div
        echo '</div>'; // End of col div
    }
} else {
    echo "<p>No E-Books found</p>";
}

$conn->close();
?>


	</div>


</div>
<!-- end Recommended content -->