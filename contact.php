<?php

if(isset($_POST['submit'])) 
{
	$name = $_POST['name'];
	$mailFrom = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	$mailTo = "adam@adamcoard.com";
	$headers = "From: ".$mailFrom;
	$txt = "You have received a message from ".$name.".\n\n".$message;
	
	
	mail($mailTo, $subject, $txt, $headers);
	header("Location: contact.php?mailsend");
}

?>