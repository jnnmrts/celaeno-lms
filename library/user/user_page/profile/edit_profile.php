



<!-- START OF MAIN CONTENT -->

<div class="container mt-5" style="margin-bottom: 30px;">
    <div class="row">
        <div class="col-lg-4 col-md-12" style="padding-bottom: 20px;">
            <div class="card">
                <div class="white-box">
                    <div class="user-bg">
                        <br>
                        <img id="profilePicture" src="assets/images/profile.jpg" alt="Profile Picture">
                        <div class="overlay-box"></div>
                    </div>

                    <center><h5 class="card-title" style="padding-top: 10px;">Hatdog</h5></center>

                    <div class="card-body d-flex justify-content-center align-items-center flex-column">
                        <button class="btn btn-success change-picture-btn">Change Picture</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-success">
                    User Profile
                </div>
                <div class="card-body">
                    <form id="adminProfileForm">
                        <!-- User Information -->
                        <div class="mb-3">
                            <label for="fullName" class="form-label">Name</label>
                            <div class="form-outline mb-4 d-flex">
                              <input type="text" id="form3Example1cg" class="form-control me-1" placeholder="First Name"/>
                              <input type="text" id="form3Example1cg" class="form-control me-1" placeholder="Middle Name" />
                              <input type="text" id="form3Example1cg" class="form-control" placeholder="Last Name"/>
                            </div>
                        </div>

                        <div class="form-outline mb-4">
                            <select class="form-select mb-3" aria-label=".form-select-lg example">
                              <option selected>Strand</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                        </div>
                        
                        <!-- Security Settings -->
                        <hr class="my-4">
                        <h5 class="mb-3">Account</h5>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username:</label>
                            <input type="text" class="form-control" id="username" placeholder="johndoe">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Change Password:</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter new password">
                        </div>

                        <!-- Save Changes Button -->
                        <button type="button" class="btn btn-primary" onclick="saveChanges()">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- END OF MAIN CONTENT -->