<?php include "../scripts/php/handy_methods.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mywebbsite</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/profile.css">
</head>

<body>
    <?php include "../scripts/php/header.php"; ?>

    <div class="container">
        <!--Include header-->
        <br>
        <br>
        <?php include "../scripts/php/view_profiles.php" ?>
        <script>const profiles = <?= $_SESSION["profiles"]; ?></script>
        <script src="../scripts/js/profile.js"></script>
    </div>

</body>

</html>