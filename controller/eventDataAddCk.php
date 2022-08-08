
<?php
require_once ('../model/dbConnection.php');

$Name = $_REQUEST['Name'];
$H_M_day = $_REQUEST['H_M_day'];
$Description = $_REQUEST['Description'];
$imagename = $_FILES['file']['name'];
$tmp_loc = $_FILES['file']['tmp_name'];

$uploc = '../image/';

if (!empty($imagename)) {
    move_uploaded_file($tmp_loc, $uploc . $imagename);
} else {
    echo "select a file";
}

if ($Name == null || $H_M_day == null || $Description == null ||  $imagename == null || $tmp_loc == null) {
    echo "<h1 align= canter> PLEASE ADD INFORMATION </h1>";
} else {
    $data['Name'] = $Name;
    $data['H_M_day'] = $H_M_day;
    $data['Description'] = $Description;
    $data['file_location'] = $uploc . $imagename;
    addEvent($data);
    echo "<h1 align= center> NEW TRIP ADDED SUCCESSFULLY </h1>";
}

?>