<div class="row mb-4">
  <div class="col-lg-1 mr-3" style="margin: 10px; margin-top: -0.5px;">
    <button type="button" class="btn btn-success mr-2" onclick="window.location.href='users_add_user.php'">Add User</button>
  </div>
  
  <div class="col-lg-2">
    <!-- Dropdown button -->
    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton">Option</button>
      <!-- Dropdown menu -->
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="dropdownMenu">
        <a class="dropdown-item" href="#">Option 1</a>
        <a class="dropdown-item" href="#">Option 2</a>
        <a class="dropdown-item" href="#">Option 3</a>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function() {
  // Get the dropdown button
  const dropdownButton = document.getElementById("dropdownMenuButton");
  // Get the dropdown menu
  const dropdownMenu = document.getElementById("dropdownMenu");

  // Toggle the dropdown menu when the button is clicked
  dropdownButton.addEventListener("click", function() {
    dropdownMenu.classList.toggle("show");
  });

  // Close the dropdown menu when clicking outside of it
  window.addEventListener("click", function(event) {
    if (!event.target.matches("#dropdownMenuButton")) {
      dropdownMenu.classList.remove("show");
    }
  });
});
</script>