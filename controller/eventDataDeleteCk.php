<?php
require_once ('../model/eventDbConnection.php');

$SERIAL = $_REQUEST['SERIAL'];

if ($SERIAL == null) {
    echo "<h1 align= center> PLEASE ADD INFORMATION <br> BACK </a></div>";
    return;
} else {
    $data['serial'] = $SERIAL;
deleteEvent($data);
}
?>