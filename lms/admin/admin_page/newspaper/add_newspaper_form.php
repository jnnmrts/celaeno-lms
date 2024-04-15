<div class="container mt-5">
  <h3 class="page-heading mb-4">Add New Newspaper</h3>
  <div class="row mb-2">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-4">Newspaper Details</h5>

          <!-- Start of Add Newspaper Form -->
          <form id="addNewspaperForm">
            <div class="form-group">
              <label for="newspaperTitle">Title</label>
              <input type="text" class="form-control p-input" id="newspaperTitle" placeholder="Enter Title">
            </div>
            <div class="form-group">
              <label for="publisher">Publisher</label>
              <input type="text" class="form-control p-input" id="publisher" placeholder="Enter Publisher">
            </div>
            <div class="form-group">
              <label for="publicationDate">Publication Date</label>
              <input type="date" class="form-control p-input" id="publicationDate">
            </div>
            <div class="form-group">
              <label for="language">Language</label>
              <input type="text" class="form-control p-input" id="language" placeholder="Enter Language">
            </div>
            <div class="form-group">
              <label for="subject">Subject</label>
              <input type="text" class="form-control p-input" id="subject" placeholder="Enter Subject">
            </div>
            <div class="form-group">
              <label for="volumeIssue">Volume/Issue</label>
              <input type="text" class="form-control p-input" id="volumeIssue" placeholder="Enter Volume/Issue">
            </div>
            <div class="form-group">
              <label for="accessUrl">Access URL</label>
              <input type="text" class="form-control p-input" id="accessUrl" placeholder="Enter Access URL">
            </div>
            <div class="form-group">
              <label for="shelvingLocation">Shelving Location</label>
              <input type="text" class="form-control p-input" id="shelvingLocation" placeholder="Enter Shelving Location">
            </div>

            <!-- START OF SUBMIT BUTTON -->
            <button type="submit" class="btn btn-primary">Add Newspaper</button>
            <button type="button" class="btn btn-info mr-2" onclick="window.location.href='newspaper.php'">Cancel</button>
            <!-- END OF SUBMIT BUTTON -->

          </form>
          <!-- End of Add Newspaper Form -->

        </div>
      </div>
    </div>
  </div>
</div>
