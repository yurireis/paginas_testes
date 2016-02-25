<?php include("top.php"); ?>

    <div id="content">
		<span>Cars Available<br/><br/></span>
			<table>
			<?php
			$file = fopen("products.txt", "r") or exit("Unable to open file!");
			while(!feof($file))
			{
				$code=fgets($file);
				$name=fgets($file);
				$small=fgets($file);
				$big=fgets($file);
				echo "<tr><td><img src='"; 
				echo $small;
				echo"' title='Car' alt='Car'/></td>";
				echo "<td>";
				echo $name;
				echo " - <a href='product";
				echo $code;
				echo".php'>Product Details</a></td></tr>";
			}
			fclose($file);
			?>
			</table>
    </div>
	
    <?php include("footer.php"); ?>  
</body></html>