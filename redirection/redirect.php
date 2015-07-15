<?php
	function redirect_to($new_location)
	{
		//This is how you redirect to a new page
		header("Location: " . $new_location);
		exit; //exit so we don't send the html code below this
	}

	$logged_in = $_GET['logged_in'];

	if($logged_in == "1")
	{
		redirect_to("basic.html");
	}
	else
	{
		redirect_to("http://lynda.com");
	}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Headers</title>
</head>


<body>

</body>

</html>
