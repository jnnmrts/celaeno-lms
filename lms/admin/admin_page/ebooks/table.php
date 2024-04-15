

<div class="col-lg-12 mb-4">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title mb-4">E-Books</h5>
      <input type="text" id="searchInput" class="form-control mb-3" placeholder="Search...">

      <!-- START OF BOOKS TABLE  -->
      <table class="table table-striped">
        <thead>
          <tr>
            <th>E-Book Title</th>
            <th>Author</th>
            <th>Publisher</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody id="tableBody">
          <?php
          // Fetch E-Books data from the database
          include("../../database/connection.php");
          $sql = "SELECT * FROM ebooks";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>" . $row["ebook_title"] . "</td>";
              echo "<td>" . $row["authors"] . "</td>";
              echo "<td>" . $row["publisher"] . "</td>";
              echo "<td>" . $row["status"] . "</td>";
              echo "<td>";
              echo "<button type='button' class='btn btn-primary view-btn' data-book-id='" . $row["ebook_id"] . "'>View</button>";
              echo "<button type='button' class='btn btn-info edit-btn' data-book-id='" . $row["ebook_id"] . "'>Edit</button>";
              echo "<button type='button' class='btn btn-danger delete-btn' data-book-id='" . $row["ebook_id"] . "'>Delete</button>";
              echo "</td>";
              echo "</tr>";
            }
          } else {
            echo "<tr><td colspan='5'>No E-Books found</td></tr>";
          }
          $conn->close();
          ?>
        </tbody>
      </table>
      <!-- END OF BOOKS TABLE  -->

    </div>
  </div>
</div>

<script>
  // Add event listeners to the buttons
  document.querySelectorAll('.view-btn').forEach(item => {
    item.addEventListener('click', event => {
      const ebookId = item.getAttribute('data-book-id');
      window.location.href = 'ebooks_view_page.php?id=' + ebookId;
    });
  });

  document.querySelectorAll('.edit-btn').forEach(item => {
    item.addEventListener('click', event => {
      const ebookId = item.getAttribute('data-book-id');
      window.location.href = 'ebooks_edit_page.php?id=' + ebookId;
    });
  });

  document.querySelectorAll('.delete-btn').forEach(item => {
    item.addEventListener('click', event => {
      const ebookId = item.getAttribute('data-book-id');
      if (confirm('Are you sure you want to delete this E-Book?')) {
        window.location.href = 'admin_page/ebooks/delete_ebook.php?id=' + ebookId;
      }
    });
  });

  // Search function
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
      if (found) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }

  // Add event listener to input for filtering
  document.getElementById("searchInput").addEventListener("input", searchTable);
</script>
