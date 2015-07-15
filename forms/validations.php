<!DOCTYPE html>
<html lang="en">
    <head>
        <title>title_here</title>
    </head>

    <body>

        <?php

        //* presence
        $value = "x";
        if (!isset($value) || empty($value))
        {
            echo "Validation failed. <br>"; //if not set or empty
        }

        //* string length
        $value = "eeeeee";
        $min = 3;
        $max = 6;
        //min length
        if(strlen($value) < $min)
        {
            echo "Validation failed. <br>";
        }

        if(strlen($value) > $max)
        {
            echo "Validation failed. <br>";
        }

        //* type
        $value = "1";
        if(!is_string($value))
        {
            echo "Validation failed. <br>";
        }

        //* inclusion in a set (eg. male or female)
        $value = "3";
        $set = array("1", "2", "3", "4");
        if(!in_array($value, $set))
        {
            echo "Validation failed. <br>";
        }

        //* uniqueness (usually requires checking a database)
        $value_already_in_db = false; //pretend this is set after checking a db
        if($value_already_in_db)
        {
            echo "Validation failed. <br>";
        }

        //* format
        //use a regex on a string (ie check if a string contains another string)
        //preg_match($regex, $subject)
        $value = "nobody@nowhere.com";
        if(!preg_match("/@/", $value)) //makes sure $value contains an @ symbol
        {
            echo "Validation failed. <br>";
        }

        if(strpos($value, "@") === false)
        {
            echo "Validation failed. <br>";
        }


        ?>

    </body>
</html>
