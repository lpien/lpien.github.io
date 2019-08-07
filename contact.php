<?php
if($_POST["message"]) {

	$email_to = "lpien@u.rochester.edu";
	$email_subject = "CONTACT PAGE FROM WEBSITE - ";

	function died($error){
		echo "The following was incorrect: ";
		echo $error;
		die();
	}

	if(!isset ($_POST['']))
    mail("your@email.address", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>