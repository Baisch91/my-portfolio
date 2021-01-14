<?php
if(isset($_POST['submit'])) {
$to = "cbaisch91@outlook.com";
$subject = $_POST['inquiry'];
$name_field = $_POST['name'];
$email_field = $_POST['email'];
$message = $_POST['message'];
 
$body = "From: $name_field\n E-Mail: $email_field\n Message:\n $message";
 
mail($to, $subject, $body);
} else {
echo "Email was not sent.";
}
?>