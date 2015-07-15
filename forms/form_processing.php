<!DOCTYPE html>
<html>

<head>
	<title>Form Processing</title>
</head>


<body>

    <pre>
        <?php
            print_r($_POST);
        ?>
    </pre>
    <br>

    <?php
        //decent way to set default values, but not the best
        if(isset($_POST['username']))
        {
            $username = $_POST['username'];
        }
        else
        {
            $username = "";
        }

        if(isset($_POST['password']))
        {
            $password = $_POST['password'];
        }
        else
        {
            $password = "";
        }
    ?>

    <?php
        //set default values using ternary operator
        // boolean_test ? value_if_true : value_if_false ( just like in c++)

        //this method is better than the previous method, but still not the best
        $username = isset($_POST['username']) ? $_POST['username'] : "";
        $password = isset($_POST['password']) ? $_POST['password'] : "";
    ?>

    <?php
        //detect form submission
        if(isset($_POST['submit'])) //comes from submit button html tag info
        {
            //then form was submitted and thus $_POSTed the parameters
        }
    ?>

    <?php
        echo "{$username}: {$password}";
    ?>


</body>

</html>
