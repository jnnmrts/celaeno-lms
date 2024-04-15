<div class="container mt-5">
  <h3 class="page-heading mb-4">Edit Shelving Name</h3>
  <div class="row mb-2">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-4">Shelving Name</h5>

          <!-- START OF EDIT CATALOG FORM -->
          <form id="editShelvingForm" method="post" action="update_shelving.php">
            <div class="form-group">
                <?php
                    // Include your database connection file
                    include("../../database/connection.php");

                    if(isset($_GET['shelving_id'])) {
                    $userId = $_GET['shelving_id'];

                    // Fetch shelving names data from the database
                    $sql = "SELECT * FROM shelving WHERE id = $userId";
                    $result = $conn->query($sql);

                    // Check if there are rows in the result
                    if ($result->num_rows > 0) {
                        // Output text inputs for each shelving name
                        while($row = $result->fetch_assoc()) {
                            echo "<div class='form-group'>";
                            echo "<label for='editShelvingName'>Shelving Name</label>";
                            echo "<input type='text' class='form-control p-input' name='editShelvingName' value='" . $row["shelving_name"] . "'>";
                            echo "</div>";
                        }
                    } else {
                        echo "<div class='form-group'>";
                        echo "<label for='editShelvingName'>Shelving Name</label>";
                        echo "<input type='text' class='form-control p-input' name='editShelvingName' value=''>";
                        echo "</div>";
                    }

                    } else {
                        echo "User ID not provided";
                        exit; // Stop further execution
                    }
                    ?>
            </div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
            <a href="catalog.php" class="btn btn-primary">Back</a>
          </form>
          <!-- END OF EDIT CATALOG FORM -->

        </div>
      </div>
    </div>
  </div>
</div>
