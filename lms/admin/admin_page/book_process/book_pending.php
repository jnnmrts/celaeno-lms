<!-- start book pending content -->
<div class="tab-pane fade show active" id="pills-pending" role="tabpanel" aria-labelledby="tab-pending">
    <div class="row">
        <div class="col">
            <div class="border shadow shadow-sm">
                <div class="card">
                    <div class="table-responsive">
                        <form method="post" action="admin_page/book_process/approve_borrowing.php"> <!-- Form added -->
                            <table class="table card-table table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th>Picture</th>
                                        <th>Accession Number</th>
                                        <th>Name of Book</th>
                                        <th>Date Borrowed</th>
                                        <th>Due Date</th>
                                        <th>Action</th> <!-- Added column for action button -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Include database connection file
                                    include("../../database/connection.php");

                                    // Fetch borrowings with status 'Pending' from the borrow table
                                    $sql = "SELECT * FROM borrow WHERE status = 'Pending'";
                                    $result = $conn->query($sql);

                                    // Check if there are borrowings with status 'Pending'
                                    if ($result->num_rows > 0) {
                                        // Output data of each row
                                        while($row = $result->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td><img src="assets/images/hoover.jpg" height="50px" width="50px" style="object-fit: cover"></td>
                                        <td><?php echo $row['accession_number']; ?></td>
                                        <td><?php echo $row['book_title']; ?></td>
                                        <td><?php echo $row['date_borrowed']; ?></td>
                                        <td><?php echo $row['due_date']; ?></td>
                                        <td>
                                            <button type="submit" class="btn btn-primary btn-sm" name="approve" value="<?php echo $row['borrow_id']; ?>">Approve</button>
                                        </td> <!-- Changed button type and added name and value attributes -->
                                    </tr>
                                    <?php
                                        }
                                    } else {
                                        // Display a message if there are no borrowings with status 'Pending'
                                        echo "<tr><td colspan='6'>No pending borrowings found.</td></tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </form> <!-- Form end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end book pending content -->
