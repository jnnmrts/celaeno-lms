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



    <!-- START OF TITLE -->

        <?php include("admin_page/dashboard/title.php") ?>

    <!-- END OF TITLE-->



    <!-- START OF CARDS -->

        <?php include("admin_page/dashboard/cards.php") ?>

    <!-- END OF CARDS -->

    

    <!-- START OF TOP BORROWED-->

        <?php include("admin_page/dashboard/top_books_borrowed.php") ?>

    <!-- END OF TOP BORROWED -->



    <!-- START OF TABLE -->

        <?php include("admin_page/dashboard/top_borrowers_table.php") ?>

    <!-- END OF TABLE -->

    <!-- START OF CHART -->

        <?php include("admin_page/dashboard/chart.php") ?>

    <!-- END OF CHART -->



</div>

<!-- END OF MAIN CONTENT OF DASHBOARD -->

    <!-- START OF HEADER -->

        <?php include("includes/footer.php"); ?>

    <!-- END OF HEADER -->