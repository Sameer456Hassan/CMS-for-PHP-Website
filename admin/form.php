<?php
require "inc/header.php";

if (isset($_GET['header_id_delete'])) {
    $id = $_GET['header_id_delete'];
    $qry = "DELETE FROM inter_form WHERE id=$id";
    $res = $conn->query($qry);
    if ($res == true) {
        echo '<script>windows.location.href=home_header.php</script>';
    } else {
        echo '<script>windows.location.href=home_header.php</script>';
    }
}

$qry = "SELECT * FROM inter_form";
$res = $conn->query($qry);
// echo inter_form;
?>
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="table-responsive">
                <table id="product_table" class="table table-hover responsive nowrap align-middle mb-0 table table-borderless table-striped table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Name</th>
                            <th>Account</th>
                            <th>Ownership</th>
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

                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['Account']; ?></td>
                                    <td><?php echo $row['Ownership']; ?></td>

                                    <td>

                                        <a class="btn btn-info" href="view_form.php?header_id_admin=<?php echo $row['id']; ?>"><i class="metismenu-icon fa-regular fa-eye mr-2"></i>View</a>
                                        <a class="btn btn-outline-danger" href="form.php?header_id_delete=<?php echo $row['id']; ?>"><i class="metismenu-icon fa-regular fa-trash mr-2"></i>Delete</a>


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