<?php include("top.php"); ?>

    <div id="content">
		<span><?php
					$file = fopen("products.txt", "r") or exit("Unable to open file!");
					do{
						$code=fgetc($file);
					}while($code!='4');
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
					}while($code!='4');
					fgets($file);
					fgets($file);
					fgets($file);
					echo"<img src='";
					echo fgets($file);
					echo "' width='500' height='400' title='Car' alt='Car'/>";
					fclose($file);
					?>
				</td>
				<td>
					Features:<br/><br/>
					<ul>
					<li>4/5 Door</li>
					<li>Automatic Transmission</li>
					<li>Air Conditioning</li>
					<li>Bluetooth Connectivity</li>
					<li>Capacity: 4 persons</li>
					</ul>
				
				<span>Price per day: AUD$ 48.00<br/><br/></span>
				<script type="text/javascript" src="code.js"></script>
				Number of days:
					<form action="buy2.php" id="p1"  method="get"
					onclick="total.value = parseFloat(qty.value)*48">
						<input type="button" id="addbutton" name="addbutton" value='+' onclick='JavaScript:add1()'/>
						<input type="button" id="subtractbutton" name="subtractbutton" value='-' onclick='JavaScript:subtract1()'/>
						<input type="text" size="5" name="qty" value="1"/>
						<input type="button" name="confirmbutton" value='Confirm' onclick='JavaScript:confirm()'/>
						<input name="prodcode" value="4" type="hidden"/>
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