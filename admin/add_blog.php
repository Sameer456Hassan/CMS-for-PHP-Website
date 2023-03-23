<?php
require "inc/header.php";
$button = "Add";
$sec = $_GET['sec'];
if (isset($_GET['header_id_admin'])) {
    $id = $_GET['header_id_admin'];

    $qry = "SELECT * FROM $sec WHERE id=$id";
    $button = "Update";

    $res = $conn->query($qry);
    $row = $res->fetch_assoc();

}
// else {
// echo "<script>window.location.href='home_header.php'</script>";
// }

// echo $sec;

if ($sec === 'home_fifth') {
    $button = "Add_Fifth";
    if (isset($_GET['header_id_admin'])) {
        $button = "Update_Fifth_Section";
    }

?>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <!-- <h5 class="card-title">Grid</h5> -->
            <form id="<?php echo $button; ?>">
                <input type="hidden" name="header_id" value="<?php echo !empty($row['id']) ? $row['id'] : ''; ?>">
                <input type="hidden" name="sec" value="<?php echo !empty($sec) ? $sec : ''; ?>">


                <div class="position-relative row form-group">
                    <label for="exampleTitle" class="col-sm-2 col-form-label">Heading</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="heading" cols="30" rows="5" placeholder="Enter a title"><?php echo !empty($row['heading']) ? $row['heading'] : ''; ?></textarea>
                    </div>
                </div>

                <div class="position-relative row form-group">
                    <label for="exampleTitle" class="col-sm-2 col-form-label">Sub Heading</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="sub_heading" cols="30" rows="5" placeholder="Enter Sub Heading"><?php echo !empty($row['sub_heading']) ? $row['sub_heading'] : ''; ?></textarea>
                    </div>
                </div>

                <div class="position-relative row form-group text1"><label for="exampleText" class="col-sm-2 col-form-label">Middle text</label>
                    <div class="col-sm-10">
                        <small>Please type using white or any other color than black because website theme is dark.</small>
                        <div id="summernote">
                            <?php echo !empty($row['text1']) ? $row['text1'] : ''; ?>
                        </div>
                        <!-- <textarea class="form-control" name="content" cols="30" rows="5" placeholder="Text"><?php echo !empty($row['text']) ? $row['text'] : ''; ?></textarea> -->

                    </div>
                </div>
                <div class="position-relative row form-group  text2"><label for="exampleText" class="col-sm-2 col-form-label">Right Text</label>
                    <div class="col-sm-10">
                        <small>Please type using white or any other color than black because website theme is dark.</small>
                        <div id="summernote">
                            <?php echo !empty($row['text2']) ? $row['text2'] : ''; ?>
                        </div>
                        <!-- <textarea class="form-control" name="content" cols="30" rows="5" placeholder="Text"><?php echo !empty($row['text']) ? $row['text'] : ''; ?></textarea> -->

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
} else if ($sec === 'home_pricing') {
    $button = "Add_pricing";
    if (isset($_GET['header_id_admin'])) {
        $button = "Update_pricing_Section";
    }
?>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <!-- <h5 class="card-title">Grid</h5> -->
            <form id="<?php echo $button; ?>">
                <input type="hidden" name="header_id" value="<?php echo !empty($row['id']) ? $row['id'] : ''; ?>">
                <input type="hidden" name="sec" value="<?php echo !empty($sec) ? $sec : ''; ?>">


                <div class="position-relative row form-group">
                    <label for="exampleTitle" class="col-sm-2 col-form-label">Heading</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="heading" cols="30" rows="5" placeholder="Enter a title"><?php echo !empty($row['heading']) ? $row['heading'] : ''; ?></textarea>
                    </div>
                </div>

                <div class="position-relative row form-group">
                    <label for="exampleTitle" class="col-sm-2 col-form-label">Users</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="users" cols="30" rows="5" placeholder="Enter users"><?php echo !empty($row['users']) ? $row['users'] : ''; ?></textarea>
                    </div>
                </div>

                <div class="position-relative row form-group">
                    <label for="exampleTitle" class="col-sm-2 col-form-label"> Disk Space</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="space" cols="30" rows="5" placeholder="Enter Disk Space"><?php echo !empty($row['space']) ? $row['space'] : ''; ?></textarea>
                    </div>
                </div>

                <div class="position-relative row form-group">
                    <label for="exampleTitle" class="col-sm-2 col-form-label">Bandwidth</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="bandwidth" cols="30" rows="5" placeholder="Enter bandwidth"><?php echo !empty($row['bandwidth']) ? $row['bandwidth'] : ''; ?></textarea>
                    </div>
                </div>

                <div class="position-relative row form-group">
                    <label for="exampleTitle" class="col-sm-2 col-form-label">MySql</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="mysql" cols="30" rows="5" placeholder="Enter mysql"><?php echo !empty($row['mysql']) ? $row['mysql'] : ''; ?></textarea>
                    </div>
                </div>

                <div class="position-relative row form-group">
                    <label for="exampleTitle" class="col-sm-2 col-form-label">Support</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="support" cols="30" rows="5" placeholder="Enter Support"><?php echo !empty($row['support']) ? $row['support'] : ''; ?></textarea>
                    </div>
                </div>
                <div class="position-relative row form-group">
                    <label for="exampleTitle" class="col-sm-2 col-form-label">Extra Support (optional)</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="support2" cols="30" rows="5" placeholder="Enter Support"><?php echo !empty($row['support2']) ? $row['support2'] : ''; ?></textarea>
                    </div>
                </div>
                <div class="position-relative row form-group">
                    <label for="exampleTitle" class="col-sm-2 col-form-label">Featured *</label>
                    <div class="col-sm-10">
                        <select name="featured" id="featured" class="form-control">
                            <option <?php if (!empty($row['featured']) && $row['featured'] === 'featured') {
                                        echo 'selected';
                                    } ?> value="featured">featured</option>
                            <option <?php if (!empty($row['featured']) && $row['featured'] === 'not_featured') {
                                        echo 'selected';
                                    } ?> value="not_featured">not featured</option>
                        </select>
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
} else if ($sec === 'home_sixth') {
    $button = "Add_sixth";
    if (isset($_GET['header_id_admin'])) {
        $button = "Update_sixth_Section";
    }
?>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <!-- <h5 class="card-title">Grid</h5> -->
            <form id="<?php echo $button; ?>">
                <input type="hidden" name="header_id" value="<?php echo !empty($row['id']) ? $row['id'] : ''; ?>">
                <input type="hidden" name="sec" value="<?php echo !empty($sec) ? $sec : ''; ?>">

                <div class="position-relative row form-group">
                    <label for="exampleTitle" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <img src="../images/<?php echo !empty($row['picture']) ? $row['picture'] : ''; ?>" alt="" class="img-fluid admin_img">
                        <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
                    </div>
                </div>

                <div class="position-relative row form-group">
                    <label for="exampleTitle" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="heading" cols="30" rows="5" placeholder="Enter a title"><?php echo !empty($row['heading']) ? $row['heading'] : ''; ?></textarea>
                    </div>
                </div>

                <div class="position-relative row form-group">
                    <label for="exampleTitle" class="col-sm-2 col-form-label">Sub Heading</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="sub_heading" cols="30" rows="5" placeholder="Enter Sub Heading"><?php echo !empty($row['sub_heading']) ? $row['sub_heading'] : ''; ?></textarea>
                    </div>
                </div>

                <div class="position-relative row form-group text1"><label for="exampleText" class="col-sm-2 col-form-label">Screen Icon Text</label>
                    <div class="col-sm-10">
                        <small>Please type using white or any other color than black because website theme is dark.</small>
                        <div id="summernote">
                            <?php echo !empty($row['text1']) ? $row['text1'] : ''; ?>
                        </div>
                        <!-- <textarea class="form-control" name="content" cols="30" rows="5" placeholder="Text"><?php echo !empty($row['text']) ? $row['text'] : ''; ?></textarea> -->

                    </div>
                </div>
                <div class="position-relative row form-group text2"><label for="exampleText" class="col-sm-2 col-form-label">TV Icon Text</label>
                    <div class="col-sm-10">
                        <small>Please type using white or any other color than black because website theme is dark.</small>
                        <div id="summernote">
                            <?php echo !empty($row['text2']) ? $row['text2'] : ''; ?>
                        </div>
                        <!-- <textarea class="form-control" name="content" cols="30" rows="5" placeholder="Text"><?php echo !empty($row['text']) ? $row['text'] : ''; ?></textarea> -->

                    </div>
                </div>
                <div class="position-relative row form-group text3"><label for="exampleText" class="col-sm-2 col-form-label">Devices Icon Text</label>
                    <div class="col-sm-10">
                        <small>Please type using white or any other color than black because website theme is dark.</small>
                        <div id="summernote">
                            <?php echo !empty($row['text3']) ? $row['text3'] : ''; ?>
                        </div>
                        <!-- <textarea class="form-control" name="content" cols="30" rows="5" placeholder="Text"><?php echo !empty($row['text']) ? $row['text'] : ''; ?></textarea> -->

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
} else {
?>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <!-- <h5 class="card-title">Grid</h5> -->
            <form id="<?php echo $button; ?>">
                <input type="hidden" name="header_id" value="<?php echo !empty($row['id']) ? $row['id'] : ''; ?>">
                <input type="hidden" name="sec" value="<?php echo !empty($sec) ? $sec : ''; ?>">

                <div class="position-relative row form-group">
                    <label for="exampleTitle" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <img src="../images/<?php echo !empty($row['picture']) ? $row['picture'] : ''; ?>" alt="" class="img-fluid admin_img">
                        <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
                    </div>
                </div>

                <div class="position-relative row form-group">
                    <label for="exampleTitle" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="heading" cols="30" rows="5" placeholder="Enter a title"><?php echo !empty($row['heading']) ? $row['heading'] : ''; ?></textarea>
                    </div>
                </div>

                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <small>Please type using white or any other color than black because website theme is dark.</small>
                        <div id="summernote">
                            <?php echo !empty($row['text']) ? $row['text'] : ''; ?>
                        </div>
                        <!-- <textarea class="form-control" name="content" cols="30" rows="5" placeholder="Text"><?php echo !empty($row['text']) ? $row['text'] : ''; ?></textarea> -->

                    </div>
                </div>

                <div class="position-relative row form-group">
                    <label for="exampleTitle" class="col-sm-2 col-form-label">Link</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="link" value="<?php echo !empty($row['learn_more_link']) ? $row['learn_more_link'] : ''; ?>" placeholder="Enter Learn More Button Link">
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
}
require "inc/footer.php";
?>