<form action="./" method="post">
    <label>Sort by date!</label>
    <input type="date" name="sdate">
    <input type="submit" value="Sort!">
</form>
<?php
if (!empty($_REQUEST['sdate'] && isset($_REQUEST['sdate']))) {
    $newDate = test_input($_POST['sdate']);
    $_POST = array();
} else {
    $newDate = mktime(12,0,0,1,1,1000);
    print_r(date("Y-m-d",$newDate));
}

include "../scripts/php/model_profiles.php";
