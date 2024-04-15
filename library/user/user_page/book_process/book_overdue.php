<!-- start over due content -->
<div class="tab-pane fade" id="pills-overdue" role="tabpanel" aria-labelledby="tab-overdue">
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
                                    <th>Action</th>
                                </tr>
                                <!-- end table head -->
                            </thead>
                            <!-- Start table body -->
                            <tbody>
                                <?php
                                // Include database connection file
                                include("../../database/connection.php");

                                // Fetch overdue borrowings from the borrow table
                                $sql = "SELECT * FROM borrow WHERE status = 'Overdue'";
                                $result = $conn->query($sql);

                                // Check if there are overdue borrowings
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
                                    <td><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#appealModal">Appeal</button></td>
                                </tr>
                                <?php
                                    }
                                } else {
                                    // Display a message if there are no overdue borrowings
                                    echo "<tr><td colspan='6'>No overdue borrowings found.</td></tr>";
                                }
                                ?>
                            </tbody>
                            <!-- End table body -->
                        </table>
                        <!-- end table -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end overdue content -->

<!-- Modal for Appeal -->
<div class="modal fade" id="appealModal" tabindex="-1" aria-labelledby="appealModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="appealModalLabel">Appeal Request</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Your modal content goes here -->
                <!-- Example: -->
                <p>Please enter your appeal request here.</p>
                <textarea class="form-control" rows="3"></textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Submit Appeal</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal for Appeal -->
