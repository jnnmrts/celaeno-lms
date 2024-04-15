<div class="col-lg-12 mb-4">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title mb-4">Catalog</h5>
      <input type="text" id="searchInputCatalog" class="form-control mb-3" placeholder="Search...">

      <!-- START OF CATALOG TABLE -->
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Index Number</th>
            <th>Index Name</th>
            <th>Index Category</th>
            <!--<th>Action</th>-->
          </tr>
        </thead>
        <tbody id="tableBodyCatalog">
          <?php
          // Include your database connection file
          include("../../database/connection.php");

          // Fetch catalog data from the database
          $sql = "SELECT * FROM catalog";
          $result = $conn->query($sql);

          // Check if there are rows in the result
          if ($result->num_rows > 0) {
              // Output data of each row
              while($row = $result->fetch_assoc()) {
                  echo "<tr>";
                  echo "<td>" . $row["catalog_number"] . "</td>";
                  echo "<td>" . $row["catalog_name"] . "</td>";
                  echo "<td>" . $row["catalog_category"] . "</td>";
                  echo "<td>";
                  //echo "<button type='button' class='btn btn-info' onclick=\"window.location.href = 'catalog_edit_page.php?id=" . $row["catalog_id"] . "';\">Edit</button>";
                  //echo "<button type='button' class='btn btn-danger'>Delete</button>";
                  echo "</td>";
                  echo "</tr>";
              }
          } else {
              echo "<tr><td colspan='3'>No catalog items found</td></tr>";
          }

          // Close the database connection
          $conn->close();
          ?>
        </tbody>
      </table>
      <!-- END OF CATALOG TABLE -->
    </div>
  </div>
</div>

<script>
  // SEARCH FUNCTION
  function searchTableCatalog() {
    var input, filter, table, tbody, tr, td, i, txtValue;
    input = document.getElementById("searchInputCatalog");
    filter = input.value.toUpperCase();
    table = document.querySelector("table");
    tbody = document.getElementById("tableBodyCatalog");
    tr = tbody.getElementsByTagName("tr");

    // Loop through all table rows, and hide those that don't match the search query
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td");
      var found = false;
      for (var j = 0; j < td.length; j++) {
        var cell = td[j];
        if (cell) {
          txtValue = cell.textContent || cell.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            found = true;
            break;
          }
        }
      }
      tr[i].style.display = found ? "" : "none";
    }
  }

  // Add event listener to input for filtering
  document.getElementById("searchInputCatalog").addEventListener("input", searchTableCatalog);
</script>
