<!DOCTYPE? html>
<?php 
	if(isset($_POST['submit'])){
		include('adminLogin.php');
	}
?>
<html>
	<head>
		<title>NJIT SHPE</title>
		<link rel="shortcut icon" href="images/images/favicon.ico" >
		<link type="text/css" rel="stylesheet" href="adminStyle.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="jscript.js"></script>
		<script type="text/javascript" src="Scripts/updateText.php"></script>
		<script type="text/javascript">

			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-35750639-1']);
			_gaq.push(['_trackPageview']);
			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
	</head>
	<body>
			<div id="box">
			<form name="adminLogin" id="adminLogin" METHOD=POST ACTION="adminLogin.php" enctype="multipart/form-data">
				<center><label>MemberSHPE</label></center>
				<center><input type="email" name="email" placeholder="email"></center>
				<center><input type="password" name="password" placeholder="password"></center>
				<center><input type="Submit" value="Log In" id="Submit"></center>
			</form>
		</div>
	</body>
</html>
</html>