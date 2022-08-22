
<?php
require_once('../model/eventDbConnection.php');

$Name = $_REQUEST['Name'];
$H_M_day = $_REQUEST['H_M_day'];
$Description = $_REQUEST['Description'];
$Place_Name = $_REQUEST['Place_Name'];
$Food = $_REQUEST['Food'];
$Price = $_REQUEST['Price'];
$imagename = $_FILES['file']['name'];
$tmp_loc = $_FILES['file']['tmp_name'];
$uploc = '../image/';

if (!empty($imagename)) {
    move_uploaded_file($tmp_loc, $uploc . $imagename);
} else {
    echo "select a file";
}

if ($Name == null || $H_M_day == null || $Description == null || $Place_Name == null  || $Food == null ||  $Price == null  || $imagename == null || $tmp_loc == null) {
    echo "<h1 align= canter> PLEASE ADD INFORMATION </h1>";
} else {
    $data['Name'] = $Name;
    $data['H_M_day'] = $H_M_day;
    $data['Description'] = $Description;
    $data['Place_Name'] = $Place_Name;
    $data['Food'] = $Food;
    $data['Price'] = $Price;
    $data['file_location'] = $uploc . $imagename;
    addEvent($data);
    header("location: ../view/evenDataAdd.html");
}

?>