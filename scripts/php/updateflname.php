<?php
include "handy_methods.php";

$ufname = test_input($_POST['ufname']);
$ulname = test_input($_POST['ulname']);

if (!empty($ufname) && !empty($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $sql = "UPDATE users SET first_name=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$ufname, $id]);
    $_SESSION['first_name'] = $ufname;
}
if (!empty($ulname) && !empty($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $sql = "UPDATE users SET last_name=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$ulname, $id]);
    $_SESSION['last_name'] = $ulname;
}
header("Location: ../../pages/profile.php");
exit;
