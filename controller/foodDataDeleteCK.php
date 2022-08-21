<?php
require_once('../model/foodDbConnection.php');

$SERIAL = $_REQUEST['SERIAL'];

if ($SERIAL == null) {
    echo "<h1 align= center> PLEASE ADD INFORMATION <br> BACK </a></div>";
    return;
} else {
    $data['serial'] = $SERIAL;
    deleteFood($data);
}
?>