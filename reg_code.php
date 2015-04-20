<?php
require_once '../config.php';

$connect = mysql_connect($dbhost,$dbusr,$dbpw); //connect to DB
if (!$connect) { //Check is connection was successful
	die("Failed to connect to MySQL!");
}
if (!mysql_select_db("charleston")) { //Check is DB selection was successful
	die("Failed to select DB!");
}

if(isset($_POST['register'])) { // If the Register button has been pressed

	$username = $_POST['username']; 
	$password = $_POST['password']; 
	$realname = $_POST['realname']; 
	$email = $_POST['email']; 
	$squestion = $_POST['squestion']; 
	$sanswer = $_POST['sanswer']; 
	$date = date('Y-m-d'); 

	if ($squestion == "") {
		$squestion = NULL;
	} else if ($sanswer == ""){
		$sanswer = NULL;
	}

	if ($username !== "" && $password !== "" && $realname !== "" && $email) { // If Username, Password and Email field are NOT empty

		echo "Register user $username:<br/>
				password: $password, <br/>
				real name: $realname, <br/>
				email: $email, <br/>
				secret question $squestion, <br/>
				secret answer: $sanswer, <br/>
				on $date. <br/>";

	} else {
		echo "Please fill all required fields! <br/>Required field are marked by an asterisk (*).";
	}

}