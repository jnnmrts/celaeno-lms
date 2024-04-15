
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
		    <h3 class="page-heading mb-4"><i class="fa-solid fa-book-open-reader" style="margin-right: 15px"></i>Books</h3>
		    <!-- end title -->
			
			<!-- start search content -->
			<?php include("user_page/books/search.php"); ?>
			<!-- end search content -->

			<!-- start recommended content -->
			<?php include("user_page/books/books_recommended.php"); ?>
			<!-- end recommended content -->

			<!-- start top borrowed content -->
			<?php //include("user_page/books/books_top_borrowed.php"); ?>
			<!-- end top borrowed content -->


		</div>


	</div>
	<!-- end dashboard content -->
</div>




<!-- start include footer -->
<?php include("includes/footer.php"); ?>
<!-- end include footer -->
