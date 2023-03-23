<?php
require "inc/header.php";
$button = "Add_about";
$sec = $_GET['sec'];
if (isset($_GET['header_id_admin'])) {
    $id = $_GET['header_id_admin'];

    $qry = "SELECT * FROM $sec WHERE id=$id";
    $button = "Update_about";

    $res = $conn->query($qry);
    $row = $res->fetch_assoc();
}
if ($sec === "hero_about" || $sec === "solar_first") {
?>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <!-- <h5 class="card-title">Grid</h5> -->
            <form id="<?php echo $button; ?>">
                <input type="hidden" name="header_id" value="<?php echo !empty($row['id']) ? $row['id'] : ''; ?>">
                <input type="hidden" name="sec" value="<?php echo !empty($sec) ? $sec : ''; ?>">

                <div class="position-relative row form-group">
                    <label for="exampleTitle" class="col-sm-2 col-form-label">First Image</label>
                    <div class="col-sm-10">
                        <img src="../images/<?php echo !empty($row['picture1']) ? $row['picture1'] : ''; ?>" alt="" class="img-fluid admin_img">
                        <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
                    </div>
                </div>

                <div class="position-relative row form-group">
                    <label for="exampleTitle" class="col-sm-2 col-form-label">Second Image</label>
                    <div class="col-sm-10">
                        <img src="../images/<?php echo !empty($row['picture2']) ? $row['picture2'] : ''; ?>" alt="" class="img-fluid admin_img">
                        <input type="file" name="fileToUpload2" id="fileToUpload2" class="form-control">
                    </div>
                </div>

                <div class="position-relative row form-group">
                    <label for="exampleTitle" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="heading" cols="30" rows="5" placeholder="Enter a title"><?php echo !empty($row['heading']) ? $row['heading'] : ''; ?></textarea>
                    </div>
                </div>

                <div class="position-relative row form-group text1"><label for="exampleText" class="col-sm-2 col-form-label">Screen Icon Text</label>
                    <div class="col-sm-10">
                        <small>Please type using white or any other color than black because website theme is dark.</small>
                        <div id="summernote">
                            <?php echo !empty($row['text']) ? $row['text'] : ''; ?>
                        </div>
                        <!-- <textarea class="form-control" name="content" cols="30" rows="5" placeholder="Text"><?php echo !empty($row['text']) ? $row['text'] : ''; ?></textarea> -->

                    </div>
                </div>


                <div class="position-relative row form-group">
                    <label for="exampleTitle" class="col-sm-2 col-form-label">Learn More Link</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="learn_more_link" cols="30" rows="5" placeholder="Enter Learn More Link"><?php echo !empty($row['learn_more_link']) ? $row['learn_more_link'] : ''; ?></textarea>
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
if ($sec === "iptv_first") {
    $button = "Add_iptv_section";
    if (isset($_GET['header_id_admin'])) {
        $button = "Update_iptv_section";
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
                    <label for="exampleTitle" class="col-sm-2 col-form-label">First Image</label>
                    <div class="col-sm-10">
                        <img src="../images/<?php echo !empty($row['picture1']) ? $row['picture1'] : ''; ?>" alt="" class="img-fluid admin_img">
                        <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
                    </div>
                </div>

                <div class="position-relative row form-group">
                    <label for="exampleTitle" class="col-sm-2 col-form-label">Second Image</label>
                    <div class="col-sm-10">
                        <img src="../images/<?php echo !empty($row['picture2']) ? $row['picture2'] : ''; ?>" alt="" class="img-fluid admin_img">
                        <input type="file" name="fileToUpload2" id="fileToUpload2" class="form-control">
                    </div>
                </div>

                <div class="position-relative row form-group text1"><label for="exampleText" class="col-sm-2 col-form-label">horror Icon Text</label>
                    <div class="col-sm-10">
                        <small>Please type using white or any other color than black because website theme is dark.</small>
                        <div id="summernote">
                            <?php echo !empty($row['text1']) ? $row['text1'] : ''; ?>
                        </div>
                        <!-- <textarea class="form-control" name="content" cols="30" rows="5" placeholder="Text"><?php echo !empty($row['text']) ? $row['text'] : ''; ?></textarea> -->

                    </div>
                </div>

                <div class="position-relative row form-group text2"><label for="exampleText" class="col-sm-2 col-form-label">smart-tv Icon Text</label>
                    <div class="col-sm-10">
                        <small>Please type using white or any other color than black because website theme is dark.</small>
                        <div id="summernote">
                            <?php echo !empty($row['text2']) ? $row['text2'] : ''; ?>
                        </div>
                        <!-- <textarea class="form-control" name="content" cols="30" rows="5" placeholder="Text"><?php echo !empty($row['text']) ? $row['text'] : ''; ?></textarea> -->

                    </div>
                </div>

                <div class="position-relative row form-group text3"><label for="exampleText" class="col-sm-2 col-form-label">tv-box Icon Text</label>
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
}
if ($sec === "first_hospitality" || $sec === "second_hospitality") {
    $button = "Add_hospitality_section";
    if (isset($_GET['header_id_admin'])) {
        $button = "Update_hospitality_section";
    }
?>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <!-- <h5 class="card-title">Grid</h5> -->
            <form id="<?php echo $button; ?>">
                <input type="hidden" name="header_id" value="<?php echo !empty($row['id']) ? $row['id'] : ''; ?>">
                <input type="hidden" name="sec" value="<?php echo !empty($sec) ? $sec : ''; ?>">

                <div class="position-relative row form-group">
                    <label for="exampleTitle" class="col-sm-2 col-form-label">First Image</label>
                    <div class="col-sm-10">
                        <img src="../images/<?php echo !empty($row['picture']) ? $row['picture'] : ''; ?>" alt="" class="img-fluid admin_img">
                        <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
                    </div>
                </div>


                <div class="position-relative row form-group text1"><label for="exampleText" class="col-sm-2 col-form-label">Wifi Icon Text</label>
                    <div class="col-sm-10">
                        <small>Please type using white or any other color than black because website theme is dark.</small>
                        <div id="summernote">
                            <?php echo !empty($row['text1']) ? $row['text1'] : ''; ?>
                        </div>

                    </div>
                </div>


                <div class="position-relative row form-group text2"><label for="exampleText" class="col-sm-2 col-form-label">Theatre Icon Text</label>
                    <div class="col-sm-10">
                        <small>Please type using white or any other color than black because website theme is dark.</small>
                        <div id="summernote">
                            <?php echo !empty($row['text2']) ? $row['text2'] : ''; ?>
                        </div>

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
if ($sec === "third_hospitality") {
    $button = "Add_third_hospitality_section";
    if (isset($_GET['header_id_admin'])) {
        $button = "Update_third_hospitality_section";
    }
?>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <!-- <h5 class="card-title">Grid</h5> -->
            <form id="<?php echo $button; ?>">
                <input type="hidden" name="header_id" value="<?php echo !empty($row['id']) ? $row['id'] : ''; ?>">
                <input type="hidden" name="sec" value="<?php echo !empty($sec) ? $sec : ''; ?>">

                <div class="position-relative row form-group">
                    <label for="exampleTitle" class="col-sm-2 col-form-label">First Image</label>
                    <div class="col-sm-10">
                        <img src="../images/<?php echo !empty($row['picture']) ? $row['picture'] : ''; ?>" alt="" class="img-fluid admin_img">
                        <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
                    </div>
                </div>


                <div class="position-relative row form-group text1"><label for="exampleText" class="col-sm-2 col-form-label">Smart-tv Icon Text</label>
                    <div class="col-sm-10">
                        <small>Please type using white or any other color than black because website theme is dark.</small>
                        <div id="summernote">
                            <?php echo !empty($row['text1']) ? $row['text1'] : ''; ?>
                        </div>

                    </div>
                </div>


                <div class="position-relative row form-group text2"><label for="exampleText" class="col-sm-2 col-form-label">High-speed Icon Text</label>
                    <div class="col-sm-10">
                        <small>Please type using white or any other color than black because website theme is dark.</small>
                        <div id="summernote">
                            <?php echo !empty($row['text2']) ? $row['text2'] : ''; ?>
                        </div>

                    </div>
                </div>
                <div class="position-relative row form-group text3"><label for="exampleText" class="col-sm-2 col-form-label">Bookmark Icon Text</label>
                    <div class="col-sm-10">
                        <small>Please type using white or any other color than black because website theme is dark.</small>
                        <div id="summernote">
                            <?php echo !empty($row['text3']) ? $row['text3'] : ''; ?>
                        </div>

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
if ($sec === "fourth_hospitality") {
    $button = "Add_third_hospitality_section";
    if (isset($_GET['header_id_admin'])) {
        $button = "Update_third_hospitality_section";
    }
?>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <!-- <h5 class="card-title">Grid</h5> -->
            <form id="<?php echo $button; ?>">
                <input type="hidden" name="header_id" value="<?php echo !empty($row['id']) ? $row['id'] : ''; ?>">
                <input type="hidden" name="sec" value="<?php echo !empty($sec) ? $sec : ''; ?>">

                <div class="position-relative row form-group">
                    <label for="exampleTitle" class="col-sm-2 col-form-label">First Card Heading</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="heading1" cols="30" rows="5" placeholder="Enter a title"><?php echo !empty($row['heading1']) ? $row['heading1'] : ''; ?></textarea>
                    </div>
                </div>


                <div class="position-relative row form-group text1"><label for="exampleText" class="col-sm-2 col-form-label">First Card Text</label>
                    <div class="col-sm-10">
                        <small>Please type using white or any other color than black because website theme is dark.</small>
                        <div id="summernote">
                            <?php echo !empty($row['text1']) ? $row['text1'] : ''; ?>
                        </div>

                    </div>
                </div>

                <div class="position-relative row form-group">
                    <label for="exampleTitle" class="col-sm-2 col-form-label">Second Card Heading</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="heading2" cols="30" rows="5" placeholder="Enter a title"><?php echo !empty($row['heading2']) ? $row['heading2'] : ''; ?></textarea>
                    </div>
                </div>


                <div class="position-relative row form-group text2"><label for="exampleText" class="col-sm-2 col-form-label">Second Card Text</label>
                    <div class="col-sm-10">
                        <small>Please type using white or any other color than black because website theme is dark.</small>
                        <div id="summernote">
                            <?php echo !empty($row['text2']) ? $row['text2'] : ''; ?>
                        </div>

                    </div>
                </div>

                <div class="position-relative row form-group">
                    <label for="exampleTitle" class="col-sm-2 col-form-label">Third Card Heading</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="heading3" cols="30" rows="5" placeholder="Enter a title"><?php echo !empty($row['heading3']) ? $row['heading3'] : ''; ?></textarea>
                    </div>
                </div>


                <div class="position-relative row form-group text3"><label for="exampleText" class="col-sm-2 col-form-label">Third Card Text</label>
                    <div class="col-sm-10">
                        <small>Please type using white or any other color than black because website theme is dark.</small>
                        <div id="summernote">
                            <?php echo !empty($row['text3']) ? $row['text3'] : ''; ?>
                        </div>

                    </div>
                </div>
                <div class="position-relative row ">
                    <div class="col-lg-10 offset-lg-2 d-flex align-items-center">
                        <button type="submit" class="btn btn-success">
                            <?php
                            $button = 'submit';
                            echo $button; ?></button>
                        <div class="error_msg"></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php
}
if ($sec === "first_about") {
    $button = "Add_about_first";
    if (isset($_GET['header_id_admin'])) {
        $button = "Update_about_first_Section";
    }
?>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <!-- <h5 class="card-title">Grid</h5> -->
            <form id="<?php echo $button; ?>">
                <input type="hidden" name="header_id" value="<?php echo !empty($row['id']) ? $row['id'] : ''; ?>">
                <input type="hidden" name="sec" value="<?php echo !empty($sec) ? $sec : ''; ?>">


                <div class="position-relative row form-group">
                    <label for="exampleTitle" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="heading" cols="30" rows="5" placeholder="Enter a title"><?php echo !empty($row['heading']) ? $row['heading'] : ''; ?></textarea>
                    </div>
                </div>

                <div class="position-relative row form-group text1"><label for="exampleText" class="col-sm-2 col-form-label">Left Text</label>
                    <div class="col-sm-10">
                        <small>Please type using white or any other color than black because website theme is dark.</small>
                        <div id="summernote">
                            <?php echo !empty($row['text1']) ? $row['text1'] : ''; ?>
                        </div>
                        <!-- <textarea class="form-control" name="content" cols="30" rows="5" placeholder="Text"><?php echo !empty($row['text']) ? $row['text'] : ''; ?></textarea> -->

                    </div>
                </div>
                <div class="position-relative row form-group text2"><label for="exampleText" class="col-sm-2 col-form-label">Middle Text</label>
                    <div class="col-sm-10">
                        <small>Please type using white or any other color than black because website theme is dark.</small>
                        <div id="summernote">
                            <?php echo !empty($row['text2']) ? $row['text2'] : ''; ?>
                        </div>
                        <!-- <textarea class="form-control" name="content" cols="30" rows="5" placeholder="Text"><?php echo !empty($row['text']) ? $row['text'] : ''; ?></textarea> -->

                    </div>
                </div>
                <div class="position-relative row form-group text3"><label for="exampleText" class="col-sm-2 col-form-label">Last Text</label>
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
}
if ($sec === "second_about") {
    $button = "Add_about_second";
    if (isset($_GET['header_id_admin'])) {
        $button = "Update_about_second_Section";
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
                    <label for="exampleTitle" class="col-sm-2 col-form-label">Heading</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="heading" cols="30" rows="5" placeholder="Enter a title"><?php echo !empty($row['heading']) ? $row['heading'] : ''; ?></textarea>
                    </div>
                </div>

                <div class="position-relative row form-group text1"><label for="exampleText" class="col-sm-2 col-form-label">Screen Icon Text</label>
                    <div class="col-sm-10">
                        <small>Please type using white or any other color than black because website theme is dark.</small>
                        <div id="summernote">
                            <?php echo !empty($row['text']) ? $row['text'] : ''; ?>
                        </div>
                        <!-- <textarea class="form-control" name="content" cols="30" rows="5" placeholder="Text"><?php echo !empty($row['text']) ? $row['text'] : ''; ?></textarea> -->

                    </div>
                </div>

                <div class="position-relative row form-group">
                    <label for="exampleTitle" class="col-sm-2 col-form-label">Points</label>
                    <div class="col-sm-10">
                        <?php
                        if (!empty($row['lis'])) {

                            $point = $row['lis'];
                            $points = explode(",", $point);
                            $i = 1;
                            foreach ($points as $p) {
                                echo ' <textarea class="form-control mt-3" id="point' . $i . '" name="point' . $i . '" cols="30" rows="5" placeholder="Enter point">' .  $p  . '</textarea>';
                                $i++;
                            }
                        } else {
                        ?>
                            <textarea class="form-control" id="point1" name="point1" cols="30" rows="5" placeholder="Enter point"></textarea>

                        <?php
                        }
                        ?>
                    </div>
                    <input type="hidden" id="n_count" id="n_count" name="n_count" value="<?php echo !empty($row['n_count']) ? $row['n_count'] : 1; ?>">
                    <button class="btn btn-dark add_phone2 <?php if ($button === "Update_about") {
                                                                echo 'd-none';
                                                            } ?>">+</button>
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
if ($sec === "fourth_about") {
    $button = "Add_about_fourth";
    if (isset($_GET['header_id_admin'])) {
        $button = "Update_about_fourth_Section";
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
                    <label for="exampleTitle" class="col-sm-2 col-form-label">Heading</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="heading_solar" cols="30" rows="5" placeholder="Enter a title"><?php echo !empty($row['heading']) ? $row['heading'] : ''; ?></textarea>
                    </div>
                </div>

                <div class="position-relative row form-group text1"><label for="exampleText" class="col-sm-2 col-form-label">Screen Icon Text</label>
                    <div class="col-sm-10">
                        <small>Please type using white or any other color than black because website theme is dark.</small>
                        <div id="summernote">
                            <?php echo !empty($row['text']) ? $row['text'] : ''; ?>
                        </div>
                    </div>
                </div>

                <div class="position-relative row form-group">
                    <label for="exampleTitle" class="col-sm-2 col-form-label">Points</label>
                    <div class="col-sm-10">
                        <?php
                        if (!empty($row['point'])) {

                            $point = $row['point'];
                            $points = explode(",", $point);
                            $i = 1;
                            foreach ($points as $p) {
                                echo ' <textarea class="form-control mt-3" id="point' . $i . '" name="point' . $i . '" cols="30" rows="5" placeholder="Enter point">' .  $p  . '</textarea>';
                                $i++;
                            }
                        } else {
                        ?>
                            <textarea class="form-control" id="point1" name="point1" cols="30" rows="5" placeholder="Enter point"></textarea>

                        <?php
                        }
                        ?>
                    </div>
                    <input type="hidden" id="n_count" id="n_count" name="n_count" value="<?php echo !empty($row['n_count']) ? $row['n_count'] : 1; ?>">
                    <button class="btn btn-dark add_phone3 <?php if ($button === "Update_about") {
                                                                echo 'd-none';
                                                            } ?>">+</button>
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
if ($sec === "third_about" || $sec === "fifth_about" || $sec === "hero_hospitality") {

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
                    <label for="exampleTitle" class="col-sm-2 col-form-label">Heading</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="heading_3" cols="30" rows="5" placeholder="Enter a title"><?php echo !empty($row['heading']) ? $row['heading'] : ''; ?></textarea>
                    </div>
                </div>

                <div class="position-relative row form-group text1"><label for="exampleText" class="col-sm-2 col-form-label">Screen Icon Text</label>
                    <div class="col-sm-10">
                        <small>Please type using white or any other color than black because website theme is dark.</small>
                        <div id="summernote">
                            <?php echo !empty($row['text']) ? $row['text'] : ''; ?>
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
}
if ($sec === "sixth_about") {
    $button = "Add_about_sixth";
    if (isset($_GET['header_id_admin'])) {
        $button = "Update_about_sixth_Section";
    }
?>

    <div class="main-card mb-3 card">
        <div class="card-body">
            <!-- <h5 class="card-title">Grid</h5> -->
            <form id="<?php echo $button; ?>">
                <input type="hidden" name="header_id" value="<?php echo !empty($row['id']) ? $row['id'] : ''; ?>">
                <input type="hidden" name="sec" value="<?php echo !empty($sec) ? $sec : ''; ?>">

                <div class="position-relative row form-group">
                    <label for="exampleTitle" class="col-sm-2 col-form-label">Heading First Card</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="heading" cols="30" rows="5" placeholder="Enter a title"><?php echo !empty($row['heading1']) ? $row['heading1'] : ''; ?></textarea>
                    </div>
                </div>

                <div class="position-relative row form-group text1"><label for="exampleText" class="col-sm-2 col-form-label">First Card Text</label>
                    <div class="col-sm-10">
                        <small>Please type using white or any other color than black because website theme is dark.</small>
                        <div id="summernote">
                            <?php echo !empty($row['text1']) ? $row['text1'] : ''; ?>
                        </div>
                    </div>
                </div>


                <div class="position-relative row form-group">
                    <label for="exampleTitle" class="col-sm-2 col-form-label">Heading Second Card</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="heading2" cols="30" rows="5" placeholder="Enter a title"><?php echo !empty($row['heading2']) ? $row['heading2'] : ''; ?></textarea>
                    </div>
                </div>

                <div class="position-relative row form-group text2"><label for="exampleText" class="col-sm-2 col-form-label">Second Card Text</label>
                    <div class="col-sm-10">
                        <small>Please type using white or any other color than black because website theme is dark.</small>
                        <div id="summernote">
                            <?php echo !empty($row['text2']) ? $row['text2'] : ''; ?>
                        </div>
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