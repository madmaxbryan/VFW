<?php

$first_name = $_POST['first_name'];
$to = "themadmax@gmail.com";
$subject = "Test Email";
mail ($to, $subject, $message);

?>