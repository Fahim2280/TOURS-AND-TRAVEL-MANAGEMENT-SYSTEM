<?php

require_once('../model/eventDbConnection.php');

$SERIAL = $_REQUEST['SERIAL'];
$Name = $_REQUEST['Name'];
$H_M_day = $_REQUEST['H_M_day'];
$Description = $_REQUEST['Description'];
$Place_Name = $_REQUEST['Place_Name'];
$Food = $_REQUEST['Food'];
$Price = $_REQUEST['Price'];

if ($SERIAL == null || $Name == null || $H_M_day == null || $Description ==null || $Place_Name == null  || $Food == null ||  $Price == null  ) {
   echo "<h1 align= canter> PLEASE ADD INFORMATION </h1>";
   return;
} else {
   $data['serial'] = $SERIAL;
   $data['Name'] = $Name;
   $data['H_M_day'] = $H_M_day;
   $data['Description'] = $Description;
   $data['Place_Name'] = $Place_Name;
   $data['Food'] = $Food;
   $data['Price'] = $Price;
   updateEvent($data);
   header("location: ../view/evenDataUpdate.html");
}

