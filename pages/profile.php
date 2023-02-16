<?php include "../scripts/php/handy_methods.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../style/style.css">
</head>

<?php if (isset($_SESSION['username']) && $_SESSION['id']) {

?>

    <body>
        <!--Include header-->
        <?php include "../scripts/php/header.php" ?>

        <div class="container">
            <br>
            <article>
                <h1>Hello, <?php echo $_SESSION['username'] ?></h1>
                <a href="../scripts/php/logout.php">Logout</a>
            </article>



        </div>

    </body>

<?php } else {
    header("Location: ./");
} ?>

</html>