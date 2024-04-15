<!-- start checkout content -->
<div class="tab-pane fade" id="pills-checkout" role="tabpanel" aria-labelledby="tab-checkout">
    <div class="row">
        <div class="col">
            <div class="border shadow shadow-sm">
                <div class="card">
                    <div class="table-responsive">
                        <!-- start table -->
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

                                // Fetch borrowings with status 'Check_out' from the borrow table
                                $sql = "SELECT * FROM borrow WHERE status = 'Check_out'";
                                $result = $conn->query($sql);

                                // Check if there are borrowings with status 'Check_out'
                                if ($result->num_rows > 0) {
                                    // Output data of each row
                                    while($row = $result->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td><img src="../../uploads/<?php echo $row['image_cover']; ?>" height="50px" width="50px" style="object-fit: cover"></td>
                                    <td><?php echo $row['accession_number']; ?></td>
                                    <td><?php echo $row['book_title']; ?></td>
                                    <td><?php echo $row['date_borrowed']; ?></td>
                                    <td><?php echo $row['due_date']; ?></td>
                                    <td>
                                        <form method="post" action="admin_page/book_process/update_status.php">
                                            <input type="hidden" name="book_id" value="<?php echo $row['borrow_id']; ?>">
                                            <button type="submit" class="btn btn-primary btn-sm" name="checkin-btn">Check In</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php
                                    }
                                } else {
                                    // Display a message if there are no borrowings with status 'Check_out'
                                    echo "<tr><td colspan='6'>No books checked out.</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                        <!-- end table -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end checkout content -->
