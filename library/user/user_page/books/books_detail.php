<?php
// Include database connection file
include("../../database/connection.php");

// Check if book ID is set in the URL
if(isset($_GET['id'])) {
    // Retrieve book ID from the URL
    $bookId = $_GET['id'];

    // Fetch book data from the database based on the book ID
    $sql = "SELECT * FROM books WHERE book_id = $bookId";
    $result = $conn->query($sql);

    // Check if there is a result
    if ($result->num_rows > 0) {
        // Fetch book details
        $row = $result->fetch_assoc();

        // Check if the book status is 'Borrowed'
        if($row['status'] == 'Borrowed') {
            // Display an alert box indicating that the book has already been borrowed
            echo "<script>alert('This Book has already been borrowed.');</script>";
        } else {
            // Display the borrow form if the book is available for borrowing
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Check if all required data is set
                if(isset($_POST['image_cover']) && isset($_POST['accession_number']) && isset($_POST['book_title'])) {
                    // Assign POST data to variables
                    $imageCover = $_POST['image_cover'];
                    $accessionNumber = $_POST['accession_number'];
                    $bookTitle = $_POST['book_title'];
                    
                    // Set due date as 3 days after the current date
                    $dueDate = date('Y-m-d', strtotime('+3 days'));
                    
                    // Insert data into the borrow table
                    $sql = "INSERT INTO borrow (image_cover, accession_number, book_title, date_borrowed, due_date)
                            VALUES ('$imageCover', '$accessionNumber', '$bookTitle', NOW(), '$dueDate')";
                    
                    if ($conn->query($sql) === TRUE) {
                        // Update the status of the book to 'Borrowed' in the books table
                        $updateSql = "UPDATE books SET status = 'Borrowed' WHERE book_id = $bookId";
                        if ($conn->query($updateSql) === TRUE) {
                            // Redirect to some page after successful borrowing
                            echo "<script>
                            alert('Book Borrowed Successfully.');
                            window.location.href = 'index.php';
                          </script>";
                        } else {
                            echo "Error updating book status: " . $conn->error;
                        }
                    } else {
                        echo "Error inserting borrowing details: " . $conn->error;
                    }
                } else {
                    echo "Required data is missing.";
                }
            }
        }
?>
    <div class="container border mt-3 pt-5 pb-3 bg-white rounded shadow">

        <div class="row container-fluid mb-5">

            <div class="col text-center mb-5">
                <img class="border rounded shadow" src="../../uploads/<?php echo $row['image_cover']; ?>" height="400" width="250" style="object-fit: cover">
            </div>

            <div class="col ">
                <span class="text-muted" style="font-size: 12px">Title</span>
                <h5><?php echo $row['book_title']; ?></h5>

                <span class="text-muted" style="font-size: 12px">Author(s)</span>
                <h5><?php echo $row['authors']; ?></h5>

                <span class="text-muted" style="font-size: 12px">Catalog</span>
                <h5><?php echo $row['catalog_name']; ?></h5>

                <span class="text-muted" style="font-size: 12px">Copyright Date</span>
                <h5><?php echo $row['copyright_year']; ?></h5>

                <span class="text-muted" style="font-size: 12px">Status</span>
                <h5><?php echo $row['status']; ?></h5>

                <span class="text-muted" style="font-size: 12px">Times Borrowed</span>
                <h5><?php echo $row['times_borrowed']; ?></h5>
            </div>
        </div>

        <!-- Add the rest of the content here based on your requirement -->

        <!-- start title second content -->
    <div class="container">
        <h6>Other Information</h6>
    </div>
    <!-- end title second content -->

    <!-- start second content -->
    <div class="row container-fluid mb-5">

        <div class="col p-3">
            <span class="text-muted" style="font-size: 12px">ISBN((International Standard Book Number))</span>
            <h5><?php echo $row['isbn']; ?></h5>

            <span class="text-muted" style="font-size: 12px">Publisher</span>
            <h5><?php echo $row['publisher']; ?></h5>

            <span class="text-muted" style="font-size: 12px">Publication Date</span>
            <h5><?php echo $row['publication_date']; ?></h5>

            <span class="text-muted" style="font-size: 12px">Place of Publication </span>
            <h5><?php echo $row['place_of_publication']; ?></h5>

            <span class="text-muted" style="font-size: 12px">Language: <?php echo $row['language']; ?></span>

            <span class="text-muted" style="font-size: 12px">Number of Pages</span>
            <h5><?php echo $row['number_of_pages']; ?></h5>


        </div>

        <div class="col p-3">
            <span class="text-muted" style="font-size: 12px">Shelving Location</span>
            <h5><?php echo $row['shelving_location']; ?></h5>

            <span class="text-muted" style="font-size: 12px">Call Number (DDC)</span>
            <h5><?php echo $row['call_number_ddc']; ?></h5>

            <span class="text-muted" style="font-size: 12px">Accession Number</span>
            <h5><?php echo $row['accession_number']; ?></h5>

            <span class="text-muted" style="font-size: 12px">Subject</span>
            <h5><?php echo $row['subject']; ?></h5>

            <span class="text-muted" style="font-size: 12px">Image Cover</span>
            <h5><?php echo $row['image_cover']; ?></h5>

            <!-- Add more details as needed -->
        </div>
    </div>
    <!-- end second content -->

    <hr>

    <!-- start third content -->
    <div class="text-justify p-1">

        <!-- start third title content -->
        <div>
            <h5>Description</h5>
        </div>
        <!-- end third title content -->

        <!-- start description -->
        <div>
            <!--<p><?php echo $row['description']; ?></p>-->
        </div>
        <!-- end description -->

        <!-- start download button -->
        <!-- start download button -->
        <div>
            <form method="post">
                <input type="hidden" name="image_cover" value="<?php echo $row['image_cover']; ?>">
                <input type="hidden" name="accession_number" value="<?php echo $row['accession_number']; ?>">
                <input type="hidden" name="book_title" value="<?php echo $row['book_title']; ?>">
                <button type="submit" class="btn btn-secondary"><i class="fa-solid fa-book"></i> Borrow this Book </button>
            </form>
        </div>
        <!-- end download button -->

        <!-- end download button -->
        
    </div>
    <!-- end third content -->

    </div>

    <?php
        } else {
            echo "<p>No book found with the provided ID.</p>";
        }
    } else {
        echo "<p>No book ID provided.</p>";
    }

    // Close database connection
    $conn->close();
    ?>
