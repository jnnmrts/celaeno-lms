<style>
  /* Custom CSS for navigation list */
  .nav-pills.justify-content-evenly {
    display: flex;
    justify-content: center;
    align-items: center;
    padding-left: 0;
    list-style: none;
  }

  .nav-item {
    margin-left: 15px; /* Adjust as needed */
  }

  /* Custom CSS for search bar */
  .search-container {
    margin-top: 20px;
    display: flex;
    justify-content: center;
  }

  .search-input {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 300px;
    max-width: 100%;
  }

  .search-button {
    padding: 8px 16px;
    background-color: #007bff;
    border: none;
    color: white;
    border-radius: 4px;
    cursor: pointer;
  }

  .search-button:hover {
    background-color: #0056b3;
  }
</style>

<!-- Listahan ng navigation -->
<ul class="nav nav-pills justify-content-evenly align-items-center mb-3 border shadow py-2" id="ex1" role="tablist">
    <li class="nav-item" role="presentation" style="margin-left: 15px">
        <a class="nav-link active border text-dark" id="tab-pending" data-bs-toggle="pill" href="#pills-pending" role="tab"
            aria-controls="pills-audit" aria-selected="true" style="border-radius:0px;background: whitesmoke">Book Pending</a>
    </li>
    <li class="nav-item" role="presentation" style="margin-left: 15px">
        <a class="nav-link border text-dark" id="tab-approved" data-bs-toggle="pill" href="#pills-approved" role="tab"
            aria-controls="pills-approved" aria-selected="false" style="border-radius:0px;background: whitesmoke">Book Approved</a>
    </li>
    <li class="nav-item" role="presentation" style="margin-left: 15px">
        <a class="nav-link border text-dark" id="tab-checkout" data-bs-toggle="pill" href="#pills-checkout" role="tab"
            aria-controls="pills-checkout" aria-selected="false" style="border-radius:0px;background: whitesmoke">Check Out</a>
    </li>
    <li class="nav-item" role="presentation" style="margin-left: 15px">
        <a class="nav-link border text-dark" id="tab-checkin" data-bs-toggle="pill" href="#pills-checkin" role="tab"
            aria-controls="pills-checkin" aria-selected="false" style="border-radius:0px;background: whitesmoke">Check In</a>
    </li>
    <li class="nav-item" role="presentation" style="margin-left: 15px">
        <a class="nav-link border text-dark" id="tab-done" data-bs-toggle="pill" href="#pills-done" role="tab"
            aria-controls="pills-done" aria-selected="false" style="border-radius:0px;background: whitesmoke">Done</a>
    </li>
    <li class="nav-item" role="presentation" style="margin-left: 15px">
        <a class="nav-link border text-dark" id="tab-overdue" data-bs-toggle="pill" href="#pills-overdue" role="tab"
            aria-controls="pills-overdue" aria-selected="false" style="border-radius:0px;background: whitesmoke">Over Due</a>
    </li>
</ul>




<!-- end Button between Request, Deploy and Done  -->
