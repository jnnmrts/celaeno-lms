<!-- start overdue content -->
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
                                    <th>Picture</th>
                                    <th>Accession Number</th>
                                    <th>Book</th>
                                    <th>Author</th>
                                    <th>Date Borrowed</th>
                                    <th>Due Date</th>
                                    <th>Action</th> <!-- Added column for action button -->
                                </tr>
                                <!-- end table head -->
                            </thead>
                            <tbody>
                                <!-- start data 1 -->
                                <tr>
                                    <td><img src="assets/images/book_img/avengers.jpg" height="50px" width="50px" style="object-fit: cover"></td>
                                    <td>123456789</td>
                                    <td>Harry Potter and the Sorcerer's Stone</td>
                                    <td>J.K. Rowling</td>
                                    <td>2023-01-15</td>
                                    <td>2023-02-15</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm contact-btn" data-bs-toggle="modal" data-bs-target="#contactModal" data-student-id="1">Contact Student</button>

                                    </td> <!-- Added "Contact Student" button -->
                                </tr>
                                <!-- end data 1 -->

                                <!-- Add more overdue book entries with "Contact Student" button as needed -->

                            </tbody>
                        </table>
                        <!-- end table -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end overdue content -->



<!-- Add modal markup -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contactModalLabel">Contact Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">
                                <div class="form-group">
                  <label for="viewTitle">Name</label>
                  <input type="text" class="form-control" id="viewTitle" readonly>
                </div>
                <div class="form-group">
                  <label for="viewAuthors">Contact Number</label>
                  <input type="text" class="form-control" id="viewAuthors" readonly>
                </div>
                <div class="form-group">
                  <label for="viewISBN">Email</label>
                  <input type="text" class="form-control" id="viewISBN" readonly>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <!-- Add additional buttons or actions here if needed -->
            </div>
        </div>
    </div>
</div>


<script>
    // Remove the existing click event listener
    document.querySelectorAll('.contact-btn').forEach(item => {
        item.removeEventListener('click', event => {
            // Get student ID from data attribute
            const studentId = item.getAttribute('data-student-id');
            // Simulate contact student process (alert message)
            alert(`Contacting student with ID: ${studentId}`);
        });
    });

    // You don't need to add a new event listener, as the modal is triggered by Bootstrap's data-bs-toggle attribute
</script>
