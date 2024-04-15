<div class="col-lg-12 mb-4">
  <div class="card">
    <div class="card-body">

      <!-- Input field for student number -->
      <div class="form-group">
        <label for="studentNumberInput">Enter Student Number:</label>
        <form id="fetchStudentForm" method="post" action="admin_page/student_log/fetch_student_data.php">
          <input type="text" id="studentNumberInput" name="studentNumber" class="form-control mb-3" placeholder="Student Number...">
          <button type="submit" id="fetchStudentButton" class="btn btn-primary">Enter Library</button> <!-- Changed button type to submit -->
        </form>
      </div>

      <h5 class="card-title mb-4">STUDENTS LOGS</h5>
      <input type="text" id="searchInput" class="form-control mb-3" placeholder="Search...">

      <!-- START OF STUDENT LOG TABLE -->
      <table class="table table-striped">
        <thead>
          <tr>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Student Number</th>
            <th>Strand & Track</th>
            <th>Date & Time Added</th>
          </tr>
        </thead>
        <tbody id="tableBody">
          <?php
            include("../../database/connection.php");

            // Fetch student logs data from the database in descending order based on log_date
            $sql = "SELECT * FROM student_logs ORDER BY log_date DESC";
            $result = $conn->query($sql);

            // Check if there are rows in the result
            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["first_name"] . "</td>";
                    echo "<td>" . $row["middle_name"] . "</td>";
                    echo "<td>" . $row["last_name"] . "</td>";
                    echo "<td>" . $row["student_number"] . "</td>";
                    echo "<td>" . $row["strand_track"] . "</td>";
                    echo "<td>" . $row["log_date"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No student logs found</td></tr>";
            }

            // Close the database connection
            $conn->close();
            ?>

        </tbody>
      </table>
      <!-- END OF STUDENT LOG TABLE -->
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
      td = tr[i].getElementsByTagName("td");
      for (var j = 0; j < td.length; j++) {
        var cell = td[j];
        if (cell) {
          txtValue = cell.textContent || cell.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
            break; // Break out of inner loop, no need to continue checking other cells in this row
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
  }

  // Add event listener to input for filtering
  document.getElementById("searchInput").addEventListener("input", searchTable);


</script>


