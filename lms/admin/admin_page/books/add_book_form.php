<div class="container mt-5">
  <h3 class="page-heading mb-4">Add New Book</h3>
  <div class="row mb-2">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-4">Book Details</h5>

          <!-- START OF ADD BOOK FORM -->
          <form id="addBookForm" method="post" action="admin_page/books/add_book.php" enctype="multipart/form-data">
            <div class="form-group">
              <label for="bookTitle">Title</label>
              <input type="text" class="form-control p-input" id="bookTitle" name="bookTitle" placeholder="Enter Title" required>
            </div>
            <div class="form-group">
              <label for="authors">Author(s)</label>
              <input type="text" class="form-control p-input" id="authors" name="authors" placeholder="Enter Author(s)" required>
            </div>
            <div class="form-group">
                  <label for="catalogCategory">Catalog Category</label>
                  <select class="form-control p-input" id="catalogCategory" name="catalogCategory">
                      <?php
                      include("../../database/connection.php");
                      // Fetch catalog categories from the database
                      $sql = "SELECT * FROM catalog";
                      $result = $conn->query($sql);

                      // Check if there are rows in the result
                      if ($result->num_rows > 0) {
                          // Output options for each catalog category
                          while($row = $result->fetch_assoc()) {
                              echo "<option value='" . $row["catalog_name"] . "'>" . $row["catalog_name"] . "</option>";
                          }
                      } else {
                          echo "<option value=''>No catalog categories found</option>";
                      }
                      ?>
                  </select>
              </div>

            <div class="form-group">
              <label for="isbn">ISBN</label>
              <input type="text" class="form-control p-input" id="isbn" name="isbn" placeholder="Enter ISBN" required>
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
              <label for="placeOfPublication">Place of Publication</label>
              <input type="text" class="form-control p-input" id="placeOfPublication" name="placeOfPublication" placeholder="Enter Place of Publication" required>
            </div>
            <div class="form-group">
              <label for="edition">Edition</label>
              <input type="text" class="form-control p-input" id="edition" name="edition" placeholder="Enter Edition" required>
            </div>
            <div class="form-group">
              <label for="language">Language</label>
              <input type="text" class="form-control p-input" id="language" name="language" placeholder="Enter Language" required>
            </div>
            <div class="form-group">
              <label for="numberOfPages">Number of Pages</label>
              <input type="number" class="form-control p-input" id="numberOfPages" name="numberOfPages" placeholder="Enter Number of Pages" required>
            </div>
            <div class="form-group">
                <label for="shelvingLocation">Shelving Location</label>
                <select class="form-control" id="shelvingLocation" name="shelvingLocation">
                    <?php
                    // Include database connection file
                    include("database/connection.php");

                    // Fetch shelving locations from the database
                    $sql = "SELECT * FROM shelving";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Output data of each row as dropdown options
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row["shelving_name"] . "'>" . $row["shelving_name"] . "</option>";
                        }
                    } else {
                        echo "<option value=''>No shelving locations found</option>";
                    }

                    // Close database connection
                    $conn->close();
                    ?>
                </select>
            </div>

            <div class="form-group">
              <label for="callNumber">Call Number (DDC)</label>
              <input type="text" class="form-control p-input" id="callNumber" name="callNumber" placeholder="Enter Call Number (DDC)" required>
            </div>
            <div class="form-group">
              <label for="accessionNumber">Accession Number</label>
              <input type="text" class="form-control p-input" id="accessionNumber" name="accessionNumber" placeholder="Enter Accession Number" required>
            </div>
            <div class="form-group">
              <label for="copyrightYear">Copyright Year</label>
              <input type="number" class="form-control p-input" id="copyrightYear" name="copyrightYear" placeholder="Enter Copyright Year" required>
            </div>
            <div class="form-group">
              <label for="subject">Subject</label>
              <input type="text" class="form-control p-input" id="subject" name="subject" placeholder="Enter Subject" required>
            </div>
            <div class="form-group">
              <label for="imageCover">Image Cover</label>
              <input type="file" class="form-control-file" id="imageCover" name="imageCover" required>
            </div>

            <!-- START OF SUBMIT BUTTON -->
            <button type="submit" class="btn btn-primary">Add Book</button>
            <button type="button" class="btn btn-info mr-2" onclick="window.location.href='books.php'">Cancel</button>
            <!-- END OF SUBMIT BUTTON -->
          </form>
          <!-- END OF ADD BOOK FORM -->
        </div>
      </div>
    </div>
  </div>
</div>
