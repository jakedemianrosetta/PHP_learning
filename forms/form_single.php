<?php
	require_once("included_functions.php");
	//detect form submission
	if(isset($_POST['submit'])) //comes from submit button html tag info
	{
		//then form was submitted and thus $_POSTed the parameters
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username == "jake" && $password == "secret")
		{
			//successful login
			redirect_to("http://www.google.com");
		}
		else
		{
			$message = "There were some errors:";
		}
	}
	else
	{
		$username = "";
		$message = "Please log in.";
	}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Form Single</title>
</head>


<body>

	<?php echo $message; ?>

<form action="form_single.php" method="post">
    Username: <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>" /><br>
    Password: <input type="password" name="password" value="" /><br>
    <input type="submit" name="submit" value="Submit"/>
</form>

</body>

</html>
