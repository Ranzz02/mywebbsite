<?php
include "handy_methods.php";

if (isset($_POST['uname']) && isset($_POST['passw'])) {
    $uname = test_input($_POST["uname"]);
    $upassw = test_input($_POST["passw"]);
    $errormsg = "";
    $time = time() + 60 * 60 * 24 * 30;

    if (empty($uname)) {
        $errormsg = "Username is required!";
        setcookie('error', $errormsg, $time, "/");
        if (isset($_COOKIE['error'])) {
            header("Location: ../../pages/loginPage.php");
        } else {
            header("Location: ../../pages/loginPage.php?error=$errormsg");
        }
        exit();
    } else if (empty($upassw)) {
        $errormsg = "Password is required";
        setcookie('error', $errormsg, $time, "/");
        if (isset($_COOKIE['error'])) {
            header("Location: ../../pages/loginPage.php");
        } else {
            header("Location: ../../pages/loginPage.php?error=$errormsg");
        }
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE username=?";
        $stmt = $conn->prepare($sql);
        $result = $stmt->execute([$uname]);
        $result = $stmt;
        if ($stmt->rowCount() == 1) {
            $userData = $result->fetch();

            if (password_verify($upassw, $userData['password'])) {
                echo "Logged in!";

                $_SESSION['username'] = $userData['username'];
                $_SESSION['id'] = $userData['id'];

                header("Location: ../../pages/");
            } else {
                $errormsg = "Incorrect Password or Username";
                setcookie('error', $errormsg, $time, "/");
                if (isset($_COOKIE['error'])) {
                    header("Location: ../../pages/loginPage.php");
                } else {
                    header("Location: ../../pages/loginPage.php?error=$errormsg");
                }
                exit();
            }
        } else {
            $errormsg = "Incorrect Password or Username";
            setcookie('error', $errormsg, $time, "/");
            if (isset($_COOKIE['error'])) {
                header("Location: ../../pages/loginPage.php");
            } else {
                header("Location: ../../pages/loginPage.php?error=$errormsg");
            }
            exit();
        }
    }
} else {
    header("Location: ../../pages/loginPage.php?error");
    exit();
}
