<html lang="en">

<!-- head -->
<head>
        <title>First Page</title>
</head>


<!-- body -->
<body>

    <?php $link_name = "Second Page"; ?>
    <?php $id = 5; ?>
    <?php $company = "Johnson & Johnson" ?>
    <a href="second_page.php?id=<?php echo $id; ?>&company=<?php echo rawurlencode($company); ?>"><?= $link_name ?></a>

    <?php
    // use rawurlencode() when you're modifying text BEFORE the ? (url parameters)
    // use just urlencode() when you're modifying stuff after the ?
    ?>

</body>
</html>
