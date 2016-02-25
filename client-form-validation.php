<?php
		$firstName = $_POST['firstname'];
		$lastName = $_POST['lastname'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$emailPattern = '/^[a-zA-Z0-9_\.]+@[a-zA-Z0-9\-\.]+$/';
		
		if(trim($firstname) == '') {
			echo '<div class="error_message">Attention! You must enter your First Name.</div>';
			exit();
		}
		if(trim($lastname) == '') {
			echo '<div class="error_message">Attention! You must enter your Last Name.</div>';
			exit();
		}
		if (!(preg_match($emailPattern, $email))) { 
				echo '<div class="error_message">Attention! Email address not valid.</div>';
			}
		
?>