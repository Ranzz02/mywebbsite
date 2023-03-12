<?php
include "handy_methods.php";

if (isset($_POST['uname']) && isset($_POST['passw']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email'])) {
    $uname = test_input($_POST["uname"]);
    $upassw = test_input($_POST["passw"]);
    $ufname = test_input($_POST["firstname"]);
    $ulname = test_input($_POST["lastname"]);
    $uemail = test_input($_POST["email"]);
    $errormsg = "";
    $time = time() + 60 * 60 * 24 * 30;


    if (empty($_POST['uname'])) {
        $errormsg = "Username can't be empty";
        setcookie('error', $errormsg, $time, "/");
        if (isset($_COOKIE['error'])) {
            header("Location: ../../pages/registerPage.php");
        } else {
            header("Location: ../../pages/registerPage.php?error=$errormsg");
        }
        exit();
    } else if (empty($_POST['passw'])) {
        $errormsg = "Password can't be empty";
        setcookie('error', $errormsg, $time, "/");
        if (isset($_COOKIE['error'])) {
            header("Location: ../../pages/registerPage.php");
        } else {
            header("Location: ../../pages/registerPage.php?error=$errormsg");
        }
        exit();
    } else if (empty($_POST['firstname'])) {
        $errormsg = "Firstname can't be empty";
        setcookie('error', $errormsg, $time, "/");
        if (isset($_COOKIE['error'])) {
            header("Location: ../../pages/registerPage.php");
        } else {
            header("Location: ../../pages/registerPage.php?error=$errormsg");
        }
        exit();
    } else if (empty($_POST['lastname'])) {
        $errormsg = "Lastname can't be empty";
        setcookie('error', $errormsg, $time, "/");
        if (isset($_COOKIE['error'])) {
            header("Location: ../../pages/registerPage.php");
        } else {
            header("Location: ../../pages/registerPage.php?error=$errormsg");
        }
        exit();
    } else if (empty($_POST['email'])) {
        $errormsg = "Email can't be empty";
        setcookie('error', $errormsg, $time, "/");
        if (isset($_COOKIE['error'])) {
            header("Location: ../../pages/registerPage.php");
        } else {
            header("Location: ../../pages/registerPage.php?error=$errormsg");
        }
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE username=? OR email=?";

        $stmt = $conn->prepare($sql);
        $stmt->execute([$uname,$uemail]);
        $stmt->fetch();
        $result = $stmt;
        if ($result->rowCount() > 0) {
            $errormsg = "Email or Username already in use!";
            setcookie('error', $errormsg, $time, "/");
            if (isset($_COOKIE['error'])) {
                header("Location: ../../pages/registerPage.php");
            } else {
                header("Location: ../../pages/registerPage.php?error=$errormsg");
            }
            exit();
        } else {
            $hashedpassw = password_hash($upassw, PASSWORD_DEFAULT);
            
            $sql = "INSERT INTO users (username,password,first_name,last_name,email) VALUES (?,?,?,?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$uname, $hashedpassw, $ufname, $ulname, $uemail]);
            $result = $stmt;
            
            if ($result->rowCount() == 1) {
                $sql = "SELECT * FROM users WHERE username='$uname'";
                $stmt = $conn->query($sql);
                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                $_SESSION['username'] = $row['username'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['first_name'] = $row['first_name'];
                $_SESSION['last_name'] = $row['last_name'];

                header("Location: ../../pages/");
            } else {
                $errormsg = "Something went wrong, try again";
                setcookie('error', $errormsg, $time, "/");
                if (isset($_COOKIE['error'])) {
                    header("Location: ../../pages/registerPage.php");
                } else {
                    header("Location: ../../pages/registerPage.php?error=$errormsg");
                }
                exit();
            }
        }
    }
}
