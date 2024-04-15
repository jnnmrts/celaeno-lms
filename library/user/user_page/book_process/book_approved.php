<!-- start approved content -->
<div class="tab-pane fade" id="pills-approved" role="tabpanel" aria-labelledby="tab-approved">
    <div class="row">
        <div class="col">
            <div class="border shadow shadow-sm">
                <div class="card">
                    <div class="table-responsive">
                        <!-- start table -->
                        <table class="table card-table table-striped table-vcenter">
                            <thead>
                                <!-- start table head -->
                                <tr>
                                    <th>Image</th>
                                    <th>Accession Numbers</th>
                                    <th>Name of Book</th>
                                    <th>Date Borrowed</th>
                                    <th>Due Date</th>
                                </tr>
                                <!-- end table head -->
                            </thead>
                            <tbody>
                                <?php
                                // Include database connection file
                                include("../../database/connection.php");

                                // Fetch approved borrowings from the borrow table
                                $sql = "SELECT * FROM borrow WHERE status = 'Approved'";
                                $result = $conn->query($sql);

                                // Check if there are approved borrowings
                                if ($result->num_rows > 0) {
                                    // Output data of each row
                                    while($row = $result->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td><img src="../../uploads/<?php echo $row['image_cover']; ?>" alt="Book Image" height="50" width="50" style="object-fit: cover"></td>
                                    <td><?php echo $row['accession_number']; ?></td>
                                    <td><?php echo $row['book_title']; ?></td>
                                    <td><?php echo $row['date_borrowed']; ?></td>
                                    <td><?php echo $row['due_date']; ?></td>
                                </tr>
                                <?php
                                    }
                                } else {
                                    // Display a message if there are no approved borrowings
                                    echo "<tr><td colspan='5'>No approved borrowings found.</td></tr>";
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
<!-- end approved content -->
