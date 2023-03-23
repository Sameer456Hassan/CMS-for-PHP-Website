<?php
require '../inc/init.php';


if (isset($_POST['phone'])) {
    $phone = $conn->real_escape_string($_POST['phone']);
    $email = $conn->real_escape_string($_POST['email']);
    $address = $conn->real_escape_string($_POST['address']);


    $qry = "INSERT INTO contact ( `address`, `email`, `phone`) VALUES ('$address','$email','$phone')";
    $res = $conn->query($qry);
    if ($res == true) {
        echo 'success';
    } else {
        echo 'error';
    }
}
