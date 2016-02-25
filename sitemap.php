<?php include("top.php"); ?>
<div id="content"
	<?php
		function readir ($dir) {
		$contents = scandir($dir);
		$sitePattern = '/^[wp-s2-int\.eres\.rmit\.edu\.au/~s3443400/Phase3]+[a-z_-\.]+(php)+$/';
		foreach ($contents as $fileOrDir) {
			if (preg_match($sitePattern, $contents)) {
				echo $fileOrDir;
			}
		}
		}	
	?>	
</div>
<?php include("footer.php"); ?>
</body></html>