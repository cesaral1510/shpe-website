<?php
session_start();

//if loggedin is true the
else{
	// username and password sent from form 
	$email=$_POST['email']; 
	$pword=$_POST['pword']; 

	// To protect MySQL injection (more detail about MySQL injection)
	$email = stripslashes($email);
	$pword = stripslashes($pword);
	$email = mysql_real_escape_string($email);
	$pword = mysql_real_escape_string($pword);

	$sql="SELECT * FROM `user`,`eboard` WHERE `eboard`.`userID`=`user`.`userID` AND `email`='$email' AND `password`='$pword';";
	$query=mysql_query($sql);
	$result = mysql_fetch_array($query);

	//if result returns empty
	if($result === FALSE) {
		die(mysql_error()); // TODO: better error handling
		$success = false;
	}
	// If row matched $email and $pword
	// Register $email, $pword and redirect to file "login_success.php"
	else{
		$_SESSION['logged'] = true;
	}
}
	header("location:index.php");
?>