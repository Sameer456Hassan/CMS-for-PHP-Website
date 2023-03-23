<?php
require "inc/header.php";

if (isset($_GET['sec'])) {
    $sec = $_GET['sec'];
} else {
    $sec = 'home_header';
}

if (isset($_GET['header_id_delete'])) {
    $id = $_GET['header_id_delete'];
    $qry = "DELETE FROM $sec WHERE id=$id";
    $res = $conn->query($qry);
    if ($res == true) {
        echo '<script>windows.location.href=home_header.php</script>';
    } else {
        echo '<script>windows.location.href=home_header.php</script>';
    }
}

$qry = "SELECT * FROM $sec";
$res = $conn->query($qry);
// echo $sec;
?>
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header d-flex justify-content-between">Home Page <span class="alert_message"></span>
                <a href="./add_blog.php?sec=<?php echo $sec; ?>" class="btn btn-primary <?php if ($sec === "home_pricing") {
                                                                                            if ($res->num_rows > 3) {
                                                                                                echo 'd-none';
                                                                                            }
                                                                                        } else if ($sec != "home_header" && $res->num_rows > 0) {
                                                                                            echo 'd-none';
                                                                                        } ?>">Add </a>
            </div>
            <div class="table-responsive">
                <table id="product_table" class="table table-hover responsive nowrap align-middle mb-0 table table-borderless table-striped table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <?php
                            if (!empty($row['picture'])) {
                            ?>
                                <th>Image</th>
                            <?php
                            }
                            if (!empty($row['sub_heading'])) {
                            ?>
                                <th>Sub Heading</th>
                            <?php
                            }
                            if (!empty($row['heading'])) {
                            ?>
                                <th>Title</th>
                            <?php
                            }
                            ?>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($res->num_rows > 0) {
                            $i = 0;
                            while ($row = $res->fetch_assoc()) {
                                $i++;
                        ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <?php
                                    if (!empty($row['picture'])) {
                                    ?>
                                        <td><img src="../images/<?php echo !empty($row['picture']) ? $row['picture'] : ''; ?>" alt="" class="img-fluid admin_img"></td>
                                    <?php
                                    }
                                    if (!empty($row['sub_heading'])) {
                                    ?>
                                        <td><?php echo substr($row['sub_heading'], 0, 60) . "..."; ?></td>

                                    <?php
                                    }
                                    if (!empty($row['heading'])) {

                                    ?>
                                        <td><?php echo substr($row['heading'], 0, 60) . "..."; ?></td>
                                    <?php

                                    }
                                    ?>
                                    <td>

                                        <a class="btn btn-success" href="add_blog.php?sec=<?php echo $sec; ?>&header_id_admin=<?php echo $row['id']; ?>"><i class="metismenu-icon fa-regular fa-pencil mr-2"></i>Edit</a>
                                        <a class="btn btn-outline-danger" href="home_header.php?sec=<?php echo $sec; ?>&header_id_delete=<?php echo $row['id']; ?>"><i class="metismenu-icon fa-regular fa-trash mr-2"></i>Delete</a>

                                        <!-- pe-7s-trash -->

                                    </td>
                                </tr>
                        <?php
                            }
                        }

                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require "inc/footer.php"; ?>