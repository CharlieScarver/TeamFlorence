<?php
require_once 'config.php';

$connect = mysql_connect($dbhost, $dbusr, $dbpw); //connect to DB
if (!$connect) { //Check is connection was successful
	die("Failed to connect to MySQL!");
}
if (!mysql_select_db("d50shade_photography_forum")) { //Check is DB selection was successful
	die("Failed to select DB!");
}

if(isset($_POST['register'])) { // If the Register button has been pressed

	$username = htmlspecialchars(trim($_POST['username'])); // Clean the Username
	$password = md5(htmlspecialchars(trim($_POST['password']))); 
	$password_validation = md5(htmlspecialchars(trim($_POST['passwordValidation']))); // Clean and Encrypt the Password
	$realname = $_POST['realName']; 
	$email = $_POST['email']; 
	$gender = intval($_POST['gender']);
	$age = intval($_POST['age']);
	$date = date('Y-m-d'); 
	$squestion = $_POST['secretQuestion']; 
	$sanswer = $_POST['secretAnswer']; 

	if ($squestion === "") {
		$squestion = NULL;
	}
	if ($sanswer === "") {
		$sanswer = NULL;
	}

	// If the Required fields are NOT empty
	if ($username !== "" 
		&& $password !== "" 
		&& $password_validation !== "" 
		&& $realname !== "" 
		&& $email !== "") { 

		if ($password === $password_validation) {

			//echo "Register user $username:<br/>
			//	password: $password, <br/>
			//	real name: $realname, <br/>
			//	email: $email, <br/>
			//	gender: $gender, <br/>
			//	age: $age, <br/>
			//	secret question $squestion, <br/>
			//	secret answer: $sanswer, <br/>
			//	on $date. <br/>
			//	<br/>";

			// Find the Username in the DB
			$elems = mysql_query("SELECT `username` FROM `users` WHERE `username` = '$username'");

			$row = mysql_fetch_row($elems); // Extract the Username

			if (is_null($row[0])) { // If the Username doesn't exist
				
				// Registering New User

				do { // Everything is in a loop so we can break at anytime! (important for captcha)
			
				//------Beginning of CAPTCHA Code-------
				//require_once 'recaptchalib.php';
				//$privatekey = "6Lc-__YSAAAAALXkaLaOG2t0ndwwYNNKT7IvUylh";
				//$resp = recaptcha_check_answer($privatekey, 
				//	$_SERVER["REMOTE_ADDR"], 
				//	$_POST["recaptcha_challenge_field"], 
				//	$_POST["recaptcha_response_field"]);
				//if (!$resp->is_valid) {
				//	echo "Wrong Captcha Phrase";
				//	break;
				//}
				//------End of CAPTCHA Code------------


				// Insert the new user's Data into the DB
				$results = mysql_query("INSERT INTO `d50shade_photography_forum`.`users` 
							(`id`, `username`, `password`, `real_name`, `email`, `gender_id`, `age`, `joined_on`, `secret_question`, `secret_answer`) 
					VALUES (NULL, '$username', '$password', '$realname', '$email', '$gender', '$age', '$date', '$squestion', '$sanswer');");  

				if ($results) { // The Data was INSERTED successfully
					//header("Location: http://charleston.onthewifi.com/Relax/?page=Reg_Success");
					//exit;
					echo "Success!";
				} else {
					echo "Internal server error!";
				}


				break; // Making sure that the loop will be executed once
				} while (1 == 1); // End of do-while	

			} else {

				echo "User ". htmlspecialchars_decode($username) . " already exists!<br>";
			
			}

		} else {
			echo "Passwords don't match!";
		}

	} else {
		echo "Please fill all required fields! <br/>Required field are marked by an asterisk (*).";
	}

}