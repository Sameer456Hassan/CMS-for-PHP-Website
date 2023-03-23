<?php
require '../inc/init.php';

/**
 * Validate blog and update into database
 */

if (isset($_POST['facebook'])) {

    $facebook = $conn->real_escape_string($_POST['facebook']);
    $instagram = $conn->real_escape_string($_POST['instagram']);
    $twitter = $conn->real_escape_string($_POST['twitter']);
    $address = $conn->real_escape_string($_POST['address']);
    $phones = $conn->real_escape_string($_POST['phones']);

    $id = $_POST['header_id'];


    $qry = "UPDATE footer SET `facebook`='$facebook',`instagram`='$instagram', `twitter`='$twitter', `address`='$address', `phone`='$phones' WHERE id='$id'";
    $res = $conn->query($qry);
    if ($res == true) {
        echo 'updated';
    } else {
        echo 'error';
    }
}
