
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
		    <h3 class="page-heading mb-4"><i class="fa-solid fa-chart-line" style="margin-right: 15px"></i>Dashboard</h3>
		    <!-- end title -->

			<!-- start user dashboard content -->
			<?php include("user_page/index/cards.php"); ?>
			<!-- end user dashboard content -->

			<!-- start top borrowed and history content -->
			<?php include("user_page/index/table.php"); ?>
			<!-- end top borrowed and history content -->
		</div>

	</div>
	<!-- end dashboard content -->
</div>


<!-- start include footer -->
<?php include("includes/footer.php"); ?>
<!-- end include footer -->
