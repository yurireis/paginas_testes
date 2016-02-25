<?php include("top.php"); ?>

    <div id="content">
		<span><?php
					$file = fopen("products.txt", "r") or exit("Unable to open file!");
					do{
						$code=fgetc($file);
					}while($code!='1');
					fgets($file);
					echo fgets($file);
					fclose($file);
				?><br/><br/></span>
			<table>
			<tr>
				<td>
					<?php
					$file = fopen("products.txt", "r") or exit("Unable to open file!");
					do{
						$code=fgetc($file);
					}while($code!='1');
					fgets($file);
					fgets($file);
					fgets($file);
					echo"<img src='";
					echo fgets($file);
					echo "' width='500' height='400' title='Toyota' alt='Car'/>";
					fclose($file);
					?>
				</td>
				<td>
					Features:<br/><br/>
					<ul>
					<li>5 Doors</li>
					<li>CD Player</li>
					<li>Air Conditioning</li>
					<li>Manual Transmission</li>
					<li>Anti-Lock Brakes</li>
					<li>Power Windows</li>
					<li>Capacity: 4 persons</li>
					</ul>
				
				<span>Price per day: AUD$ 48.00<br/><br/></span>
				<script type="text/javascript" src="code.js"></script>
				Number of days:
					<form action="buy2.php" id="p1"  method="post"
					onclick="total.value = parseFloat(qty.value)*48">
						<input type="button" id="addbutton" name="addbutton" value='+' onclick='JavaScript:add1()'/>
						<input type="button" id="subtractbutton" name="subtractbutton" value='-' onclick='JavaScript:subtract1()'/>
						<input type="text" size="5" name="qty" value="1"/>
						<input type="button" name="confirmbutton" value='Confirm' onclick='JavaScript:confirm()'/>
						<input name="prodcode" value="1" type="hidden"/>
						<input name="price" value="48" type="hidden"/>
					</form>
						<span>Total: AUD$</span>
						<output form="p1" name="total" for="addbutton subtractbutton"></output>
						.00
				</td>
			</tr>
			</table>
    </div>
	
    <?php include("footer.php"); ?> 
</body></html>