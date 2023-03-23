<?php
require '../inc/init.php';

/**
 * Validate blog and store into database
 */
if (isset($_POST['content'])) {
    $sec = $conn->real_escape_string($_POST['sec']);

    $heading = $conn->real_escape_string($_POST['heading']);
    $content = $conn->real_escape_string($_POST['content']);
    $link = $conn->real_escape_string($_POST['link']);


    $current_time = date("M d, Y");



    $target_dir = "../../images/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $picture = $_FILES["fileToUpload"]["name"];
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        // echo $sec;
        $qry = "INSERT INTO $sec ( `heading`, `text`, `picture`, `learn_more_link`) VALUES ('$heading','$content','$picture','$link')";
        $res = $conn->query($qry);
        if ($res == true) {
            echo 'success';
        } else {
            echo 'error';
        }
    }
} else if (isset($_POST['content3'])) {
    $sec = $conn->real_escape_string($_POST['sec']);

    $heading = $conn->real_escape_string($_POST['heading']);
    $sub_heading = $conn->real_escape_string($_POST['sub_heading']);
    $content1 = $conn->real_escape_string($_POST['content1']);
    $content2 = $conn->real_escape_string($_POST['content2']);
    $content3 = $conn->real_escape_string($_POST['content3']);

    $target_dir = "../../images/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $picture = $_FILES["fileToUpload"]["name"];
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

        $qry = "INSERT INTO $sec ( `heading`, `text1`, `text2`, `text3`, `sub_heading` ,`picture`) VALUES ('$heading','$content2','$content2', '$content3','$sub_heading', '$picture')";
        $res = $conn->query($qry);
        if ($res == true) {
            echo 'success';
        } else {
            echo 'error';
        }
    }
} else if (isset($_POST['content1'])) {
    $sec = $conn->real_escape_string($_POST['sec']);

    $heading = $conn->real_escape_string($_POST['heading']);
    $sub_heading = $conn->real_escape_string($_POST['sub_heading']);
    $content1 = $conn->real_escape_string($_POST['content1']);
    $content2 = $conn->real_escape_string($_POST['content2']);

    $qry = "INSERT INTO $sec ( `heading`, `text1`, `text2`, `sub_heading`) VALUES ('$heading','$content2','$content2','$sub_heading')";
    $res = $conn->query($qry);
    if ($res == true) {
        echo 'success';
    } else {
        echo 'error';
    }
} else if (isset($_POST['bandwidth'])) {
    $sec = $conn->real_escape_string($_POST['sec']);

    $heading = $conn->real_escape_string($_POST['heading']);
    $users = $conn->real_escape_string($_POST['users']);
    $space = $conn->real_escape_string($_POST['space']);
    $bandwidth = $conn->real_escape_string($_POST['bandwidth']);
    $support = $conn->real_escape_string($_POST['support']);
    $featured = $conn->real_escape_string($_POST['featured']);
    $support2 = $conn->real_escape_string($_POST['support2']);
    $mysql = $conn->real_escape_string($_POST['mysql']);


    $qry = "INSERT INTO $sec ( `heading`, `space`, `bandwidth`, `support`,`support2`, `users`, `featured`) VALUES ('$heading','$space','$bandwidth','$support','$support2','$users','$featured')";
    $res = $conn->query($qry);
    if ($res == true) {
        echo 'success';
    } else {
        echo 'error';
    }
}
