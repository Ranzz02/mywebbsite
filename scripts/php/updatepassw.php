<?php
include "handy_methods.php";

$ulpassw = test_input($_POST['ulastpassw']);
$un1passw = test_input($_POST['newpassw']);
$un2passw = test_input($_POST['confirm_newpassw']);

if (!empty($ulpassw) && !empty($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM users WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);
    if ($stmt->rowCount() === 1 && password_verify($ulpassw, $stmt->fetch()['password'])) {

        if ($un1passw == $un2passw) {
            $hashedpassw = password_hash($un1passw, PASSWORD_DEFAULT);
            $sql = "UPDATE users SET password=? WHERE id=?";
            $stmt = $conn->prepare($sql);
            if ($stmt->execute([$hashedpassw, $id]) == TRUE) {
                header("Location: ../../pages/profile.php");
                exit;
            } else {
                header("Location: ../../pages/");
                exit;
            }
        } else {
        }
    }
}
