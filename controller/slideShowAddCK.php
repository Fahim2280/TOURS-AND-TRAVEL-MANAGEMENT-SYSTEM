<?php
require_once('../model/slideShowDbConnection.php');
$SERIAL = $_REQUEST['SERIAL'];
$Name = $_REQUEST['Name'];
$imagename = $_FILES['file']['name'];
$tmp_loc = $_FILES['file']['tmp_name'];
$uploc = '../image/';

if (!empty($imagename)) {
    move_uploaded_file($tmp_loc, $uploc . $imagename);
} else {
    echo "select a file";
}

if ($Name == null || $SERIAL == null || $imagename == null || $tmp_loc == null) {
    echo "<h1 align= canter> PLEASE ADD INFORMATION </h1>";
} else {
    $data['Name'] = $Name;
    $data['SERIAL'] = $SERIAL;
    $data['file_location'] = $uploc . $imagename;
    addSlideShow($data);
    header("location: ../view/slideShowAdd.html");
}

?>