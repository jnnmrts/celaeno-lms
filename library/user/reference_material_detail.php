
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
		    <h3 class="page-heading mb-4"><i class="fa-solid fa-book-open-reader" style="margin-right: 15px"></i>Reference Materials Detailed</h3>
		    <!-- end title -->

		    <!-- start back to reference material -->
		    <div class="d-flex">
		    	<a href="reference_material.php"><h6 class="text-primary"><i class="fa-solid fa-circle-chevron-left"></i> Back </h6></a>
		    </div>
		    <!-- end back to reference material -->
			
			<!-- start reference material_detail content -->
			<?php include("user_page/reference_material/reference_material_detail.php"); ?>
			<!-- end reference material content -->

		</div>


	</div>
	<!-- end dashboard content -->
</div>




<!-- start include footer -->
<?php include("includes/footer.php"); ?>
<!-- end include footer -->
