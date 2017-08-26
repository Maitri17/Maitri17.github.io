<?php
extract($_POST)
$to = "maitrithakkar61@gmail.com";
$subject = "Website Inquiry - $subject";
$txt = "Hi i'm $name , $msg";
$headers = "admin@silverwingtechnologies.com";

mail($to,$subject,$txt,$headers);
header("location:index.html");
?>