<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>

	<a href="logout.php">Logout</a>
	<h1>Successfully Logged in!</h1>
	Welcome <?php echo $user_data['user_name']; ?>
	<form>
		<label for="age">Age:
		</label><br>
		<input type="text" id="age" name="Age"><br>
		<label for="Contact Number">Contact Number:
		</label><br>
		<input type="text" id="Contact Number" name="Contact Number"><br>
		<input type="submit" value="submit">
	</form>

</body>
</html>