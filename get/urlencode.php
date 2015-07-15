<html lang="en">

<!-- head -->
<head>
        <title>URL encode</title>
</head>


<!-- body -->
<body>


    <?php

    $page = "William Shakespeare";
    $quote = "To be or not to be";
    $link1 = "/bio/" . rawurlencode($page) . "?quote=" . urlencode($quote); //correct
    $link2 = "/bio/" . urlencode($page) . "?quote=" . rawurlencode($quote); //wrong

    echo $link1 . "<br>";
    echo "<del>" . $link2 . "</del><br>";


    // use rawurlencode() when you're modifying text BEFORE the ? (url parameters)
    // use just urlencode() when you're modifying stuff after the ?
    ?>

</body>
</html>
