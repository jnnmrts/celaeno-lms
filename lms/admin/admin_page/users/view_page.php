<?php
include ("view_page_backend.php");
?>

  <div class="container mt-5">
    <h3 class="page-heading mb-4">View User Details</h3>
    <div class="row mb-2">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title mb-4">User Details</h5>

<!-- START OF VIEW USER DETAILS FORM  -->

            <form class="forms-sample">
              <div class="form-group">
                  <label for="firstName">First Name</label>
                  <input type="text" class="form-control p-input" id="firstName" value="<?php echo $userData['first_name']; ?>" disabled>
              </div>
              <div class="form-group">
                  <label for="middleName">Middle Name</label>
                  <input type="text" class="form-control p-input" id="middleName" value="<?php echo $userData['middle_name']; ?>" disabled>
              </div>
              <div class="form-group">
                  <label for="lastName">Last Name</label>
                  <input type="text" class="form-control p-input" id="lastName" value="<?php echo $userData['last_name']; ?>" disabled>
              </div>
              <div class="form-group">
                  <label for="studentNumber">Student Number</label>
                  <input type="text" class="form-control p-input" id="studentNumber" value="<?php echo $userData['student_number']; ?>" disabled>
              </div>
              <div class="form-group">
                  <label for="strandTrack">Strand & Track</label>
                  <input type="text" class="form-control p-input" id="strandTrack" value="<?php echo $userData['strand_track']; ?>" disabled>
              </div>
              <div class="form-group">
                  <label for="status">Status</label>
                  <input type="text" class="form-control p-input" id="status" value="<?php echo $userData['status']; ?>" disabled>
              </div>
              <div class="form-group">
                  <label for="userId">User ID</label>
                  <input type="text" class="form-control p-input" id="userId" value="<?php echo $userData['id']; ?>" disabled>
              </div>
              <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control p-input" id="email" value="<?php echo $userData['email']; ?>" disabled>
              </div>
              <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control p-input" id="username" value="<?php echo $userData['username']; ?>" disabled>
              </div>
              <div class="form-group">
                  <label for="userType">User Type</label>
                  <input type="text" class="form-control p-input" id="userType" value="<?php echo $userData['userType']; ?>" disabled>
              </div>


              
            </form>

<!-- END OF VIEW USER DETAILS FORM  -->

            <?php
             include ("approve_or_deny_button.php");
            ?>

            <a href="users.php" class="btn btn-primary">Back</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>