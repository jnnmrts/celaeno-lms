<?php
include("../../database/connection.php");

// Delete book if delete button is clicked
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['book_id'])) {
    $bookId = $_GET['book_id'];
    $sql = "DELETE FROM books WHERE book_id = $bookId";
    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('The book has been deleted successfully!');
                window.location.href = 'books.php';
              </script>";
    } else {
        echo "Error deleting book: " . $conn->error;
    }
}

// Fetch book data from the database
$sql = "SELECT * FROM books";
$result = $conn->query($sql);

$bookRows = "";
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        $bookRows .= "<tr>";
        $bookRows .= "<td>" . $row["book_title"] . "</td>";
        $bookRows .= "<td>" . $row["authors"] . "</td>";
        $bookRows .= "<td>" . $row["shelving_location"] . "</td>";
        $bookRows .= "<td>" . $row["status"] . "</td>";
        $bookRows .= "<td>";
        $bookRows .= "<a href='books_view_page.php?id=" . $row["book_id"] . "' class='btn btn-primary btn-sm'>View</a>";
        $bookRows .= "<a href='books_edit_page.php?id=" . $row["book_id"] . "' class='btn btn-info btn-sm'>Edit</a>";
        $bookRows .= "<a href='books.php?action=delete&book_id=" . $row["book_id"] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Are you sure you want to delete this book?\")'>Delete</a>";
        $bookRows .= "</td>";
        $bookRows .= "</tr>";
    }
} else {
    $bookRows = "<tr><td colspan='5'>No books found</td></tr>";
}

$conn->close();
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">Books</h5>
                    <input type="text" id="searchInput" class="form-control mb-3" placeholder="Search...">

                    <!-- START OF BOOKS TABLE  -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Book Title</th>
                                <th>Author</th>
                                <th>Shelving Location</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="tableBody">
                            <?php echo $bookRows; ?>
                        </tbody>
                    </table>
                    <!-- END OF BOOKS TABLE  -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript for Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
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
            var found = false;
            for (j = 0; j < td.length; j++) {
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
