<html lang="en">

<!-- head -->
<head>
        <title>Second Page</title>
</head>


<!-- body -->
<body>

    <pre>
        <?php
            //print_r($_GET);
            $id = $_GET['id'];
        ?>

        <?php
            //print_r($_GET);
            $company = $_GET['company'];
        ?>
    </pre>

    <?php echo $id; ?>
    <?php echo $company; ?>

</body>
</html>
