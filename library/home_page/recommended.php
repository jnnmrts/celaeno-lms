<!-- start Recommended content -->
<div class="mt-5 ">
    <div class="text-white">
        <h5>Recommended</h5>
    </div>

    <div class="row container">
        <?php
        include("../database/connection.php");
        $sql = "SELECT * FROM ebooks ORDER BY created_at DESC LIMIT 3";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="col d-flex justify-content-center mb-2">
                    <div class="d-flex ">
                        <!-- start book image -->
                        <div class="bg-white">
                            <a href="ebook_detail.php?id=<?php echo $row['ebook_id']; ?>">
                                <img class="border" src="../uploads/<?php echo $row['image_cover']; ?>" height="250" width="170" style="object-fit: cover">
                            </a>
                        </div>
                        <!-- end book image -->

                        <!-- start details -->
                        <div class="bg-white px-2 pt-1" style="height: 250px;width: 170px">
                            <span class="text-muted" style="font-size: 12px">Title</span>
                            <h6><?php echo $row['ebook_title']; ?></h6>

                            <span class="text-muted" style="font-size: 12px">Author</span>
                            <h6><?php echo $row['authors']; ?></h6>

                            <span class="text-muted" style="font-size: 12px">Language</span>
                            <h6><?php echo $row['language']; ?></h6>

                            <span class="text-muted" style="font-size: 12px">Status</span>
                            <h6><?php echo $row['status']; ?></h6>
                        </div>
                        <!-- end details -->

                    </div>
                </div>
                <?php
            }
        } else {
            echo "<p>No ebooks found</p>";
        }
        $conn->close();
        ?>
    </div>
</div>
<!-- end Recommended content -->
