<?php $name = $_POST['fullname'];
$email = $_POST['email'];
$message = $_POST['enquiry'];
$tel = $_POST['tel'];
$company = $_POST['company'];
$formcontent="From: $name \n Message: $message \n Telephone: $tel \n Company: $company";
$recipient = "cpmsmanchester@btinternet.com";
$subject = "Enquiry Form - $name";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " - " . "<a href='index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>