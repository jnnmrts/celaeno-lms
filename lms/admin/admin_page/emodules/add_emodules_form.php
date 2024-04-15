<div class="container mt-5">
  <h3 class="page-heading mb-4">Add New E-Module</h3>
  <div class="row mb-2">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-4">E-Module Details</h5>

          <!-- Start of Add E-Module Form -->
          <form>
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" id="title" placeholder="Enter Title">
            </div>
            <div class="form-group">
              <label for="creators">Creator(s)</label>
              <input type="text" class="form-control" id="creators" placeholder="Enter Creator(s)">
            </div>
            <div class="form-group">
              <label for="subject">Subject</label>
              <input type="text" class="form-control" id="subject" placeholder="Enter Subject">
            </div>
            <div class="form-group">
              <label for="format">Format</label>
              <input type="text" class="form-control" id="format" placeholder="Enter Format">
            </div>
            <div class="form-group">
              <label for="copyright">Copyright Information</label>
              <input type="text" class="form-control" id="copyright" placeholder="Enter Copyright Information">
            </div>
            <div class="form-group">
              <label for="publicationDate">Publication Date</label>
              <input type="date" class="form-control" id="publicationDate">
            </div>
            <div class="form-group">
              <label for="schoolAffiliation">School Affiliation</label>
              <input type="text" class="form-control" id="schoolAffiliation" placeholder="Enter School Affiliation">
            </div>
            <div class="form-group">
              <label for="uploadedFile">Uploaded File</label>
              <input type="file" class="form-control-file" id="uploadedFile">
            </div>
            <div class="form-group">
              <label for="accessUrl">Access URL</label>
              <input type="text" class="form-control" id="accessUrl" placeholder="Enter Access URL">
            </div>

            <!-- START OF SUBMIT BUTTON -->
            <button type="submit" class="btn btn-primary">Add E-Module</button>

            <button type="button" class="btn btn-info mr-2" onclick="window.location.href='emodules.php'">Cancel</button>
            <!-- END OF SUBMIT BUTTON -->
          </form>
          <!-- End of Add E-Module Form -->

        </div>
      </div>
    </div>
  </div>
</div>
