<?php

$emailErr = $subjectErr = $messageErr = $successMsg =  "";
$email = $subject = $message =  "";

if ($_SERVER['REQUEST_METHOD']=='POST') {
  $email = $_POST["email"];
  $message = $_POST["message"];
  $subject = $_POST["subject"];

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
  }
  elseif($subject == ""){
    $subjectErr = "Subject is required";
  }
  elseif($message == ""){
    $messageErr = "Message is required";
  }
  else {
    $emailErr = $subjectErr = $messageErr = "";
    $successMsg = "Submitted!";
  }
}

?>