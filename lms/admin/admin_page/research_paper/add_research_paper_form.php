<div class="container mt-5">
  <h3 class="page-heading mb-4">Add Research Paper</h3>
  <div class="row mb-2">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-4">Research Paper Details</h5>

          <!-- Start of Add Research Paper Form -->
          <form id="addResearchPaperForm">
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control p-input" id="title" placeholder="Enter Title">
            </div>
            <div class="form-group">
              <label for="authors">Authors</label>
              <input type="text" class="form-control p-input" id="authors" placeholder="Enter Authors">
            </div>
            <div class="form-group">
              <label for="publicationDate">Publication Date</label>
              <input type="date" class="form-control p-input" id="publicationDate">
            </div>
            <div class="form-group">
              <label for="subject">Subject</label>
              <input type="text" class="form-control p-input" id="subject" placeholder="Enter Subject">
            </div>
            <div class="form-group">
              <label for="abstract">Abstract</label>
              <textarea class="form-control p-input" id="abstract" rows="4" placeholder="Enter Abstract"></textarea>
            </div>
            <div class="form-group">
              <label for="advisor">Advisor/Supervisor</label>
              <input type="text" class="form-control p-input" id="advisor" placeholder="Enter Advisor/Supervisor">
            </div>
            <div class="form-group">
              <label for="gradeLevel">Grade Level</label>
              <input type="text" class="form-control p-input" id="gradeLevel" placeholder="Enter Grade Level">
            </div>
            <div class="form-group">
              <label for="schoolAffiliation">School Affiliation</label>
              <input type="text" class="form-control p-input" id="schoolAffiliation" placeholder="Enter School Affiliation">
            </div>

            <!-- START OF SUBMIT BUTTON -->
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-info mr-2" onclick="window.location.href='research_paper.php'">Cancel</button>
            <!-- END OF SUBMIT BUTTON -->

          </form>
          <!-- End of Add Research Paper Form -->

        </div>
      </div>
    </div>
  </div>
</div>
