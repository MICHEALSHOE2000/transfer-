<?php
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $to = "aderintomicheal6@gmail.com";
    $subject = "New Form Submission";
    $body = "";

    $body .="NAME: ".$name."\n";
    $body .="Phone No: ".$phone."\n";
    $body .="EMAIL: ".$email."\n";

	$message_sent = "";

    if(mail($to,$subject,$body)){
		    $message_sent = "sent";
    }
    
    echo $message_sent;
    
?>
