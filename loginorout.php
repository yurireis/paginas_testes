<?php include("top.php"); ?>
<div id="content">
	<?php
		$loginID = $_post['user'];
		$pwID = $_post['password'];
		$fp = fopen("users.txt", "r");
		while (!feof($fp)) {
			$lines = fgets($fp, "100");
			$line = explode("\t",$lines);
			$existingUser = false;
			$existingPW = false;
			$user = $line[0];
			$password = $line[1];
			$password = substr($password, 0, -2);
			if ($loginID == $user && $pwID == $password) {
				$existingUser = true;
				$existingPW = true;
				break;
			}	
		}
		if($existingUser && $existingPW == true) {
			session_start();
			echo 'Successfully Logged In as '.$loginID;
		} else {
		echo 'Invalid password or username';
		}
	?>
</div>
<?php include("footer.php"); ?>
</body></html>