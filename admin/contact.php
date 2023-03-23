<?php
require "inc/header.php";


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


$qry = "SELECT * FROM contact";
$res = $conn->query($qry);
?>



<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header d-flex justify-content-between">Contact Page <span class="alert_message"></span>
                <a href="./add_contact.php" class="btn btn-primary  <?php if ($res->num_rows > 0) {
                                                                        echo 'd-none';
                                                                    } ?>">Add </a>
            </div>
            <div class="table-responsive">
                <table id="product_table" class="table table-hover responsive nowrap align-middle mb-0 table table-borderless table-striped table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>S.No</th>

                            <th>Address</th>

                            <th>Phone</th>

                            <th>Email</th>
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


                                    <td><?php echo $row['address'] ?></td>

                                    <td><?php echo $row['phone'] ?></td>

                                    <td><?php echo $row['email'] ?></td>



                                    <td>

                                        <!-- <a class="btn btn-info" href="../blog_main.php?header_id=<?php echo $row['id']; ?>"><i class="metismenu-icon fa-regular fa-eye mr-2"></i>View</a> -->
                                        <a class="btn btn-success" href="add_contact.php?header_id_admin=<?php echo $row['id']; ?>"><i class="metismenu-icon fa-regular fa-pencil mr-2"></i>Edit</a>
                                        <a class="btn btn-outline-danger" href="contact.php?header_id_delete=<?php echo $row['id']; ?>"><i class="metismenu-icon fa-regular fa-trash mr-2"></i>Delete</a>

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