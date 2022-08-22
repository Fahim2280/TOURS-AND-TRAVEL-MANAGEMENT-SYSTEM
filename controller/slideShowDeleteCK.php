<?php
require_once('../model/slideShowDbConnection.php');

$SERIAL = $_REQUEST['SERIAL'];

if ($SERIAL == null) {
    echo "<h1 align= center> PLEASE ADD INFORMATION <br> BACK </a></div>";
    return;
} else {
    $data['SERIAL'] = $SERIAL;
    deleteSlideShow($data);
}

?>