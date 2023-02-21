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

            <article>
                <h2>Edit profile</h2>

                <form action="../scripts/php/updateProfile.php" method="POST">
                    <div>
                        <span>Firstname</span>
                        <input type="text" name="ufname">
                    </div>
                    <div>
                        <span>Lastname</span>
                        <input type="text" name="ulname">
                    </div>
                    <h4>Change password</h4>
                    <div>
                        <span>Your last password</span>
                        <input type="password" name="ulastpassw">
                    </div>
                    <div>
                        <span>New Password</span>
                        <input type="password" name="unew1passw">
                    </div>
                    <div>
                        <span>Confirm New Password</span>
                        <input type="password" name="unew2passw">
                    </div>
                    <div>
                        <button type="submit">Submit</button>
                    </div>

                </form>
            </article>


        </div>

    </body>

<?php } else {
    header("Location: ./");
} ?>

</html>