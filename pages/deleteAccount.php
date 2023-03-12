<!DOCTYPE html>
<html lang="en">

<?php include "../scripts/php/handy_methods.php"; ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Account</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/form.css">
</head>

<body>
    <?php include "../scripts/php/header.php" ?>

    <div class="container">
        <br>
        <article>
            <form action="./deleteAccount.php" method="post">
                <div class="row">
                    <h4>
                        Är du säker på att du vill ta bort ditt konto
                    </h4>
                </div>

                <div class="row">
                    <label class="leftcl" for="">Sätt in ditt lösenord!</label>
                    <input class="rightcl" type="password" name="cpassw" placeholder="Fill in your passsword">
                </div>
                <div class="row">
                    <label class="leftcl" for="">Ta bort konto</label>
                    <button class="rightcl" type="submit">Delete</button>
                </div>
            </form>
        </article>
    </div>
</body>

</html>


<?php

if ($_POST["cpassw"] != "" || $_POST["cpassw"] != null) {

    if ($_SESSION["id"] != "" || $_SESSION["id"] != null) {
        $id = $_SESSION["id"];
        $sql = "SELECT * FROM users WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt;
        if ($result->rowCount() == 1) {

            $ucpassw = test_input($_POST["cpassw"]);

            if (password_verify($ucpassw, $stmt->fetch()["password"])) {
                $id = $_SESSION["id"];
                $sql = "DELETE FROM users WHERE id=?";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$id]);

                if ($stmt->rowCount() == 1) {
                    echo "Account deleted";
                    session_unset();
                    header("Location: ./");
                    exit;
                } else {
                    echo "Failed to delete account";
                    exit;
                }
            } else {
            }
        } else {
        }
    }
} else {
    $_POST["cpassw"] = null;
}
