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
    <link rel="stylesheet" href="../style/passwValidation.css">
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
                    <input class="rightcl" type="text" name="uname" placeholder="User Name" required>
                </div>
                <div class="row">
                    <label class="leftcl" for="">First Name</label>
                    <input class="rightcl" type="text" name="firstname" placeholder="first name" required>
                </div>
                <div class="row">
                    <label class="leftcl" for="">Last Name</label>
                    <input class="rightcl" type="text" name="lastname" placeholder="last name" requiredS>
                </div>
                <div class="row">
                    <label class="leftcl" for="">Email</label>
                    <input class="rightcl" type="mail" name="email" placeholder="example@email.com" required>
                </div>
                <div class="row">
                    <label class="leftcl" for="">Password</label>
                    <div class="rightcl">
                        <input id="upassw" type="password" name="passw" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                        <input id="urpassw" type="password" placeholder="Rewrite Password" required>
                    </div>
                </div>
                <div id="message">
                    <h3>Password must contain the following:</h3>
                    <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                    <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                    <p id="number" class="invalid">A <b>number</b></p>
                    <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                </div>

                <button type="submit">Register</button>
            </form>
            <a href="./loginPage.php">Login</a>
        </article>
        <script src="../scripts/js/passwordvalidation.js"></script>
    </div>



</body>

</html>