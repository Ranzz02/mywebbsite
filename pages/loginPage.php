<?php include "../scripts/php/handy_methods.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/loginpage.css">
</head>

<body>
    <!--Include header-->
    <?php include "../scripts/php/header.php" ?>

    <div class="container">
        <br>
        <article>

            <form action="../scripts/php/login.php" method="post">
                <h2>
                    LOGIN
                </h2>
                <!--output error msg-->
                <?php if (isset($_COOKIE['error'])) {
                    echo "<p class='loginerror'>" . $_COOKIE['error'];
                    setcookie('error', null, -1, "/");
                } ?>
                </p>
                <label for="">User Name</label>
                <input type="text" name="uname" placeholder="User Name">

                <label for="">Password</label>
                <input type="password" name="passw" placeholder="Password">
                <button type="submit">Login</button>
            </form>
            <a href="./registerPage.php">Register</a>
        </article>

    </div>



</body>

</html>