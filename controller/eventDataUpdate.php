<?php

require_once('../model/dbConnection.php');


$Name = $_REQUEST['Name'];
$H_M_day = $_REQUEST['H_M_day'];
$Description = $_REQUEST['Description'];
$filename = $_FILES['filename']['name'];
$tmp_loc = $_FILES['filename']['tmp_name'];

$uploc = '../image/';

if (!empty($filename)) {
   move_uploaded_file($tmp_loc, $uploc . $filename);
} else {
   echo 'select a file';
}
if ($Name == null || $H_M_day == null || $Description == null ||  $filename == null || $tmp_loc == null) {
   echo "<h1 align= canter> PLEASE ADD INFORMATION </h1>";
} else {
   $data['Name'] = $Name;
   $data['H_M_day'] = $H_M_day;
   $data['Description'] = $Description;
   $data['file_location'] = $uploc . $filename;
   updateEvent($data);

   echo "<h1 align= center> NEW TRIP ADDED SUCCESSFULLY <h1/>";

   header("location: ../view/eventData.html");
}
