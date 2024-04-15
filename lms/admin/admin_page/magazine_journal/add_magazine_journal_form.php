<div class="container mt-5">
  <h3 class="page-heading mb-4">Add New Magazine/Journal</h3>
  <div class="row mb-2">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-4">Magazine/Journal Details</h5>
          
          <!-- START ADD FORM -->
          <form id="addMagazineJournalForm" action="admin_page/magazine_journal/add_magazine_journal_form_backend.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="addTitle">Title</label>
              <input type="text" class="form-control p-input" id="addTitle" placeholder="Enter Title">
            </div>
            <div class="form-group">
              <label for="addISSN">ISSN (International Standard Serial Number)</label>
              <input type="text" class="form-control p-input" id="addISSN" placeholder="Enter ISSN">
            </div>
            <div class="form-group">
              <label for="addFrequency">Frequency</label>
              <input type="text" class="form-control p-input" id="addFrequency" placeholder="Enter Frequency">
            </div>
            <div class="form-group">
              <label for="addSubject">Subject</label>
              <input type="text" class="form-control p-input" id="addSubject" placeholder="Enter Subject">
            </div>
            <div class="form-group">
              <label for="addDescription">Description</label>
              <textarea class="form-control p-input" id="addDescription" placeholder="Enter Description"></textarea>
            </div>
            <div class="form-group">
              <label for="addPublisher">Publisher</label>
              <input type="text" class="form-control p-input" id="addPublisher" placeholder="Enter Publisher">
            </div>
            <div class="form-group">
              <label for="addPublicationDate">Publication Date</label>
              <input type="date" class="form-control p-input" id="addPublicationDate">
            </div>
            <div class="form-group">
              <label for="addVolumeIssue">Volume/Issue</label>
              <input type="text" class="form-control p-input" id="addVolumeIssue" placeholder="Enter Volume/Issue">
            </div>
            <div class="form-group">
              <label for="addLanguage">Language</label>
              <input type="text" class="form-control p-input" id="addLanguage" placeholder="Enter Language">
            </div>
            <div class="form-group">
              <label for="addSchoolAffiliation">School Affiliation</label>
              <input type="text" class="form-control p-input" id="addSchoolAffiliation" placeholder="Enter School Affiliation">
            </div>
            <div class="form-group">
              <label for="addAccessUrl">Access URL</label>
              <input type="text" class="form-control p-input" id="addAccessUrl" placeholder="Enter Access URL">
            </div>
            <div class="form-group">
              <label for="addShelvingLocation">Shelving Location</label>
              <input type="text" class="form-control p-input" id="addShelvingLocation" placeholder="Enter Shelving Location">
            </div>
            <div class="form-group">
              <label for="addImageCover">Image Cover</label>
              <input type="file" class="form-control-file" id="addImageCover">
            </div>
            <button type="submit" class="btn btn-primary">Add Magazine/Journal</button>
            <a href="magazine_journal.php" class="btn btn-primary">Cancel</a>
          </form>
          <!-- END ADD FORM -->
        </div>
      </div>
    </div>
  </div>
</div>
