<!-- partial -->
<div class="container-fluid">
	<!-- start dashboard content -->
	 <div class=" container-scroller">



	 	<!-- start sidebar content -->
		<?php include("includes/sidebar.php"); ?>
		<!-- end sidebar content -->

		<!-- partial -->
		<div class="content-wrapper">

			<!-- start title -->
		    <h3 class="page-heading mb-4"><i class="fa-solid fa-book-open-reader" style="margin-right: 15px"></i>Book Process</h3>
		    <!-- end title -->
			
			<!-- start Book Process Button -->
		    <?php include("admin_page/book_process/book_process_button.php"); ?>
		    <!-- end Book Process Button -->

		    <!-- START SHOW PROJECT -->
	        	<div class="tab-content mb-5">

				    <!-- start Book pending Button -->
				    <?php include("admin_page/book_process/book_pending.php"); ?>
				    <!-- end Book pending Button -->

				    <!-- start Book overdue Button -->
				    <?php include("admin_page/book_process/book_approved.php"); ?>
				    <!-- end Book apporved Button -->

				    <!-- start Book checkin Button -->
				    <?php include("admin_page/book_process/check_in.php"); ?>
				    <!-- end Book checkin Button -->

				    <!-- start Book checkout Button -->
				    <?php include("admin_page/book_process/check_out.php"); ?>
				    <!-- end Book checkout Button -->

				    <!-- start Book overdue Button -->
				    <?php include("admin_page/book_process/book_overdue.php"); ?>
				    <!-- end Book apporved Button -->

				</div>

		</div>


	</div>
	<!-- end dashboard content -->
</div>