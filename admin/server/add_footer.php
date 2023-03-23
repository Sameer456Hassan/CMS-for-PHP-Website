<?php
require '../inc/init.php';

function get_numeric($val)
{
    if (is_numeric($val)) {
        return $val + 0;
    }
    return 0;
}

if (isset($_POST['instagram'])) {
    $facebook = $conn->real_escape_string($_POST['facebook']);
    $instagram = $conn->real_escape_string($_POST['instagram']);
    $twitter = $conn->real_escape_string($_POST['twitter']);
    $address = $conn->real_escape_string($_POST['address']);
    $phones = $conn->real_escape_string($_POST['phones']);
    $n_count = $conn->real_escape_string($_POST['n_count']);



    $qry = "INSERT INTO footer ( `facebook`, `instagram`, `twitter`, `address`, `phone`, `n_count`) VALUES ('$facebook','$instagram','$twitter','$address','$phones','$n_count')";
    $res = $conn->query($qry);
    if ($res == true) {
        echo 'success';
    } else {
        echo 'error';
    }
}
