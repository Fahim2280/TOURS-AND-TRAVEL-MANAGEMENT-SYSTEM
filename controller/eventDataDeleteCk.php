<?php
require_once ('../model/dbConnection.php');

$SERIAL = $_REQUEST['SERIAL'];

if ($SERIAL == null) {
    echo "<h1 align= center> PLEASE ADD INFORMATION <br><div align=center><a href=train.php> BACK </a></div>";
    return;
} else {
    $data['serial'] = $SERIAL;
deleteEvent($data);
}
?>