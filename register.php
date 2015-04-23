<!DOCTYPE html>
<html>

	<head>
		<title> Register </title>
		<meta charset="UTF-8">

		<?php 
		if(session_start())
			;
		else
			die("Session could not be resumed!");
		
		?>


	</head>

	<body>


		<br>

		<div id="main_block" >
			<p id="block_title">
				Register New User
			</p>

			<br/>
			<p id="error_message">
				<?php 
				require 'reg_code.php';
				?>
			</p>
			<br/>
			
			<form method="post">
				<label for="username">Username:</label>
				<input type="text" name="username" maxlength="50" required="required" class="non_submit_input" /><br/>
				<label for="password">Password:</label>
				<input type="password" name="password" maxlength="20" required="required" class="non_submit_input" /><br/>
				<label for="realname">Real name:</label>
				<input type="text" name="realname" maxlength="50" required="required" class="non_submit_input" /><br/>
				<label for="email">Email:</label>
				<input type="email" name="email" maxlength="50" required="required" class="non_submit_input" /><br/>
				<br/>
				<label for="squestion">Secret Question:</label>
				<input id="squestion" name="squestion" maxlength="50" type="text" class="non_submit_input" /><br>
				<label for="sanswer">Secret Answer:</label>
				<input id="sanswer" name="sanswer" maxlength="50" type="text" class="non_submit_input" /><br>
				<?php

				//require_once 'recaptchalib.php';
				//$publickey = "6Lc-__YSAAAAAAK8fDz0wn2BgHakq16X5sgLXqc4";
				//echo recaptcha_get_html($publickey);

				?>	
				<br/>
				<input type="submit" name="register" id="submit_registration" value="Register User">
			</form>


			<p id="block_footer">
				Created on 20.04.2015, 02:39 AM<br>
					by CharlieScarver
			</p>
		</div>

	</body>

</html>
