<?php include "../scripts/php/handy_methods.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/passwValidation.css">
    <link rel="stylesheet" href="../style/profile.css">
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
            </article>

            <article>
                <h2>Edit profile</h2>

                <form action="../scripts/php/updateflname.php" method="POST">
                    <div class="row">
                        <h4>First & Last name</h4>
                    </div>
                    <div class="row">
                        <label class="leftcl" for="">Firstname</label>
                        <input class="rightcl" type="text" name="ufname" placeholder="Current: <?php echo $_SESSION["first_name"]; ?>">
                    </div>
                    <div class="row">
                        <lable class="leftcl" for="">Lastname</lable>
                        <input class="rightcl" type="text" name="ulname" placeholder="Current: <?php echo $_SESSION['last_name']; ?>">
                    </div>
                    <div class="row">
                        <span class="leftcl"></span>
                        <div class="rightcl">
                            <button type="submit">Submit</button>
                            <button type="reset">Reset</button>
                        </div>
                    </div>

                </form>
                <form action="../scripts/php/updatepassw.php" method="POST">
                    <div class="row">
                        <h4>Change password</h4>
                    </div>
                    <div class="row">
                        <lable class="leftcl" for="">Your last password</lable>
                        <input class="rightcl" type="password" name="ulastpassw" placeholder="Your current password" required>
                    </div class="row">
                    <div class="row">
                        <lable class="leftcl" for="">New Password</lable>
                        <input class="rightcl" type="password" name="newpassw" id="unewpassw" placeholder="New Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                    </div>
                    <div class="row">
                        <lable class="leftcl" for="">Confirm New Password</lable>
                        <input class="rightcl" type="password" name="confirm_newpassw" id="uconfirm_newpassw" placeholder="Confirm new Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                    </div>
                    <div id="message" class="row">
                        <h3>Password must contain the following:</h3>
                        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                        <p id="number" class="invalid">A <b>number</b></p>
                        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                    </div>
                    <div class="row">
                        <span class="passcheck hidePasscheck"></span>
                    </div>
                    <div class="row">
                        <span class="leftcl"></span>
                        <div class="rightcl">
                            <button type="submit">Submit</button>
                            <button type="reset">Reset</button>
                        </div>
                    </div>

                    <script src="../scripts/js/passwordcheck.js"></script>
                    <script src="../scripts/js/passwordvalidation.js"></script>
                </form>
            </article>


        </div>

    </body>

<?php } else {
    header("Location: ./");
} ?>

</html>