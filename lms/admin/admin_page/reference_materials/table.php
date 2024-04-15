<div class="col-lg-12 mb-4">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title mb-4">Reference Materials</h5>
      <input type="text" id="searchInput" class="form-control mb-3" placeholder="Search...">

      <!-- START OF NEWSPAPERS TABLE  -->
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Title</th>
            <th>Author(s) or Editor(s)</th>
            <th>Publisher</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody id="tableBody">
          <tr>
            <td>Title 1</td>
            <td>Author 1</td>
            <td>ISBN Date 1</td>
            <td>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewModal">View</button>
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#editModal">Edit</button>
              <button type="button" class="btn btn-danger">Delete</button>
            </td>
          </tr>
          <tr>
            <td>Title 2</td>
            <td>Author 2</td>
            <td>ISBN Date 1</td>
            <td>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewModal">View</button>
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#editModal">Edit</button>
              <button type="button" class="btn btn-danger">Delete</button>
            </td>
          </tr>
          <!-- Add more rows as needed -->
        </tbody>
      </table>
      <!-- END OF NEWSPAPERS TABLE  -->
      
    </div>
  </div>
</div>


<script>

// START SEARCH FUNCTION

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


// END OF SEARCH FUNCTION

  // Function to handle the click event of the "View" button
  document.querySelectorAll('.btn-primary').forEach(item => {
    item.addEventListener('click', event => {
      // Retrieve the newspaper details from the corresponding table row
      const row = item.closest('tr');
      const newspaperTitle = row.cells[0].innerText;
      const publisher = row.cells[1].innerText;
      const publicationDate = row.cells[2].innerText;

      // Store the newspaper details in localStorage
      localStorage.setItem('newspaperDetails', JSON.stringify({
        newspaperTitle: newspaperTitle,
        publisher: publisher,
        publicationDate: publicationDate
      }));

      // Redirect to the view page
      window.location.href = 'reference_materials_view_reference_materials.php'; // Replace 'newspaper_view.php' with the actual URL of the view page
    });
  });

  // Function to handle the click event of the "Edit" button
  document.querySelectorAll('.btn-info').forEach(item => {
    item.addEventListener('click', event => {
      // Retrieve the newspaper details from the corresponding table row
      const row = item.closest('tr');
      const newspaperTitle = row.cells[0].innerText;
      const publisher = row.cells[1].innerText;
      const publicationDate = row.cells[2].innerText;

      // Store the newspaper details in localStorage
      localStorage.setItem('newspaperDetails', JSON.stringify({
        newspaperTitle: newspaperTitle,
        publisher: publisher,
        publicationDate: publicationDate
      }));

      // Redirect to the edit page
      window.location.href = 'reference_materials_edit_reference_materials.php'; // Replace 'newspaper_edit.php' with the actual URL of the edit page
    });
  });
</script>

