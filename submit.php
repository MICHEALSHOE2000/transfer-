<?php
    
    $fname = $_POST['Name'];
    $lname = $_POST['email'];
    $email = $_POST['Phone No'];
    $message = $_POST['message'];

    $to = "aderintomicheal6@gmail.com";
    $subject = "New Form Submission";
    $body = "";

    $body .="FIRST NAME: ".$fname."\n";
    $body .="Phone No: ".$phone."\n";
    $body .="EMAIL: ".$email."\n";

	$message_sent = "";

    if(mail($to,$subject,$body)){
		    $message_sent = "sent";
    }
    
    echo $message_sent;
    
?>