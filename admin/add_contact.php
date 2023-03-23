<?php
require "inc/header.php";
$button = "Add_contact";
if (isset($_GET['header_id_admin'])) {

    $id = $_GET['header_id_admin'];

    $qry = "SELECT * FROM contact WHERE id=$id";
    $button = "Update_contact";

    $res = $conn->query($qry);
    $row = $res->fetch_assoc();
}


?>
<div class="main-card mb-3 card">
    <div class="card-body">
        <!-- <h5 class="card-title">Grid</h5> -->
        <form id="<?php echo $button; ?>">
            <input type="hidden" name="header_id" value="<?php echo !empty($row['id']) ? $row['id'] : ''; ?>">

            <div class="position-relative row form-group">
                <label for="exampleTitle" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="address" cols="30" rows="5" placeholder="Enter a title"><?php echo !empty($row['address']) ? $row['address'] : ''; ?></textarea>
                </div>
            </div>

            <div class="position-relative row form-group">
                <label for="exampleTitle" class="col-sm-2 col-form-label">Phone Number</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="phone" cols="30" rows="5" placeholder="Enter Phone Number"><?php echo !empty($row['phone']) ? $row['phone'] : ''; ?></textarea>
                </div>
            </div>

            <div class="position-relative row form-group">
                <label for="exampleTitle" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input class="form-control" name="email" placeholder="Enter Email" value="<?php echo !empty($row['email']) ? $row['email'] : ''; ?> " />
                </div>
            </div>

            <div class="position-relative row ">
                <div class="col-lg-10 offset-lg-2 d-flex align-items-center">
                    <button type="submit" class="btn btn-success"><?php echo $button; ?></button>
                    <div class="error_msg"></div>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
require "inc/footer.php";
?>