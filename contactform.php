<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];

$mailTo="kamwing614@gmail.com"; //gmail address is not work in this program as google blocked
$headers="From: ".$mailFrom;
$txt="You have received an e-mail from ".$name.".\n\n".$message;


mail($mailTo,$subject,$txt, $headers);
header("Location: contactUs.php?mailsend")
}
