<?php
	require_once('phpscripts/config.php');
	confirm_logged_in();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to your admin panel</title>
</head>
<body>
	<h1>Welcome Company Name to Your Admin Page</h1> <!--added week 5-->
	<?php echo "<h2>Hi-{$_SESSION['user_name']}</h2>";  ?> <!--added week 5-->
	<a href="admin_createuser.php">Create User</a> <!--added week 5-->
		<a href="phpscripts/caller.php?caller_id=logout">Sign Out</a> <!--added week 5-->
</body>
</html>
