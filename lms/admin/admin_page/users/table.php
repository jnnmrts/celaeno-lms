<!-- START OF USERS TABLE  -->

<?php
include ("../../database/connection.php");

// Delete user if delete button is clicked
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_user_id'])) {
    $userId = $_POST['delete_user_id'];
    $sql = "DELETE FROM user WHERE id = $userId";
    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('The user has been Deleted successfully!');
              </script>";
    } else {
        echo "Error deleting user: " . $conn->error;
    }
}

// Fetch user data from the database
$sql = "SELECT * FROM user ORDER BY id DESC";
$result = $conn->query($sql);

$userRows = "";
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        $userRows .= "<tr>";
        $userRows .= "<td>" . $row["first_name"] . "</td>";
        $userRows .= "<td>" . $row["middle_name"] . "</td>";
        $userRows .= "<td>" . $row["last_name"] . "</td>";
        $userRows .= "<td>" . $row["student_number"] . "</td>";
        $userRows .= "<td>" . $row["strand_track"] . "</td>";
        $userRows .= "<td>" . $row["userType"] . "</td>";
        $userRows .= "<td><span class='badge badge-" . ($row["status"] == "Approved" ? "success" : "warning") . "'>" . $row["status"] . "</span></td>";
        $userRows .= "<td>";
        $userRows .= "<button class='btn btn-primary btn-sm view-btn' data-user-id='" . $row["id"] . "'>View</button>";
        $userRows .= "<button class='btn btn-info btn-sm edit-btn' data-user-id='" . $row["id"] . "'>Edit</button>";

        $userRows .= "<form method='post' style='display: inline;' onsubmit='return confirm(\"Are you sure you want to delete this user?\")'>
                        <input type='hidden' name='delete_user_id' value='" . $row["id"] . "'>
                        <button type='submit' class='btn btn-danger btn-sm delete-btn'>Delete</button>
                      </form>";
        $userRows .= "</td>";
        $userRows .= "</tr>";
    }
} else {
    $userRows = "<tr><td colspan='7'>No users found</td></tr>";
}

$conn->close();
?>


<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">Users</h5>
                    <input type="text" id="searchInput" class="form-control mb-3" placeholder="Search...">

                    <!-- START OF USERS TABLE  -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Last Name</th>
                                <th>Student Number</th>
                                <th>Strand & Track</th>
                                <th>User Type</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="tableBody">
                            <?php echo $userRows; ?>
                        </tbody>
                    </table>
                    <!-- END OF USERS TABLE  -->
                </div>
            </div>
        </div>
    </div>
</div>


<!-- END OF USERS TABLE  -->

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    document.querySelectorAll('.view-btn').forEach(item => {
    item.addEventListener('click', event => {
        // Get user ID from data attribute
        const userId = item.getAttribute('data-user-id');
        // Redirect to view page with user ID
        window.location.href = 'users_view_page.php?id=' + userId;
    });
});

document.querySelectorAll('.edit-btn').forEach(item => {
    item.addEventListener('click', event => {
        // Get user ID from data attribute
        const userId = item.getAttribute('data-user-id');
        // Redirect to edit page with user ID
        window.location.href = 'users_edit_page.php?id=' + userId;
    });
});


    document.querySelectorAll('.delete-btn').forEach(item => {
      item.addEventListener('click', event => {
        // Perform delete action
        console.log('Delete action triggered');
      });
    });

    // Search function
    function searchTable() {
      var input, filter, table, tbody, tr, td, i, j, txtValue;
      input = document.getElementById("searchInput");
      filter = input.value.toUpperCase();
      table = document.querySelector("table");
      tbody = document.getElementById("tableBody");
      tr = tbody.getElementsByTagName("tr");

      // Loop through all table rows, and hide those who don't match the search query
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td");
        for (j = 0; j < td.length; j++) {
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
