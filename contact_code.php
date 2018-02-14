<?php 
	
	// define variables and set to empty values
	$name_error = $email_error =  "";
	$name = $email =  $subject = $message = $success = "";
	
	//form is submitted with POST method
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["name"])) {
			$name_error = "Name is required";
			} else {
			$name = test_input($_POST["name"]);
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
				$name_error = "Only letters and white space allowed"; 
			}
		}
		
		if (empty($_POST["email"])) {
			$email_error = "Email is required";
			} else {
			$email = test_input($_POST["email"]);
			// check if e-mail address is well-formed
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$email_error = "Invalid email format"; 
			}
		}
			if (empty($_POST["from"])) {
			$from = "";
			} else {
			$from = test_input($_POST["from"]);
		}
		
		if (empty($_POST["subject"])) {
			$subject = "";
			} else {
			$subject = test_input($_POST["subject"]);
		}
		
		if (empty($_POST["message"])) {
			$message = "";
			} else {
			$message = test_input($_POST["message"]);
		}
		
		if ($name_error == '' and $email_error == '' and $subject_error == '' and $from_error == ''  ){
			$message_body = '';
			unset($_POST['submit']);
			foreach ($_POST as $key => $value){
				$message_body.=  "$key: $value\n";
			}
			//$from="'BIMA<bima@website.al>'";
			$to = 'samlul12@htl-shkoder.com';
			$subject = 'BIMA';
			$body = "Nga: $name\nE-Mail: $email\nMessage: $message";
			if (mail($to, $subject, $body,  "From: BIMA<bima@website.al>\r\n")){
				$success = "Faleminderit qe na kontaktuat!";
				$name = $email = $subject = $message = $from='';
			}

		}
		
	}
	
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
?>