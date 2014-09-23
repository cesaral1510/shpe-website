<?php
session_start();
require('connect.php');

	//Grab the first name and last of the user to display
	$sql="SELECT * FROM `user`;";
	$query=mysql_query($sql);
	//if result returns empty
	if($query === FALSE) {
		die(mysql_error()); // TODO: better error handling
		$success = false;
	}
	else{
		echo '<table width="100%">';
		while($result = mysql_fetch_array($query)){
			echo '<tr>';
			foreach ($arr as $value) {
				echo '<td>';
				echo $value;
				echo '</td>';
			}
			echo '</tr>';
		}
		echo '</table>';
	}
}
?>