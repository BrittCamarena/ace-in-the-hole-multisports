<?php

if (isset($_POST["name"])) {
    $name = $_POST["name"];
    $mailFrom = $_POST["email"];
    $role = $_POST["role"];
    $subject = $_POST["subject"];
    $message = $_POST["contactMessage"];

    $mailTo = "brittany.camarena@pcc.edu";
    $headers = "From: " . $mailFrom;
    $text = "You have received an email from " . $name . " inquiring as: " . $role . "\n\n" . $message;

    mail($mailTo, $subject, $text, $headers);
}