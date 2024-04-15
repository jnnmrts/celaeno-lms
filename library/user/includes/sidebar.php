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
        <button class="btn" type="button" id="notificationDropdownButton"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="bi bi-bell"></span> <span class="badge badge-pill badge-danger">3</span>
        </button>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="notificationDropdownButton" style="max-height: 80vh; overflow-y: auto;">
            <a class="dropdown-item" href="#">Notification 1</a>
            <a class="dropdown-item" href="#">Notification 2</a>
            <a class="dropdown-item" href="#">Notification 3</a>
        </div>
    </div>
    <!-- NOTIFICATION -->
</nav>
<!-- end nav bar -->


<style>
    .dropdown-menu {
        left: auto !important;
        right: 0 !important;
    }
</style>


    <!-- end nav bar -->

    <!-- start nav bar -
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
           Add other navbar items here 
        </ul>
    </div>
 
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="notificationDropdownButton"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Notifications <span class="badge badge-pill badge-danger">3</span>
        </button>
        <div class="dropdown-menu" aria-labelledby="notificationDropdownButton">
            <a class="dropdown-item" href="#">Notification 1</a>
            <a class="dropdown-item" href="#">Notification 2</a>
            <a class="dropdown-item" href="#">Notification 3</a>
        </div>
    </div>
</nav>
 end nav bar -->


    <!-- partial -->
    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="bg-white sidebar sidebar-offcanvas" id="sidebar">

          <!-- start list button -->
          <ul class="nav">

            <!-- start dashboard buuton -->
            <li class="nav-item active">
              <a class="nav-link" href="index.php">
                <img src="assets/images/icons/dashboard.png" alt="">
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <!-- end dashboard buuton -->

            <!-- start profile button -->
            <li class="nav-item">
              <a class="nav-link" href="profile.php">
                <img src="assets/images/icons/user.png" alt="">
                <span class="menu-title">Profile</span>
              </a>
            </li>
            <!-- end profile button -->

            <!-- start circulation button -->
            <li class="nav-item">
              <a class="nav-link" href="book_process.php">
                <img src="assets/images/icons/bookprocess.png" alt="">
                <span class="menu-title">Ciculation</span>
              </a>
            </li>
            <!-- end circulation button --> 

            <!-- start shelving location button -->
            <li class="nav-item">
              <a class="nav-link" href="shelving_location.php">
                <img src="assets/images/icons/bookshelf.png" alt="">
                <span class="menu-title">Shelving Locations</span>
              </a>
            </li>
            <!-- end shelving location button -->

            <!-- start new arrival button -->
            <li class="nav-item">
              <a class="nav-link" href="new_arrival.php">
                <img src="assets/images/icons/stack.png" alt="">
                <span class="menu-title">New Arrival</span>
              </a>
            </li>
            <!-- end new arrival button -->


            <!-- start books button -->
            <li class="nav-item">
              <a class="nav-link" href="books.php">
                <img src="assets/images/icons/open-book.png" alt="">
                <span class="menu-title">Books</span>
              </a>
            </li>
            <!-- end books button -->

            <!-- start ebooks button -->
            <li class="nav-item">
              <a class="nav-link" href="ebook.php">
                <img src="assets/images/icons/ebook1.png" alt="">
                <span class="menu-title">eBooks</span>
              </a>
            </li>
            <!-- end ebooks button -->

            <!-- start magazin and journal button -->
            <li class="nav-item">
              <a class="nav-link" href="magazine_journal.php">
                <img src="assets/images/icons/magazine.png" alt="">
                <span class="menu-title">Magazines/Journals</span>
              </a>
            </li>
            <!-- end magazine and journal button -->

            <!-- start newspaper button -->
            <li class="nav-item">
              <a class="nav-link" href="newspaper.php">
                <img src="assets/images/icons/newspapers.png" alt="">
                <span class="menu-title">Newspapers</span>
              </a>
            </li>
            <!-- end newspaper button -->

            <!-- start reference_material button -->
            <li class="nav-item">
              <a class="nav-link" href="reference_material.php">
                <img src="assets/images/icons/ref.png" alt="">
                <span class="menu-title">Reference Materials</span>
              </a>
            </li>
            <!-- end reference_material button -->

            <!-- start research_paper button -->
            <li class="nav-item">
              <a class="nav-link" href="research_paper.php">
                <img src="assets/images/icons/research1.png" alt="">
                <span class="menu-title">Research Papers</span>
              </a>
            </li>
            <!-- end research_paper button -->

            <!-- start e module button -->
            <li class="nav-item">
              <a class="nav-link" href="e_module.php">
                <img src="assets/images/icons/module1.png" alt="">
                <span class="menu-title">E-Modules</span>
              </a>
            </li>
            <!-- end e module button -->

            <!-- start Worksheet button -->
            <li class="nav-item">
              <a class="nav-link" href="worksheet.php">
                <img src="assets/images/icons/worksheet1.png" alt="">
                <span class="menu-title">worksheets</span>
              </a>
            </li>
            <!-- end Worksheet button -->
            
          </ul>
          <!-- end list button -->
        </nav>
      </div>
    </div>

    