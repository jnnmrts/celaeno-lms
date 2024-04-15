<!-- Listahan ng navigation -->
<ul class="nav nav-pills justify-content-evenly align-items-center mb-3 border shadow py-2" id="ex1" role="tablist">
    <li class="nav-item" role="presentation" style="margin-left: 15px">
        <a class="nav-link active border text-dark position-relative" id="tab-pending" data-bs-toggle="pill" href="#pills-pending" role="tab"
            aria-controls="pills-audit" aria-selected="true" style="border-radius:0px;background: whitesmoke">
            Book Pending
            <span class="active-underline"></span> <!-- Underline for active -->
        </a>
    </li>
    <li class="nav-item" role="presentation" style="margin-left: 15px">
        <a class="nav-link border text-dark position-relative" id="tab-approved" data-bs-toggle="pill" href="#pills-approved" role="tab"
            aria-controls="pills-approved" aria-selected="false" style="border-radius:0px;background: whitesmoke">
            Book Approved
            <span class="active-underline"></span> <!-- Underline for active -->
        </a>
    </li>
    <li class="nav-item" role="presentation" style="margin-left: 15px">
        <a class="nav-link border text-dark position-relative" id="tab-checkout" data-bs-toggle="pill" href="#pills-checkout" role="tab"
            aria-controls="pills-checkout" aria-selected="false" style="border-radius:0px;background: whitesmoke">
            Check Out
            <span class="active-underline"></span> <!-- Underline for active -->
        </a>
    </li>
    <li class="nav-item" role="presentation" style="margin-left: 15px">
        <a class="nav-link border text-dark position-relative" id="tab-checkin" data-bs-toggle="pill" href="#pills-checkin" role="tab"
            aria-controls="pills-checkin" aria-selected="false" style="border-radius:0px;background: whitesmoke">
            Check In
            <span class="active-underline"></span> <!-- Underline for active -->
        </a>
    </li>
    <li class="nav-item" role="presentation" style="margin-left: 15px">
        <a class="nav-link border text-dark position-relative" id="tab-overdue" data-bs-toggle="pill" href="#pills-overdue" role="tab"
            aria-controls="pills-overdue" aria-selected="false" style="border-radius:0px;background: whitesmoke">
            Over Due
            <span class="active-underline"></span> <!-- Underline for active -->
        </a>
    </li>
</ul>

<style type="text/css">

/* Apply styles to the Bootstrap navigation */
.nav-pills {
  list-style-type: none;
  margin: 0;
  padding: 0;
  text-align: center;
}

.nav-pills .nav-item {
  display: inline-block;
  margin: 0 10px;
}

.nav-pills .nav-link {
  text-decoration: none;
  color: black;
  position: relative;
}

.nav-pills .nav-link.active::before {
  content: "";
  position: absolute;
  width: 100%;
  height: 3px;
  background-color: black;
  top: 0;
  left: 0;
}

.nav-pills .nav-link:hover::before {
  content: "";
  position: absolute;
  width: 100%;
  height: 3px;
  background-color: black;
  top: 0;
  left: 0;
}

.nav-pills .nav-link.active {
  color: black;
}

</style>