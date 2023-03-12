<?php
include "../scripts/php/class_profile.php";

$sql = "";
if (isset($_SESSION["id"]) && !empty($_SESSION['id'])) {
    $sql = "SELECT * FROM users WHERE id!=? AND age>=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$_SESSION['id'], $newDate]);
} else {
    $sql = "SELECT * FROM users WHERE age>=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$newDate]);
}
$result = $stmt;

if ($result) {
    foreach ($result as $row) {
        $profile = new profile;
        $profile->id = $row["id"];
        $profile->username = $row["username"];
        $profile->useremail = $row["email"];
        $profile->userbio = $row["bio"];
        $profile->userage = $row['age'];
        $profile->print_profile();
    }
} else {
    echo "Failed to get profiles";
}
