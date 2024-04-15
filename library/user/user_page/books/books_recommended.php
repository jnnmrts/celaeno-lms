<div class="mt-5">
    <div class="text-dark">
        <h5>Books Available</h5>
    </div>

    <div class="row container">
        <?php
        // Include database connection file
        include("../../database/connection.php");

        // Fetch book data from the database
        $sql = "SELECT * FROM books";
        $result = $conn->query($sql);

        // Check if there are rows in the result
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                // Dynamically generate HTML structure for each book
                echo '<div class="col-lg-6 d-flex justify-content-center mb-2">';
                echo '<div class="d-flex shadow">';
                echo '<div class="bg-white">';
                echo '<a href="books_detail.php?id=' . $row["book_id"] . '">';
                echo '<img class="border" src="../../uploads/' . $row["image_cover"] . '" height="250" width="170" style="object-fit: cover">';
                echo '</a>';
                echo '</div>';
                echo '<div class="bg-white px-2 pt-1" style="height: 250px;width: 170px">';
                echo '<span class="text-muted" style="font-size: 12px">Title</span>';
                echo '<h6>' . $row["book_title"] . '</h6>';
                echo '<span class="text-muted" style="font-size: 12px">Author</span>';
                echo '<h6>' . $row["authors"] . '</h6>';
                echo '<span class="text-muted" style="font-size: 12px">Catalogue</span>';
                echo '<h6>' . $row["catalog_name"] . '</h6>';
                echo '<span class="text-muted" style="font-size: 12px">Status</span>';
                echo '<h6>' . $row["status"] . '</h6>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo '<div class="col-lg-12">';
            echo '<p>No books found.</p>';
            echo '</div>';
        }

        // Close database connection
        $conn->close();
        ?>
    </div>
</div>
