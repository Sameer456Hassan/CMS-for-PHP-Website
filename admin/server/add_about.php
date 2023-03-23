<?php
require '../inc/init.php';

/**
 * Validate blog and store into database
 */
if (isset($_POST['sec']) && $_POST['sec'] === "iptv_first") {
    $sec = $conn->real_escape_string($_POST['sec']);

    $heading = $conn->real_escape_string($_POST['heading']);
    $content = $conn->real_escape_string($_POST['content']);
    $content2 = $conn->real_escape_string($_POST['content2']);
    $content3 = $conn->real_escape_string($_POST['content3']);

    $current_time = date("M d, Y");

    $target_dir = "../../images/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $picture1 = $_FILES["fileToUpload"]["name"];
    $uploadOk = 1;
    $imageFileType1 = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        // echo $sec;
        $target_file2 = $target_dir . basename($_FILES["fileToUpload2"]["name"]);
        $picture2 = $_FILES["fileToUpload2"]["name"];
        $imageFileType2 = strtolower(pathinfo($target_file2, PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["fileToUpload2"]["tmp_name"]);
        if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file2)) {
            $qry = "INSERT INTO $sec ( `heading`, `text1`, `text2`, `text3`, `picture1`, `picture2`) VALUES ('$heading','$content','$content2','$content3','$picture1','$picture2')";
            $res = $conn->query($qry);
            if ($res == true) {
                echo 'success';
            } else {
                echo 'error';
            }
        }
    }
} else if (isset($_POST['sec']) && $_POST['sec'] === "fourth_hospitality") {
    $sec = $conn->real_escape_string($_POST['sec']);

    $content = $conn->real_escape_string($_POST['content']);
    $content2 = $conn->real_escape_string($_POST['content2']);
    $content3 = $conn->real_escape_string($_POST['content3']);
    $heading1 = $conn->real_escape_string($_POST['heading1']);
    $heading2 = $conn->real_escape_string($_POST['heading2']);
    $heading3 = $conn->real_escape_string($_POST['heading3']);

    $current_time = date("M d, Y");

    $qry = "INSERT INTO $sec ( `text1`, `text2`, `text3`,`heading1`,`heading2`,`heading3`) VALUES ('$content','$content2','$content3','$heading1','$heading2','$heading3')";
    $res = $conn->query($qry);
    if ($res == true) {
        echo 'success';
    } else {
        echo 'error';
    }
} else if (isset($_POST['sec']) && $_POST['sec'] === "third_hospitality") {
    $sec = $conn->real_escape_string($_POST['sec']);

    $content = $conn->real_escape_string($_POST['content']);
    $content2 = $conn->real_escape_string($_POST['content2']);
    $content3 = $conn->real_escape_string($_POST['content3']);


    $current_time = date("M d, Y");

    $target_dir = "../../images/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $picture = $_FILES["fileToUpload"]["name"];
    $uploadOk = 1;
    $imageFileType1 = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

        $qry = "INSERT INTO $sec ( `text1`, `text2`, `text3`, `picture`) VALUES ('$content','$content2','$content3','$picture')";
        $res = $conn->query($qry);
        if ($res == true) {
            echo 'success';
        } else {
            echo 'error';
        }
    }
} else if (isset($_POST['sec']) && $_POST['sec'] === "first_hospitality" || $_POST['sec'] === "second_hospitality") {
    $sec = $conn->real_escape_string($_POST['sec']);

    $content = $conn->real_escape_string($_POST['content']);
    $content2 = $conn->real_escape_string($_POST['content2']);


    $current_time = date("M d, Y");

    $target_dir = "../../images/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $picture = $_FILES["fileToUpload"]["name"];
    $uploadOk = 1;
    $imageFileType1 = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

        $qry = "INSERT INTO $sec ( `text1`, `text2`, `picture`) VALUES ('$content','$content2','$picture')";
        $res = $conn->query($qry);
        if ($res == true) {
            echo 'success';
        } else {
            echo 'error';
        }
    }
} else if (isset($_POST['heading_solar'])) {
    $sec = $conn->real_escape_string($_POST['sec']);

    $heading = $conn->real_escape_string($_POST['heading_solar']);
    $content = $conn->real_escape_string($_POST['content']);
    $points = $conn->real_escape_string($_POST['points']);
    $n_count = $conn->real_escape_string($_POST['n_count']);


    $current_time = date("M d, Y");


    $target_dir = "../../images/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $picture = $_FILES["fileToUpload"]["name"];
    $uploadOk = 1;
    $imageFileType1 = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

        $qry = "INSERT INTO $sec ( `heading`, `text`, `picture`, `point`, `n_count`) VALUES ('$heading','$content','$picture','$points','$n_count')";
        $res = $conn->query($qry);
        if ($res == true) {
            echo 'success';
        } else {
            echo 'error';
        }
    }
} else if (isset($_POST['points'])) {
    $sec = $conn->real_escape_string($_POST['sec']);

    $heading = $conn->real_escape_string($_POST['heading']);
    $content = $conn->real_escape_string($_POST['content']);
    $points = $conn->real_escape_string($_POST['points']);
    $n_count = $conn->real_escape_string($_POST['n_count']);


    $current_time = date("M d, Y");



    $target_dir = "../../images/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $picture = $_FILES["fileToUpload"]["name"];
    $uploadOk = 1;
    $imageFileType1 = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

        $qry = "INSERT INTO $sec ( `heading`, `text`, `picture`, `lis`, `n_count`) VALUES ('$heading','$content','$picture','$points','$n_count')";
        $res = $conn->query($qry);
        if ($res == true) {
            echo 'success';
        } else {
            echo 'error';
        }
    }
} else if (isset($_POST['heading_3'])) {
    $sec = $conn->real_escape_string($_POST['sec']);

    $content = $conn->real_escape_string($_POST['content']);
    $heading = $conn->real_escape_string($_POST['heading_3']);
    $content = $conn->real_escape_string($_POST['content']);


    $current_time = date("M d, Y");

    $target_dir = "../../images/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $picture = $_FILES["fileToUpload"]["name"];
    $uploadOk = 1;
    $imageFileType1 = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

        $qry = "INSERT INTO $sec ( `heading`, `text`, `picture`) VALUES ('$heading','$content','$picture')";
        $res = $conn->query($qry);
        if ($res == true) {
            echo 'success';
        } else {
            echo 'error';
        }
    }
} else if (isset($_FILES["fileToUpload2"]["name"])) {
    $sec = $conn->real_escape_string($_POST['sec']);

    $heading = $conn->real_escape_string($_POST['heading']);
    $content = $conn->real_escape_string($_POST['content']);
    $link = $conn->real_escape_string($_POST['learn_more_link']);

    $current_time = date("M d, Y");

    $target_dir = "../../images/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $picture1 = $_FILES["fileToUpload"]["name"];
    $uploadOk = 1;
    $imageFileType1 = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        // echo $sec;
        $target_file2 = $target_dir . basename($_FILES["fileToUpload2"]["name"]);
        $picture2 = $_FILES["fileToUpload2"]["name"];
        $imageFileType2 = strtolower(pathinfo($target_file2, PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["fileToUpload2"]["tmp_name"]);
        if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file2)) {
            $qry = "INSERT INTO $sec ( `heading`, `text`, `picture1`, `picture2`, `learn_more_link`) VALUES ('$heading','$content','$picture1','$picture2','$link')";
            $res = $conn->query($qry);
            if ($res == true) {
                echo 'success';
            } else {
                echo 'error';
            }
        }
    }
} else if (isset($_POST['heading2'])) {
    $sec = $conn->real_escape_string($_POST['sec']);

    $heading = $conn->real_escape_string($_POST['heading']);
    $content1 = $conn->real_escape_string($_POST['content1']);
    $heading2 = $conn->real_escape_string($_POST['heading2']);
    $content2 = $conn->real_escape_string($_POST['content2']);


    $qry = "INSERT INTO $sec ( `heading1`, `text1`, `text2`, `heading2`) VALUES ('$heading','$content2','$content2', '$heading2')";
    $res = $conn->query($qry);
    if ($res == true) {
        echo 'success';
    } else {
        echo 'error';
    }
} else if (isset($_POST['content3'])) {
    $sec = $conn->real_escape_string($_POST['sec']);

    $heading = $conn->real_escape_string($_POST['heading']);
    $content1 = $conn->real_escape_string($_POST['content1']);
    $content2 = $conn->real_escape_string($_POST['content2']);
    $content3 = $conn->real_escape_string($_POST['content3']);


    $qry = "INSERT INTO $sec ( `heading`, `text1`, `text2`, `text3`) VALUES ('$heading','$content2','$content2', '$content3')";
    $res = $conn->query($qry);
    if ($res == true) {
        echo 'success';
    } else {
        echo 'error';
    }
}
