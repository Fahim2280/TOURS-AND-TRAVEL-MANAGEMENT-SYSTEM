<?php 
require_once('../model/slideShowDbConnection.php');

$SERIAL = $_REQUEST['SERIAL'];
$Name = $_REQUEST['Name'];

if ($SERIAL == null || $Name == null) {
    echo "<h1 align= canter> PLEASE ADD INFORMATION </h1>";
    return;
} else {
    $data['SERIAL'] = $SERIAL;
    $data['Name'] = $Name;
    updateSlideShow($data);
    echo "<h1 align= center> UPDATE SUCCESSFULLY <h1/>";
}


?>