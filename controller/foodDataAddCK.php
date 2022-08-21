<?php 

require_once('../model/foodDbConnection.php');

$SERIAL = $_REQUEST['SERIAL'];
$breakfast = $_REQUEST['breakfast'];
$launch = $_REQUEST['launch'];
$dinner = $_REQUEST['dinner'];
$snacks = $_REQUEST['snacks'];


if ($SERIAL == null || $breakfast == null || $launch == null || $dinner == null || $snacks == null ) {
    echo "<h1 align= canter> PLEASE ADD INFORMATION </h1>";
    return;
} else {
    $data['serial'] = $SERIAL;
    $data['breakfast'] = $breakfast;
    $data['launch'] = $launch;
    $data['dinner'] = $dinner;
    $data['snacks'] = $snacks;
    addFood($data);
    echo "<h1 align= center> UPDATE SUCCESSFULLY <h1/>";
}
