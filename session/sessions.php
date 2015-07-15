<?php
    //since sessions use cookies, which in turn use headers...
    //we need to get the session before any html output.
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>title_here</title>
    </head>

    <body>

        <?php
            $_SESSION['first_name'] = "Jake";
            $name = $_SESSION['first_name'];
            echo $name;
        ?>

    </body>
</html>
