<?php

require_once('../model/dbConnection.php');

$SERIAL = $_REQUEST['SERIAL'];
$Name = $_REQUEST['Name'];
$H_M_day = $_REQUEST['H_M_day'];
$Description = $_REQUEST['Description'];

if ($SERIAL == null || $Name == null || $H_M_day == null || $Description == null ) {
   echo "<h1 align= canter> PLEASE ADD INFORMATION </h1>";
   return;
} else {
   $data['serial'] = $SERIAL;
   $data['Name'] = $Name;
   $data['H_M_day'] = $H_M_day;
   $data['Description'] = $Description;
   updateEvent($data);
}
echo "<h1 align= center> UPDATE SUCCESSFULLY <h1/>";

//header("location: ../view/eventData.html");

?>
