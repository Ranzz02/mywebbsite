<?php include "../scripts/php/handy_methods.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/registerpage.css">
</head>

<body>
    <!--Include header-->
    <?php include "../scripts/php/header.php" ?>

    <div class="container">
        <br>
        <article>
            <form action="../scripts/php/register.php" method="post">
                <h2>
                    Register
                </h2>
                <!--output error msg-->
                <?php if (isset($_COOKIE['error'])) {
                    echo "<p class='registererror'>" . $_COOKIE['error'] . "</p>";
                    setcookie('error', null, -1, "/");
                } ?>
                <div class="row">
                    <label class="leftcl" for="">User Name</label>
                    <input class="rightcl" type="text" name="uname" placeholder="User Name">
                </div>
                <div class="row">
                    <label class="leftcl" for="">First Name</label>
                    <input class="rightcl" type="text" name="firstname" placeholder="first name">
                </div>
                <div class="row">
                    <label class="leftcl" for="">Last Name</label>
                    <input class="rightcl" type="text" name="lastname" placeholder="last name">
                </div>
                <div class="row">
                    <label class="leftcl" for="">Email</label>
                    <input class="rightcl" type="mail" name="email" placeholder="example@email.com">
                </div>
                <div class="row">
                    <label class="leftcl" for="">Password</label>
                    <div class="rightcl">
                        <input type="password" name="passw" placeholder="Password">
                        <input type="password" placeholder="Rewrite Password">
                    </div>
                </div>

                <button type="submit">Register</button>
            </form>
            <a href="./loginPage.php">Login</a>
        </article>

    </div>



</body>

</html>