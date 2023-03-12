<?php
include "model_profile.php";

if ($_SESSION["id"] != "" || $_SESSION["id"] = null) {
    $sql = "SELECT username, first_name, last_name, email, bio, age, gender FROM users";
    $stmt = $conn->query($sql);
    $result = $stmt;

    if ($result->rowCount() > 0) {
        $json = json_encode($result->fetchAll(PDO::FETCH_ASSOC));
        $_SESSION["profiles"] = $json;
        /*
        foreach ($result as $row) {
            if ($row["id"] == $_SESSION["id"]) {
            } else {
                $profile = new profile;
                $profile->id = $row["id"];
                $profile->username = $row["username"];
                $profile->useremail = $row["email"];
                $profile->userbio = $row["bio"];
                $profile->print_profile();
            }
        }*/
    } else {
        echo "Failed to get profiles";
    }
} else {
    $sql = "SELECT * FROM users";
    $stmt = $conn->query($sql);
    $result = $stmt;

    if ($result) {
        foreach ($result as $row) {
            $profile = new profile;
            $profile->id = $row["id"];
            $profile->username = $row["username"];
            $profile->useremail = $row["email"];
            $profile->userbio = $row["bio"];
            $profile->print_profile();
        }
    } else {
        echo "Failed to get profiles";
    }
}
