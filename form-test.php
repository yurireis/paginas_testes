<?php include("top.php"); ?>

	<div id="content">

		<?php 
			$firstName = $_POST['firstname'];
			$lastName = $_POST['lastname'];
			$email = $_POST['email'];
			$address = $_POST['address'];
			$phone = $_POST['phone'];
			$type = $_POST['type'];
			$cardnumber = $_POST['cardnumber'];
			$exp_month = $_POST['exp_month'];
			$exp_year = $_POST['exp_year'];
			$signup = $_POST['signup'];
			
			$fnValid = false;
			$lnValid = false;
			$aValid = false;
			$eValid = false;
			$emailPattern = '/^[a-zA-Z0-9_\.]+@[a-zA-Z0-9\-\.]+$/';
			
			if ($firstName == "") {
				echo '<p style="color:red;">Please enter your first name</p>';
			}
			else {
				$fnValid = true;
			}
			 
			if ($lastName == "") {
				echo '<p style="color:red;">Please enter your Last name</p>';
			}
			else {
				$lnValid = true;
			}	
			if ($address == "") {
				echo '<p style="color:red;">Please enter your address</p>';
			}
			else {
				$aValid = true;
			}
			if (preg_match($emailPattern, $email)) { 
				echo '<p style="color:green;">Valid email address</p>';
				$eValid = true;
			} else { 
				echo '<p style="color:red;">Email address not valid</p>'; 
			} 

			if ($fnValid == true){
				if ($lnValid == true) {
					if ($eValid == true) {
						if ($aValid == true) {
							echo 'Congratulations '.$firstName.' '.$lastName.'! Your order has been processed.';
							$outputstring = $firstName."\t".$lastName."\t".$address."\t".$email."\t".$phone."\t".$type."\t".$cardnumber."\t".$exp_month."\t".$exp_year."\t".$signup."\n";
							$fp = fopen("orders.txt", "a");
							fwrite($fp, $outputstring);				
							fclose($fp);
						}
					}
				}
			}		
		?>
	</div>
<?php include("footer.php"); ?> 
</body></html>