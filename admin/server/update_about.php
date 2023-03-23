<?php
require '../inc/init.php';

/**
 * Validate blog and update into database
 */
if (isset($_POST['sec']) && $_POST['sec'] === "iptv_first") {

    $sec = $conn->real_escape_string($_POST['sec']);

    $heading = $conn->real_escape_string($_POST['heading']);
    $text1 = $conn->real_escape_string($_POST['content']);
    $text2 = $conn->real_escape_string($_POST['content2']);
    $text3 = $conn->real_escape_string($_POST['content3']);

    $id = $_POST['header_id'];

    if (empty($_FILES["fileToUpload"]["name"]) && empty($_FILES["fileToUpload2"]["name"])) {

        $qry = "UPDATE $sec SET `heading`='$heading',`text1`='$text1',`text2`='$text2',`text3`='$text3' WHERE id='$id'";
        $res = $conn->query($qry);
        if ($res == true) {
            echo 'updated';
        } else {
            echo 'error';
        }
    } else if (!empty($_FILES["fileToUpload"]["name"]) && empty($_FILES["fileToUpload2"]["name"])) {

        $picture = $_FILES["fileToUpload"]["name"];
        $target_dir = "../../images/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
            // echo $heading;
            $qry = "UPDATE $sec SET `heading`='$heading',`text1`='$text1',`text2`='$text2',`text3`='$text3', `picture1`='$picture' WHERE id='$id'";
            $res = $conn->query($qry);
            if ($res == true) {
                echo 'updated';
            } else {
                echo 'error';
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else if (!empty($_FILES["fileToUpload2"]["name"]) && empty($_FILES["fileToUpload"]["name"])) {

        $picture = $_FILES["fileToUpload2"]["name"];
        $target_dir = "../../images/";
        $target_file = $target_dir . basename($_FILES["fileToUpload2"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["fileToUpload2"]["tmp_name"]);
        if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file)) {
            // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
            // echo $heading;
            $qry = "UPDATE $sec SET `heading`='$heading',`text1`='$text1',`text2`='$text2',`text3`='$text3', `picture2`='$picture' WHERE id='$id'";
            $res = $conn->query($qry);
            if ($res == true) {
                echo 'updated';
            } else {
                echo 'error';
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else if (!empty($_FILES["fileToUpload2"]["name"]) && !empty($_FILES["fileToUpload"]["name"])) {

        $picture2 = $_FILES["fileToUpload2"]["name"];
        $target_dir = "../../images/";
        $target_file = $target_dir . basename($_FILES["fileToUpload2"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["fileToUpload2"]["tmp_name"]);
        if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file)) {
            $picture1 = $_FILES["fileToUpload"]["name"];
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
                // echo $heading;
                $qry = "UPDATE $sec SET `heading`='$heading',`text1`='$text1',`text2`='$text2',`text3`='$text3', `picture1`='$picture1', `picture2`='$picture2' WHERE id='$id'";
                $res = $conn->query($qry);
                if ($res == true) {
                    echo 'updated';
                } else {
                    echo 'error';
                }
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
        // if ($check !== false) {
        //   echo "File is an image - " . $check["mime"] . ".";
        //   $uploadOk = 1;
        // } else {
        //   echo "File is not an image.";
        //   $uploadOk = 0;
        // }
    }
} else if (isset($_POST['sec']) && $_POST['sec'] === "third_hospitality") {
    $sec = $conn->real_escape_string($_POST['sec']);

    $content = $conn->real_escape_string($_POST['content']);
    $content2 = $conn->real_escape_string($_POST['content2']);
    $content3 = $conn->real_escape_string($_POST['content3']);


    $id = $_POST['header_id'];

    if (empty($_FILES["fileToUpload"]["name"])) {

        $qry = "UPDATE $sec SET `text2`='$content2',`text1`='$content', `text3`='$content3' WHERE id='$id'";
        $res = $conn->query($qry);
        if ($res == true) {
            echo 'updated';
        } else {
            echo 'error';
        }
    } else if (!empty($_FILES["fileToUpload"]["name"])) {

        $picture = $_FILES["fileToUpload"]["name"];
        $target_dir = "../../images/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
            // echo $heading;
            $qry = "UPDATE $sec SET `heading`='$heading',`text`='$content', `point`='$points', `picture`='$picture' WHERE id='$id'";
            $res = $conn->query($qry);
            if ($res == true) {
                echo 'updated';
            } else {
                echo 'error';
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
        // if ($check !== false) {
        //   echo "File is an image - " . $check["mime"] . ".";
        //   $uploadOk = 1;
        // } else {
        //   echo "File is not an image.";
        //   $uploadOk = 0;
        // }
    }
} else if (isset($_POST['sec']) && $_POST['sec'] === "fourth_hospitality") {
    $sec = $conn->real_escape_string($_POST['sec']);

    $content = $conn->real_escape_string($_POST['content']);
    $content2 = $conn->real_escape_string($_POST['content2']);
    $content3 = $conn->real_escape_string($_POST['content3']);
    $heading1 = $conn->real_escape_string($_POST['heading1']);
    $heading2 = $conn->real_escape_string($_POST['heading2']);
    $heading3 = $conn->real_escape_string($_POST['heading3']);

    $id = $_POST['header_id'];

    $current_time = date("M d, Y");

    $qry = "UPDATE $sec SET `heading1`='$heading1',`heading2`='$heading2',`heading3`='$heading3',`text1`='$content',`text2`='$content2',`text3`='$content3' WHERE id='$id'";
    $res = $conn->query($qry);
    if ($res == true) {
        echo 'updated';
    } else {
        echo 'error';
    }
} else if (isset($_POST['heading_solar'])) {
    $sec = $conn->real_escape_string($_POST['sec']);

    $heading = $conn->real_escape_string($_POST['heading_solar']);
    $content = $conn->real_escape_string($_POST['content']);
    $points = $conn->real_escape_string($_POST['points']);

    $id = $_POST['header_id'];

    if (empty($_FILES["fileToUpload"]["name"])) {

        $qry = "UPDATE $sec SET `heading`='$heading',`text`='$content', `point`='$points' WHERE id='$id'";
        $res = $conn->query($qry);
        if ($res == true) {
            echo 'updated';
        } else {
            echo 'error';
        }
    } else if (!empty($_FILES["fileToUpload"]["name"])) {

        $picture = $_FILES["fileToUpload"]["name"];
        $target_dir = "../../images/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
            // echo $heading;
            $qry = "UPDATE $sec SET `heading`='$heading',`text`='$content', `point`='$points', `picture`='$picture' WHERE id='$id'";
            $res = $conn->query($qry);
            if ($res == true) {
                echo 'updated';
            } else {
                echo 'error';
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
        // if ($check !== false) {
        //   echo "File is an image - " . $check["mime"] . ".";
        //   $uploadOk = 1;
        // } else {
        //   echo "File is not an image.";
        //   $uploadOk = 0;
        // }
    }
} else if (isset($_POST['points'])) {
    $sec = $conn->real_escape_string($_POST['sec']);

    $heading = $conn->real_escape_string($_POST['heading']);
    $content = $conn->real_escape_string($_POST['content']);
    $points = $conn->real_escape_string($_POST['points']);

    $id = $_POST['header_id'];

    if (empty($_FILES["fileToUpload"]["name"])) {

        $qry = "UPDATE $sec SET `heading`='$heading',`text`='$content', `lis`='$points' WHERE id='$id'";
        $res = $conn->query($qry);
        if ($res == true) {
            echo 'updated';
        } else {
            echo 'error';
        }
    } else if (!empty($_FILES["fileToUpload"]["name"])) {

        $picture = $_FILES["fileToUpload"]["name"];
        $target_dir = "../../images/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
            // echo $heading;
            $qry = "UPDATE $sec SET `heading`='$heading',`text`='$content', `lis`='$points', `picture`='$picture' WHERE id='$id'";
            $res = $conn->query($qry);
            if ($res == true) {
                echo 'updated';
            } else {
                echo 'error';
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
        // if ($check !== false) {
        //   echo "File is an image - " . $check["mime"] . ".";
        //   $uploadOk = 1;
        // } else {
        //   echo "File is not an image.";
        //   $uploadOk = 0;
        // }
    }
} else if (isset($_POST['heading_3'])) {
    $sec = $conn->real_escape_string($_POST['sec']);

    $heading = $conn->real_escape_string($_POST['heading_3']);
    $content = $conn->real_escape_string($_POST['content']);

    $id = $_POST['header_id'];

    if (empty($_FILES["fileToUpload"]["name"])) {

        $qry = "UPDATE $sec SET `heading`='$heading',`text`='$content' WHERE id='$id'";
        $res = $conn->query($qry);
        if ($res == true) {
            echo 'updated';
        } else {
            echo 'error';
        }
    } else if (!empty($_FILES["fileToUpload"]["name"])) {

        $picture = $_FILES["fileToUpload"]["name"];
        $target_dir = "../../images/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
            // echo $heading;
            $qry = "UPDATE $sec SET `heading`='$heading',`text`='$content', `picture`='$picture' WHERE id='$id'";
            $res = $conn->query($qry);
            if ($res == true) {
                echo 'updated';
            } else {
                echo 'error';
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
        // if ($check !== false) {
        //   echo "File is an image - " . $check["mime"] . ".";
        //   $uploadOk = 1;
        // } else {
        //   echo "File is not an image.";
        //   $uploadOk = 0;
        // }
    }
} else if (isset($_POST['content3'])) {

    $sec = $conn->real_escape_string($_POST['sec']);

    $heading = $conn->real_escape_string($_POST['heading']);
    $text1 = $conn->real_escape_string($_POST['content1']);
    $text2 = $conn->real_escape_string($_POST['content2']);
    $text3 = $conn->real_escape_string($_POST['content3']);
    $id = $_POST['header_id'];

    $qry = "UPDATE $sec SET `heading`='$heading',`text1`='$text1',`text2`='$text2',`text3`='$text3' WHERE id='$id'";
    $res = $conn->query($qry);
    if ($res == true) {
        echo 'updated';
    } else {
        echo 'error';
    }
} else if (isset($_POST['heading1'])) {

    $sec = $conn->real_escape_string($_POST['sec']);

    $heading = $conn->real_escape_string($_POST['heading1']);
    $text1 = $conn->real_escape_string($_POST['content1']);
    $text2 = $conn->real_escape_string($_POST['content2']);
    $heading2 = $conn->real_escape_string($_POST['heading2']);
    $id = $_POST['header_id'];

    $qry = "UPDATE $sec SET `heading1`='$heading1',`text1`='$text1',`text2`='$text2',`heading2`='$heading2' WHERE id='$id'";
    $res = $conn->query($qry);
    if ($res == true) {
        echo 'updated';
    } else {
        echo 'error';
    }
} else if (isset($_POST['content'])) {

    $sec = $conn->real_escape_string($_POST['sec']);

    $heading = $conn->real_escape_string($_POST['heading']);
    $text = $conn->real_escape_string($_POST['content']);
    $link = $conn->real_escape_string($_POST['learn_more_link']);
    $id = $_POST['header_id'];

    if (empty($_FILES["fileToUpload"]["name"]) && empty($_FILES["fileToUpload2"]["name"])) {

        $qry = "UPDATE $sec SET `heading`='$heading',`text`='$text', `learn_more_link`='$link' WHERE id='$id'";
        $res = $conn->query($qry);
        if ($res == true) {
            echo 'updated';
        } else {
            echo 'error';
        }
    } else if (!empty($_FILES["fileToUpload"]["name"]) && empty($_FILES["fileToUpload2"]["name"])) {

        $picture = $_FILES["fileToUpload"]["name"];
        $target_dir = "../../images/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
            // echo $heading;
            $qry = "UPDATE $sec SET `heading`='$heading',`text`='$text', `learn_more_link`='$link', `picture1`='$picture' WHERE id='$id'";
            $res = $conn->query($qry);
            if ($res == true) {
                echo 'updated';
            } else {
                echo 'error';
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
        // if ($check !== false) {
        //   echo "File is an image - " . $check["mime"] . ".";
        //   $uploadOk = 1;
        // } else {
        //   echo "File is not an image.";
        //   $uploadOk = 0;
        // }
    } else if (!empty($_FILES["fileToUpload2"]["name"]) && empty($_FILES["fileToUpload"]["name"])) {

        $picture = $_FILES["fileToUpload2"]["name"];
        $target_dir = "../../images/";
        $target_file = $target_dir . basename($_FILES["fileToUpload2"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["fileToUpload2"]["tmp_name"]);
        if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file)) {
            // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
            // echo $heading;
            $qry = "UPDATE $sec SET `heading`='$heading',`text`='$text', `learn_more_link`='$link', `picture2`='$picture' WHERE id='$id'";
            $res = $conn->query($qry);
            if ($res == true) {
                echo 'updated';
            } else {
                echo 'error';
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
        // if ($check !== false) {
        //   echo "File is an image - " . $check["mime"] . ".";
        //   $uploadOk = 1;
        // } else {
        //   echo "File is not an image.";
        //   $uploadOk = 0;
        // }
    } else if (!empty($_FILES["fileToUpload2"]["name"]) && !empty($_FILES["fileToUpload"]["name"])) {

        $picture2 = $_FILES["fileToUpload2"]["name"];
        $target_dir = "../../images/";
        $target_file = $target_dir . basename($_FILES["fileToUpload2"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["fileToUpload2"]["tmp_name"]);
        if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file)) {
            $picture1 = $_FILES["fileToUpload"]["name"];
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
                // echo $heading;
                $qry = "UPDATE $sec SET `heading`='$heading',`text`='$text', `learn_more_link`='$link', `picture1`='$picture1', `picture2`='$picture2' WHERE id='$id'";
                $res = $conn->query($qry);
                if ($res == true) {
                    echo 'updated';
                } else {
                    echo 'error';
                }
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
        // if ($check !== false) {
        //   echo "File is an image - " . $check["mime"] . ".";
        //   $uploadOk = 1;
        // } else {
        //   echo "File is not an image.";
        //   $uploadOk = 0;
        // }
    }
}
