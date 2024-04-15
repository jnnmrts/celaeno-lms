<?php
include ("add_user_form_backend.php");
?>

<div class="container mt-5">
  <h3 class="page-heading mb-4">Add New User</h3>
  <div class="row mb-2">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-4">User Details</h5>

          <!-- ADDING USER FORM -->
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
              <label for="firstName">First Name</label>
              <input type="text" class="form-control p-input" id="firstName" name="firstName" placeholder="Enter First Name">
            </div>
            <div class="form-group">
              <label for="middleName">Middle Name</label>
              <input type="text" class="form-control p-input" id="middleName" name="middleName" placeholder="Enter Middle Name">
            </div>
            <div class="form-group">
              <label for="lastName">Last Name</label>
              <input type="text" class="form-control p-input" id="lastName" name="lastName" placeholder="Enter Last Name">
            </div>
            <div class="form-group">
              <label for="studentNumber">Student Number</label>
              <input type="text" class="form-control p-input" id="studentNumber" name="studentNumber" placeholder="Enter Student Number">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control p-input" id="email" name="email" placeholder="Enter Email">
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control p-input" id="username" name="username" placeholder="Enter Username">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control p-input" id="password" name="password" placeholder="Enter Password">
            </div>
            <div class="form-group">
              <label for="strandTrack">Strand & Track</label>
              <select class="form-control" id="strandTrack" name="strandTrack">
                <option value="HUMSS">HUMSS</option>
                <option value="HE">HE</option>
                <option value="ICT">ICT</option>
                <option value="GAS">GAS</option>
              </select>
            </div>

            <div class="form-group">
              <label for="status">Status</label>
              <select class="form-control" id="status" name="status">
                <option value="Pending">Pending</option>
                <option value="Approved">Approved</option>
              </select>
            </div>

            <div class="form-group">
              <label for="userType">User Type</label>
              <select class="form-control" id="userType" name="userType">
                <option value="Student">Student</option>
                <option value="Faculty">Faculty</option>
                <option value="Staff">Staff</option>
              </select>
            </div>

            <!-- SUBMIT BUTTON -->
            <button type="submit" class="btn btn-primary">Add User</button>
            <!-- Back button -->
            <a href="users.php" class="btn btn-secondary mr-2">Back</a>
          </form>
          <!-- END OF ADDING USER FORM -->
        </div>
      </div>
    </div>
  </div>
</div>

