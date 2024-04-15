<?php
include ("edit_page_backend.php");
?>


<div class="container mt-5">
  <h3 class="page-heading mb-4">Edit User Details</h3>
  <div class="row mb-2">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-4">User Details</h5>

          <!-- START OF EDIT USER FORM-->
          <form id="editUserForm" action="admin_page/users/update_user.php" method="post">
            <div class="form-group">
              <label for="editFirstName">First Name</label>
              <input type="text" class="form-control p-input" id="editFirstName" name="editFirstName" value="<?php echo $userData['first_name']; ?>" placeholder="Enter First Name">
            </div>
            <div class="form-group">
              <label for="editMiddleName">Middle Name</label>
              <input type="text" class="form-control p-input" id="editMiddleName" name="editMiddleName" value="<?php echo $userData['middle_name']; ?>" placeholder="Enter Middle Name">
            </div>
            <div class="form-group">
              <label for="editLastName">Last Name</label>
              <input type="text" class="form-control p-input" id="editLastName" name="editLastName" value="<?php echo $userData['last_name']; ?>" placeholder="Enter Last Name">
            </div>
            <div class="form-group">
              <label for="editStudentNumber">Student Number</label>
              <input type="text" class="form-control p-input" id="editStudentNumber" name="editStudentNumber" value="<?php echo $userData['student_number']; ?>" placeholder="Enter Student Number">
            </div>
            <div class="form-group">
              <label for="editStrandTrack">Strand & Track</label>
              <input type="text" class="form-control p-input" id="editStrandTrack" name="editStrandTrack" value="<?php echo $userData['strand_track']; ?>" placeholder="Enter Strand & Track">
            </div>
            <div class="form-group">
              <label for="editEmail">Email</label>
              <input type="email" class="form-control p-input" id="editEmail" name="editEmail" value="<?php echo $userData['email']; ?>" placeholder="Enter Email">
            </div>
            <div class="form-group">
              <label for="editUsername">Username</label>
              <input type="text" class="form-control p-input" id="editUsername" name="editUsername" value="<?php echo $userData['username']; ?>" placeholder="Enter Username">
            </div>
            <div class="form-group">
              <label for="editUserType">User Type</label>
              <select class="form-control p-input" id="editUserType" name="editUserType">
                <option value="Student" <?php if($userData['userType'] == 'Student') echo 'selected'; ?>>Student</option>
                <option value="Faculty" <?php if($userData['userType'] == 'Faculty') echo 'selected'; ?>>Faculty</option>
                <option value="Staff" <?php if($userData['userType'] == 'Staff') echo 'selected'; ?>>Staff</option>
              </select>
            </div>
            <!-- Hidden field to send user ID -->
            <input type="hidden" name="userId" value="<?php echo $userData['id']; ?>">
            <!-- START OF SUBMIT BUTTON -->
            <button type="submit" class="btn btn-primary">Save Changes</button>
            <a href="users.php" class="btn btn-primary">Back</a>
            <!-- END OF SUBMIT BUTTON -->
          </form>
          <!-- END OF EDIT USER FORM-->
        </div>
      </div>
    </div>
  </div>
</div>
