<div class="col-lg-12 mb-4">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title mb-4">Magazine and Journal</h5>
      <input type="text" id="searchInput" class="form-control mb-3" placeholder="Search...">

<!-- START OF BOOKS TABLE  -->

      <table class="table table-striped">
        <thead>
         <tr>
            <th>Title</th>
            <th>ISSN</th>
            <th>Frequency</th>
            <th>Subject</th>
            <th>Publisher</th>
            <th>Publication Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody id="tableBody">
          <tr>
            <td>Magazine 1</td>
            <td>1234-5678</td>
            <td>Monthly</td>
            <td>Science</td>
            <td>Publisher A</td>
            <td>2024-01-01</td>
            <td>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewModal">View</button>
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#editModal">Edit</button>
              <button type="button" class="btn btn-danger">Delete</button>
            </td>
          </tr>
          <tr>
            <td>Journal 1</td>
            <td>9876-5432</td>
            <td>Quarterly</td>
            <td>History</td>
            <td>Publisher B</td>
            <td>2024-03-15</td>
            <td>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewModal">View</button>
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#editModal">Edit</button>
              <button type="button" class="btn btn-danger">Delete</button>
            </td>
          </tr>
          <!-- Add more rows as needed -->
        </tbody>
      </table>

<!-- END OF BOOKS TABLE  -->


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




// START VIEW AND EDIT BUTTONS REDIRECTION TO EACH PAGE

  // VIEW: Function to handle the click event of the "View" button
  document.querySelectorAll('.btn-primary').forEach(item => {
    item.addEventListener('click', event => {
      // Retrieve the book details from the corresponding table row
      const row = item.closest('tr');
      const bookTitle = row.cells[0].innerText;
      const author = row.cells[1].innerText;
      const location = row.cells[2].innerText;
      const numCopies = row.cells[3].innerText;
      const status = row.cells[4].innerText;

      // Store the book details in localStorage
      localStorage.setItem('bookDetails', JSON.stringify({
        bookTitle: bookTitle,
        author: author,
        location: location,
        numCopies: numCopies,
        status: status
      }));

      // Redirect to the view page
      window.location.href = 'magazine_journal_view_magandjournal.php'; // Replace 'view_book.php' with the actual URL of the view page
    });
  });

  // EDIT: Function to handle the click event of the "EDIT" button
  document.querySelectorAll('.btn-info').forEach(item => {
    item.addEventListener('click', event => {
      // Retrieve the book details from the corresponding table row
      const row = item.closest('tr');
      const bookTitle = row.cells[0].innerText;
      const author = row.cells[1].innerText;
      const location = row.cells[2].innerText;
      const numCopies = row.cells[3].innerText;
      const status = row.cells[4].innerText;

      // Store the book details in localStorage
      localStorage.setItem('bookDetails', JSON.stringify({
        bookTitle: bookTitle,
        author: author,
        location: location,
        numCopies: numCopies,
        status: status
      }));

      // Redirect to the edit page
      window.location.href = 'magazine_journal_edit_magandjournal.php'; // Replace 'edit_book.php' with the actual URL of the edit page
    });
  });

// END VIEW AND EDIT BUTTONS REDIRECTION TO EACH PAGE

</script>