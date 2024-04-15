<!-- start nav bar -->
<nav class="navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row justify-content-between">
    <div class="navbar-menu-wrapper d-flex align-items-center">
                <button class="navbar-toggler navbar-toggler d-none d-lg-block navbar-dark align-self-center mr-3" type="button" data-toggle="minimize">
            <span class="navbar-toggler-icon"></span>
        </button>
        <button class="navbar-toggler navbar-dark navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>

    <!-- NOTIFICATION -->
    <div class="dropdown" style="position: relative;">
        <button class="btn" type="button" id="notificationButton">
            <span class="bi bi-bell"></span> <span class="badge badge-pill badge-danger">3</span>
        </button>
        <div class="dropdown-menu dropdown-menu-right" id="notificationDropdownMenu" style="max-height: 80vh; overflow-y: auto; display: none;">
            <a class="dropdown-item" href="#">Notification 1</a>
            <a class="dropdown-item" href="#">Notification 2</a>
            <a class="dropdown-item" href="#">Notification 3</a>
        </div>
    </div>
    <!-- NOTIFICATION -->
</nav>
<!-- end nav bar -->

<script>
    $(document).ready(function() {
        // Toggle dropdown menu when notification button is clicked
        $('#notificationButton').click(function(event) {
            event.stopPropagation(); // Prevent default behavior for button click
            $('#notificationDropdownMenu').toggle(); // Toggle visibility of dropdown menu
        });

        // Hide dropdown menu when clicking outside of it
        $(document).click(function(event) {
            if (!$(event.target).closest('#notificationDropdownMenu').length && !$(event.target).is('#notificationButton')) {
                $('#notificationDropdownMenu').hide(); // Hide dropdown if not clicked inside or on the notification button
            }
        });
    });
</script>



<style>
    .dropdown-menu {
        left: auto !important;
        right: 0 !important;
    }
</style>