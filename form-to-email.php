<?php
$name = $_POST['name']; //'name' has to be the same as the name value on the form input element
$email = $_POST['email'];
$message = $_POST['message'];
$human = $_POST['human'];
$from = $_POST['email'];
$subject = $_POST['subject'];
$body = "From: $name\n E-Mail: $email\n Message:\n $message";

$headers = "From: $email" . "\r\n" .
"Reply-To: $email" . "\r\n" .
"X-Mailer: PHP/" . phpversion();

if(isset($_POST['submit']) && ($_POST['human']) == '4') {
mail ('jkm253@cornell.edu', $subject, $body, $headers);  //mail sends it to the SMTP server side which sends the email
    echo "<p>Your message has been sent!</p>";
}

else {
    echo "<p>Something went wrong, go back and try again!</p>";
}
if (!isset($_POST['submit']) && ($_POST['human']) != '4') {
echo "<p>You answered the anti-spam question incorrectly!</p>";
}
?>
