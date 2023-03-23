<?php

require_once('./admin/config/config.php');

if (isset($_POST)) {
    // echo print_r($_POST);

    $name = $conn->real_escape_string($_POST['name']);
    $contact = $conn->real_escape_string($_POST['contact']);
    $Address = $conn->real_escape_string($_POST['Address']);
    $Date = $conn->real_escape_string($_POST['Date']);
    $Ownership = $conn->real_escape_string($_POST['Ownership']);
    $living_Years = $conn->real_escape_string($_POST['Years']);
    $living_Months = $conn->real_escape_string($_POST['Months']);
    $Employment = $conn->real_escape_string($_POST['Employment']);
    $Occupation = $conn->real_escape_string($_POST['Occupation']);
    $Purpose = $conn->real_escape_string($_POST['Purpose']);
    $Employment_year = $conn->real_escape_string($_POST['Years2']);
    $Employment_month = $conn->real_escape_string($_POST['Months2']);
    $Account = $conn->real_escape_string($_POST['Account']);


    $qry = "INSERT INTO inter_form ( `name`, `contact`, `Address`, `Date`, `Ownership` ,`living_Years`,`living_Months`,`Employment`,`Occupation`,`Purpose`,`Employment_year`,`Employment_month`,`Account`, `status`) VALUES ('$name','$contact','$Address', '$Date','$Ownership', '$living_Years', '$living_Months', '$Employment', '$Occupation', '$Purpose', '$Employment_year', '$Employment_month', '$Account','enable')";
    $res = $conn->query($qry);
    if ($res == true) {
        echo 'success';
    } else {
        echo 'error';
    }



    $to = "info@sirtechjamaica.com";
    $subject = "SirTech Form Submission";

    $message = "
        <html>
        <head>
        <title>SirTech</title>
        </head>
        <body>
        <h5>Name: " . $name . "</h5>
        <h5>contact: " . $contact . "</h5>
        <h5>Address: " . $Address . "</h5>
        <h5>Ownership: " . $Ownership . "</h5>
        <h5>Years living at the premises: " . $living_Years . " Years and" . $living_Months . " Months</h5>
        <h5>Place Of Employment: " . $Employment . "</h5>
        <h5>Tenure Of Employment:: " . $Employment_year . " Years and" . $Employment_month . "</h5>
        <h5>Type of Account:: " . $Account . "</h5>
        <h5>Name: " . $name . "</h5>

       
        </body>
        </html>
        ";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


    if (mail($to, $subject, $message, $headers)) {
        echo 'success';
    } else {
        echo 'error';
    }
}
