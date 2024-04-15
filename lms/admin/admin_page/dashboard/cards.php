<!-- START OF STYLE FOR CARDS -->

<style>
  /* Define CSS to remove blue color from links */
  .card-link {
    color: inherit; /* Inherit color from parent */
    text-decoration: none; /* Remove underline */
  }

  .card-link:hover {
    text-decoration: none; /* Remove underline on hover */
  }

    /* Define CSS for card animation */
  .card {
    transition: transform 0.3s ease-in-out; /* Add transition effect */
  }

  .card:hover {
    transform: translateY(-5px); /* Move the card 5 pixels up on hover */
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); /* Add box shadow for elevation */
  }
</style>

<!-- END OF STYLE FOR CARDS -->


<!-- START OF FIRST SET OF CARDS -->

<div class="row">
    <!-- START OF TOTAL BOOKS CARD -->
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-7 mb-5">
        <a href="books.php" class="card-link">
            <div class="card">
                <div class="card-body">
                    <div class="clearfix">
                        <i class="fa fa-book float-right icon-grey-big"></i>
                    </div>
                    <h4 class="card-title font-weight-normal text-success">45465</h4>
                    <h6 class="card-subtitle mb-4">Total Books</h6>
                    <div class="progress progress-slim">
                        <div class="progress-bar bg-success-gadient" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <!-- END OF TOTAL BOOKS CARD -->

    <!-- START OF PENDING CARD -->
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-7 mb-5">
        <a href="book_process.php" class="card-link">
            <div class="card">
                <div class="card-body">
                    <div class="clearfix">
                        <i class="fa fa-pencil float-right icon-grey-big"></i>
                    </div>
                    <h4 class="card-title font-weight-normal text-danger">63259</h4>
                    <h6 class="card-subtitle mb-4">Pending</h6>
                    <div class="progress progress-slim">
                        <div class="progress-bar bg-danger-gadient" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <!-- END OF PENDING CARD -->

    <!-- START OF APPROVED CARD -->
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-7 mb-5">
        <a href="book_process.php" class="card-link">
            <div class="card">
                <div class="card-body">
                    <div class="clearfix">
                        <i class="fa fa-thumbs-up float-right icon-grey-big"></i>
                    </div>
                    <h4 class="card-title font-weight-normal text-success">45465</h4>
                    <h6 class="card-subtitle mb-4">Approved</h6>
                    <div class="progress progress-slim">
                        <div class="progress-bar bg-success-gadient" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <!-- END OF APPROVED CARD -->
</div>


<!-- END OF FIRST SET OF CARDS -->



<!-- SET OF SEPARATOR CARDS -->



<!-- START OF SECOND SET OF CARDS -->

<div class="row">

  <!-- START OF CHECK IN CARD -->
  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-7 mb-5">
    <a href="book_process.php" class="card-link">
      <div class="card">
        <div class="card-body">
          <div class="clearfix">
            <i class="fa fa-check float-right icon-grey-big"></i>
          </div>
          <h4 class="card-title font-weight-normal text-success">45465</h4>
          <h6 class="card-subtitle mb-4">Check In</h6>
          <div class="progress progress-slim">
            <div class="progress-bar bg-success-gadient" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </a>
  </div>
  <!-- END OF CHECK IN CARD -->


  <!-- START OF CHECK OUT CARD -->
  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-7 mb-5">
    <a href="book_process.php" class="card-link">
      <div class="card">
        <div class="card-body">
          <div class="clearfix">
            <i class="fa fa-circle float-right icon-grey-big"></i>
          </div>
          <h4 class="card-title font-weight-normal text-danger">63259</h4>
          <h6 class="card-subtitle mb-4">Check Out</h6>
          <div class="progress progress-slim">
            <div class="progress-bar bg-danger-gadient" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </a>
  </div>
  <!-- END OF CHECK OUT CARD -->

  <!-- START OF DUE CARD -->
  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-7 mb-5">
    <a href="book_process.php" class="card-link">
      <div class="card">
        <div class="card-body">
          <div class="clearfix">
            <i class="fa fa-calendar float-right icon-grey-big"></i>
          </div>
          <h4 class="card-title font-weight-normal text-success">45465</h4>
          <h6 class="card-subtitle mb-4">Due</h6>
          <div class="progress progress-slim">
            <div class="progress-bar bg-success-gadient" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </a>
  </div>
  <!-- END OF DUE CARD -->

</div>

<!-- END OF SECOND SET OF CARDS -->

