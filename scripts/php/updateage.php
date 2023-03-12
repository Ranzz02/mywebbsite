<?php
include "./handy_methods.php";

if (isset($_REQUEST['ndate'])) {
    echo $_REQUEST['ndate'];

    $id = $_SESSION['id'];
    $newDate = test_input($_REQUEST['ndate']);

    $sql = "UPDATE users SET age=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$newDate,$id]);

    if($stmt->rowCount() == 1) {
        echo "Success";
    }
}