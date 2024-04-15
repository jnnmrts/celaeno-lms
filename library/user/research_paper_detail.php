
<!-- start include header  -->
<?php include("includes/header.php"); ?>
<!-- end include header  -->


<!-- partial -->
<div class="container-fluid conpad">
	<!-- start dashboard content -->
	 <div class=" container-scroller">



	 	<!-- start sidebar content -->
		<?php include("includes/sidebar.php"); ?>
		<!-- end sidebar content -->

		<!-- partial -->
		<div class="content-wrapper">

			<!-- start title -->
		    <h3 class="page-heading mb-4"><i class="fa-solid fa-book-open-reader" style="margin-right: 15px"></i>Research Papers Detailed</h3>
		    <!-- end title -->

		    <!-- start back to research_paper -->
		    <div class="d-flex">
		    	<a href="research_paper.php"><h6 class="text-primary"><i class="fa-solid fa-circle-chevron-left"></i> Back </h6></a>
		    </div>
		    <!-- end back to research_paper -->
			
			<!-- start research_paper content -->
			<?php include("user_page/research_paper/research_paper_detail.php"); ?>
			<!-- end research_paper content -->

		</div>


	</div>
	<!-- end dashboard content -->
</div>




<!-- start include footer -->
<?php include("includes/footer.php"); ?>
<!-- end include footer -->
