<div class="col-lg-12 mb-4">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title mb-4">Shelving</h5>
      <input type="text" id="searchInput" class="form-control mb-3" placeholder="Search...">

      <!-- START OF SHELVING LOCATIONS TABLE -->
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Shelving Location</th>
            <!--<th>Action</th>-->
          </tr>
        </thead>
        <tbody id="tableBody">
          <?php
            // Include your database connection file
            include("../../database/connection.php");

            // Fetch shelving locations from the database
            $sql = "SELECT * FROM shelving";
            $result = $conn->query($sql);

            // Check if there are rows in the result
            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["shelving_name"] . "</td>";
                    echo "<td>";
                    //echo "<button type='button' class='btn btn-info' onclick='window.location.href = \"shelving_edit_page.php?id=" . $row["shelving_id"] . "\";'>Edit</button>";
                    //echo "<button type='button' class='btn btn-danger'>Delete</button>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='2'>No shelving locations found</td></tr>";
            }

            // Close the database connection
            $conn->close();
          ?>
        </tbody>
      </table>
      <!-- END OF SHELVING LOCATIONS TABLE -->

    </div>
  </div>
</div>


<script>
  // SEARCH FUNCTION

  // JavaScript function to filter table rows based on input
  function searchTable() {
    var input, filter, table, tbody, tr, td, i, txtValue;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    table = document.querySelector("table");
    tbody = document.getElementById("tableBody");
    tr = tbody.getElementsByTagName("tr");

    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0]; // Only consider first column (shelving location)
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }

  // Add event listener to input for filtering
  document.getElementById("searchInput").addEventListener("input", searchTable);

</script>
