<?php $name = $_POST['fullname'];
$email = $_POST['email'];
$message = $_POST['enquiry'];
$tel = $_POST['tel'];
$formcontent="From: $name \n Message: $message \n Telephone: $tel";
$recipient = "archergilly84@gmail.com";
$subject = "Enquiry Form - $name";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " - " . "<a href='index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>