<?php

$name = $_POST ['name'];
$email = $_POST ['email'];
$subject = $_POST ['subject'];
$message = $_POST ['message'];

$mailheader = 'From:'.$name."<".$email.">\r\n";

$recipient = 'itodosunday.eneojo@gmail.com';

mail($recipient, $subject, $message, $mailheader)
or die('Oh dear 😪, Try again or connect using any icon below')

echo "Thanks! 😁. I will respond as soon as possible";


?>

