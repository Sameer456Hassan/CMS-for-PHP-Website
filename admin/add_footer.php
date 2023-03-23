<?php
require "inc/header.php";
$button = "Add_footer";
if (isset($_GET['header_id_admin'])) {

    $id = $_GET['header_id_admin'];

    $qry = "SELECT * FROM footer WHERE id=$id";
    $button = "Update_footer";

    $res = $conn->query($qry);
    $row = $res->fetch_assoc();
}


?>
<div class="main-card mb-3 card">
    <div class="card-body">
        <!-- <h5 class="card-title">Grid</h5> -->
        <form id="<?php echo $button; ?>">
            <input type="hidden" id="header_id" name="header_id" value="<?php echo !empty($row['id']) ? $row['id'] : ''; ?>">

            <div class="position-relative row form-group">
                <label for="exampleTitle" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="address" name="address" cols="30" rows="5" placeholder="Enter a title"><?php echo !empty($row['address']) ? $row['address'] : ''; ?></textarea>
                </div>
            </div>

            <div class="position-relative row form-group">
                <label for="exampleTitle" class="col-sm-2 col-form-label">Phone Number</label>
                <div class="col-sm-10">
                    <?php
                    if (!empty($row['phone'])) {

                        $phone = $row['phone'];
                        $phones = explode(",", $phone);
                        $i = 1;
                        foreach ($phones as $p) {
                            echo ' <textarea class="form-control mt-3" id="phone' . $i . '" name="phone1" cols="30" rows="5" placeholder="Enter Phone Number">' .  $p  . '</textarea>';
                            $i++;
                        }
                    } else {
                    ?>
                        <textarea class="form-control" id="phone1" name="phone1" cols="30" rows="5" placeholder="Enter Phone Number"></textarea>

                    <?php
                    }
                    ?>
                </div>
                <input type="hidden" id="n_count" id="n_count" name="n_count" value="<?php echo !empty($row['n_count']) ? $row['n_count'] : 1; ?>">
                <button class="btn btn-dark add_phone <?php if ($button === "Update_footer") {
                                                            echo 'd-none';
                                                        } ?>">+</button>
            </div>

            <div class="position-relative row form-group">
                <label for="exampleTitle" class="col-sm-2 col-form-label">Facebook Link</label>
                <div class="col-sm-10">
                    <input class="form-control" id="facebook" name="facebook" placeholder="Enter Facebook Link" value="<?php echo !empty($row['facebook']) ? $row['facebook'] : ''; ?> " />
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="exampleTitle" class="col-sm-2 col-form-label">Instagram Link</label>
                <div class="col-sm-10">
                    <input class="form-control" id="instagram" name="instagram" placeholder="Enter Instagram Link" value="<?php echo !empty($row['instagram']) ? $row['instagram'] : ''; ?> " />
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="exampleTitle" class="col-sm-2 col-form-label">Twitter Link</label>
                <div class="col-sm-10">
                    <input class="form-control" id="twitter" name="twitter" placeholder="Enter Twitter Link" value="<?php echo !empty($row['twitter']) ? $row['twitter'] : ''; ?> " />
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