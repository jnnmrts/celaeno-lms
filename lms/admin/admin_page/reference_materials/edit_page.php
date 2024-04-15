<div class="container mt-5">
  <h3 class="page-heading mb-4">Edit Reference Material</h3>
  <div class="row mb-2">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-4">Reference Material Details</h5>

          <!-- Start of Edit Reference Material Form -->
          <form id="editReferenceMaterialForm">
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control p-input" id="title" placeholder="Enter Title">
            </div>
            <div class="form-group">
              <label for="authors">Author(s) or Editor(s)</label>
              <input type="text" class="form-control p-input" id="authors" placeholder="Enter Author(s) or Editor(s)">
            </div>
            <div class="form-group">
              <label for="isbn">ISBN</label>
              <input type="text" class="form-control p-input" id="isbn" placeholder="Enter ISBN">
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
              <label for="edition">Edition</label>
              <input type="text" class="form-control p-input" id="edition" placeholder="Enter Edition">
            </div>
            <div class="form-group">
              <label for="subject">Subject</label>
              <input type="text" class="form-control p-input" id="subject" placeholder="Enter Subject">
            </div>
            <div class="form-group">
              <label for="language">Language</label>
              <input type="text" class="form-control p-input" id="language" placeholder="Enter Language">
            </div>
            <div class="form-group">
              <label for="format">Format</label>
              <input type="text" class="form-control p-input" id="format" placeholder="Enter Format">
            </div>
            <div class="form-group">
              <label for="shelvingLocation">Shelving Location</label>
              <input type="text" class="form-control p-input" id="shelvingLocation" placeholder="Enter Shelving Location">
            </div>
            <div class="form-group">
              <label for="callNumber">Call Number (DDC)</label>
              <input type="text" class="form-control p-input" id="callNumber" placeholder="Enter Call Number (DDC)">
            </div>
            <div class="form-group">
              <label for="accessionNumber">Accession Number</label>
              <input type="text" class="form-control p-input" id="accessionNumber" placeholder="Enter Accession Number">
            </div>
            <div class="form-group">
              <label for="imageCover">Image Cover</label>
              <input type="file" class="form-control-file" id="imageCover">
            </div>

            <!-- START OF SUBMIT BUTTON -->
            <button type="submit" class="btn btn-primary">Save Changes</button>
            <button type="button" class="btn btn-info mr-2" onclick="window.location.href='reference_materials.php'">Cancel</button>
            <!-- END OF SUBMIT BUTTON -->

          </form>
          <!-- End of Edit Reference Material Form -->

        </div>
      </div>
    </div>
  </div>
</div>
