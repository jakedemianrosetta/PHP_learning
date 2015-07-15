<?php
    //remember that setting cookies must be done before any html code is sent
    //    as cookies are sent in the header

    $name="test";
    $value = "hello";
    $expire = time() + (60*60*24*7); //todays date and time + 1 week

    //setcookie($name, $value, $expire);

    //UNSETTING the cookie
    //setcookie($name); //bad!!!! dont do it this way

    //correct way to delete a cookie.  sets val to null and tells browser its expired
    setcookie($name, null, time()-3600);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>title_here</title>
    </head>

    <body>

        <?php
        // if(isset($_COOKIE['test']))
        // {
        //     $test = $_COOKIE['test'];
        // }
        // else
        // {
        //     $test = "";
        // }

        $test = isset($_COOKIE['test']) ? $_COOKIE['test'] : "";

        echo $test;

        ?>

    </body>
</html>
