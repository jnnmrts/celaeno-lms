<!-- Start login form -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card" style="background-color: rgba(227, 242, 253,0.7);">
                <div class="card-header text-center">
                    <h4 class="fw-bold">Log in</h4>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <h4>LIBRARY SYSTEM</h4>
                        <p class="text-dark">SHS in San Nicolas III, Bacoor City</p>
                    </div>

                    <!-- Login form -->
                    <form method="post" action="login_backend.php">
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" name="email" id="form2Example1" class="form-control" placeholder="Email" required />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" name="password" id="form2Example2" class="form-control" placeholder="Password" required />
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary w-100 mb-4">Sign in</button>

                        <!-- Register buttons -->
                        <div class="text-center">
                            <p>Not a member? <a href="register.php">Register</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End login form -->
