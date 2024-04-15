  <div class="container">
    <div class="row">


      <div class="col-lg-6 mb-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title mb-4">Top Book Borrowed</h5>

      <!-- START OF USERS DASHBOARD TABLE -->

            <table class="table table-striped">
              <thead>
                <tr class="">
                  <th>Cover Book</th>
                  <th>Title</th>
                  <th>Author</th>
                  <th>Catalogue</th>
                </tr>
              </thead>
              <tbody>
<!-- Populated by Javascript below -->
              </tbody>
            </table>

      <!-- END OF USERS DASHBOARD TABLE -->


          </div>
        </div>
      </div>

<script type="text/javascript">
  // Sample data for the top borrowed books
  var topBooks = [
    {
      cover: "assets/images/hoover.jpg",
      title: "Book Title 1",
      author: "Author Name 1",
      catalogue: "Catalogue Number 1"
    },
    {
      cover: "assets/images/hoover.jpg",
      title: "Book Title 2",
      author: "Author Name 2",
      catalogue: "Catalogue Number 2"
    },
    {
      cover: "assets/images/hoover.jpg",
      title: "Book Title 2",
      author: "Author Name 2",
      catalogue: "Catalogue Number 2"
    },
    {
      cover: "assets/images/hoover.jpg",
      title: "Book Title 2",
      author: "Author Name 2",
      catalogue: "Catalogue Number 2"
    },
    {
      cover: "assets/images/hoover.jpg",
      title: "Book Title 2",
      author: "Author Name 2",
      catalogue: "Catalogue Number 2"
    },
    // Add more book objects here as needed
  ];

  // Select the table body
  var tbody = document.querySelector('.table-striped tbody');

  // Loop through each book object
  topBooks.forEach(function(book) {
    // Create a new table row
    var row = document.createElement('tr');

    // Fill the row with data
    row.innerHTML = `
      <td><img src="${book.cover}" alt="Book Cover" style="max-width: 50px; max-height: 100px;"></td>
      <td>${book.title}</td>
      <td>${book.author}</td>
      <td>${book.catalogue}</td>
    `;

    // Append the row to the table body
    tbody.appendChild(row);
  });

</script>










<!-- START OF TOP BORROWED BOOK 

      <div class="col-lg-6">
        <h3>Top Borrowed Book</h3>
        <br>
        <div class="book-card">
          <img src="https://via.placeholder.com/170x250" class="card-img" alt="Book Cover">
          <div class="book-details">
            <h5 class="card-title">Title</h5>
            <p class="card-text">Author: John Doe</p>
            <p class="card-text">Catalogue: Fiction</p>
            <a href="#" class="btn btn-primary">Details</a>
          </div>
        </div>
      </div>

 END OF TOP BORROWED BOOK -->

<!-- THE TWO DIVS HERE IS IN TABLE.PHP-->