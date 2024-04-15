<!-- start checkin content -->
<div class="tab-pane fade" id="pills-checkin" role="tabpanel" aria-labelledby="tab-checkin">
    <div class="row">
        <div class="col">
            <div class="border shadow shadow-sm">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table card-table table-striped table-vcenter">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Accession Numbers</th>
                                    <th>Name of Book</th>
                                    <th>Date Borrowed</th>
                                    <th>Due Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Include database connection file
                                include("../../database/connection.php");

                                // Fetch borrowings with status 'Check_in' from the borrow table
                                $sql = "SELECT * FROM borrow WHERE status = 'Check_in'";
                                $result = $conn->query($sql);

                                // Check if there are borrowings with status 'Check_in'
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
                                    // Display a message if there are no borrowings with status 'Check_in'
                                    echo "<tr><td colspan='5'>No check-in borrowings found.</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end checkin content -->
