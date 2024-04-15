<!-- START OF HEADER -->

    <?php include("includes/header.php"); ?>

<!-- END OF HEADER -->


<body>
  <div class=" container-scroller conpad">

    <!-- START OF HEADINGS -->

        <?php include("includes/headings.php"); ?>

    <!-- END OF HEADINGS -->


    <!-- START OF SIDEBAR NAVIGATION -->

        <?php include("includes/sidebar.php"); ?>

    <!-- END OF SIDEBAR NAVIGATION -->

<!-- START OF MAIN CONTENT OF DASHBOARD -->

        <div class="content-wrapper">

            <!-- start title -->
            <h3 class="page-heading mb-4"><i class="fa-solid fa-book-open-reader" style="margin-right: 15px"></i>Book Process</h3>
            <!-- end title -->

        <!-- SEARCH BAR  -->
            <?php include("admin_page/book_process/search_bar.php"); ?>
        <!-- SEARCH BAR -->
            
            <!-- start Book Process Button -->
            <?php include("admin_page/book_process/book_process_button.php"); ?>
            <!-- end Book Process Button -->

            <!-- START SHOW PROJECT -->
                <div class="tab-content mb-5">

                    <!-- start Book pending Button -->
                    <?php include("admin_page/book_process/book_pending.php"); ?>
                    <!-- end Book pending Button -->

                    <!-- start Book apporved Button -->
                    <?php include("admin_page/book_process/book_approved.php"); ?>
                    <!-- end Book apporved Button -->

                    <!-- start Book checkin Button -->
                    <?php include("admin_page/book_process/check_in.php"); ?>
                    <!-- end Book checkin Button -->

                    <!-- start Book checkout Button -->
                    <?php include("admin_page/book_process/check_out.php"); ?>
                    <!-- end Book checkout Button -->

                    <!-- start Book done Button -->
                    <?php include("admin_page/book_process/book_done.php"); ?>
                    <!-- end Book done Button -->

                    <!-- start Book overdue Button -->
                    <?php include("admin_page/book_process/book_overdue.php"); ?>
                    <!-- end Book overdue Button -->
                </div>
        </div>
    </div>

<!-- END OF MAIN CONTENT OF DASHBOARD -->

    <!-- START OF HEADER -->

        <?php include("includes/footer.php"); ?>

    <!-- END OF HEADER -->
