<?php
require '../inc/init.php';

/**
 * Validate blog and update into database
 */

if (isset($_POST['content'])) {

    $phone = $conn->real_escape_string($_POST['phone']);
    $email = $conn->real_escape_string($_POST['email']);
    $address = $conn->real_escape_string($_POST['address']);
    $id = $_POST['header_id'];


    $qry = "UPDATE contact SET `phone`='$phone',`email`='$email', `address`='$address' WHERE id='$id'";
    $res = $conn->query($qry);
    if ($res == true) {
        echo 'updated';
    } else {
        echo 'error';
    }
}
