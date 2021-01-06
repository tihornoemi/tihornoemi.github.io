<?php
if($_POST["submit"]) {
    $recipient="tihornoemi99@gmail.com"; //Enter your mail address
    $subject="Üzenet a portfólióoldalról"; //Subject 
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];
    $mailBody="Név: $sender\nEmail E-mail:: $senderEmail\n\nÜzenet: $message";
    mail($recipient, $subject, $mailBody);
    sleep(1);
    header("https://tihornoemi.github.io/tihornoemi-portfolio.github.io/"); // Set here redirect page or destination page
}
?>