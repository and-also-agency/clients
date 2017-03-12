<?php
  if($_POST){
    $to = 'esmedanceco@gmail.com, dani@andalsoagency.com';
    $subject = 'Gravity Dance Collective Form Submission';
    $from_name = $_POST['name'];
    $from_email = $_POST['email'];
    $message = $_POST['message'];
    $robotest = $_POST['special-requests'];
    if($robotest != '' || $from_email == '' || $from_name == '') {
		$error = "You are a gutless robot.";
    }
    else{
		$headers = "From: $from_name <$from_email>";
		mail($to, $subject, $message, $headers);
		header('Location: /thank-you.php');
	}
  }
?>
