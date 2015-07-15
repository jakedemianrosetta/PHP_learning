<?php
    header("HTTP 1.1/ 404 Not Found");
?>

<!DOCTYPE html>
<html>

<head>
	<title>Headers</title>
</head>


<body>
<?php
    //header("HTTP 1.1/ 404 Not Found"); //won't work
?>

<pre>
    <?php
        print_r(headers_list());
    ?>
</pre>
</body>

</html>
