<?php include("top.php"); ?>

	<div id="content">
		<span>Checkout</span><br/><br/>
    <div id="checkout">
			<form  action="form-test.php" method="post" enctype="multipart/form-data"> 
				<input type="hidden" name="action" value="submit"> 
				First Name:<br/>
				<input name="firstname" type="text" value="" size="30"/><br/> 
				Last Name:<br/>
				<input name="lastname" type="text" value="" size="30"/><br/>
				Address:<br/> 
				<textarea name="address" rows="4" cols="30"></textarea><br/>
				Your email:<br/> 
				<input name="email" type="text" value="" size="30"/><br/>
				Phone (only numbers and spaces):<br/>
				<input name="phone" type="text" value="" size="30"/><br/>
				Type of car:<br/>
				<input type="radio" name="type" value="manual" checked>Manual<br/>
				<input type="radio" name="type" value="automatic">Automatic<br/>
				Credit Card Number:<br/>
				<input name="cardnumber" type="text" value="" size="18"/><br/>
				Expiry Date:<br/>
				Month:
				<select name="exp_month">
					<option value="01">01</option>
					<option value="02">02</option>
					<option value="03">03</option>
					<option value="04">04</option>
					<option value="05">05</option>
					<option value="06">06</option>
					<option value="07">07</option>
					<option value="08">08</option>
					<option value="09">09</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
				</select>
				Year:
				<select name="exp_year">
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
				</select><br/>
				<input name="signup" value="0" type="hidden"/>
				<input type="checkbox" name="signup" value="1"/>Please sign me up for the newsletter<br/>
				<input type="submit" value="Submit" name="submit"/>  
			</form>
    </div>
	</div>
	
<?php include("footer.php"); ?> 
</body></html>