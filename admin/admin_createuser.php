<?php
	require_once('phpscripts/config.php');
	//confirm_logged_in();
	if(isset($_POST['submit'])){
    $fname = trim($_POST['fname']);
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$email = trim($POST['email']);
	  $userlvl = trim($POST['userlvl']);
		if(empty($userlvl)){
			$message = "Please select a user level.";
		}else{
			$result = createUser($fname, $username, $password, $email, $userlvl);
			$message = $result;
			//to send email to the new user with what they need to login
			submitMessage($username, $password);
		}
	}

	$userInsert = "INSERT INTO users (password)" 
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>CMS Portal</title>
</head>
<body>
	<!--Admin to create a new user-->
	<h1>Welcome Company Name to Your Admin Page</h1>
	<?php if(!empty($message)){echo $message;} ?>
	<form action="admin_creatuder.php" method="post">
    <label>First Name:</label>
    <input type="text" name="fname" value="	<?php if(!empty($fname)){echo $fname;} ?>"><br><br>

    <label>User Name:</label>
    <input type="text" name="username" value="	<?php if(!empty($username)){echo $username;} ?>"><br><br>

    <label>Password:</label>
    <input type="text" name="password" value="	<?php if(!empty($password)){echo $password;} ?>"><br><br>

    <label>Email:</label>
    <input type="text" name="email" value=""><br><br>

    <label>User Level:</label> <!--Example: the master user can edit everyones-->
    <select name="userlvl">
      <option value="">Please select a user level</option>
      <option value="2">Web Admin</option>
      <option value="1">Web Master</option>
    </select><br><br>
    <input type="submit" name="submit" value="Create User">

  </form>
</body>
</html>
