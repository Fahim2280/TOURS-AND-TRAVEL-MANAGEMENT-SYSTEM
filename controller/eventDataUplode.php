<?php 

require ('../model/dbConnection.php');

 $Name=$_REQUEST['Name'];
 $H_M_day=$_REQUEST['H-M-day'];
 $Description=$_REQUEST['description'];
 $filename = $_FILES['myFile']['name'];
 $tmp_loc = $_FILES['filename']['tmp_name'];

 $uploc='../image/';

 if(!empty($filename)){
    move_uploaded_file($tmp_loc,$uploc,$filename);
 }else{
    echo 'select a file';
 }
 if($Name == null || $H_M_day == null || $Description == null ||  $filename == null || $tmp_loc == null){
  echo "<h1 align= canter> PLEASE ADD INFORMATION </h1>";
}else{
    $data['Name']=$Name;
    $data['H-M-day'] = $H_M_day;
    $data['description'] = $Description;
    $data['myFile'] = $uploc.$filename;
    addEvent($data);

    echo "<h1 align= center> NEW TRIP ADDED SUCCESSFULLY <h1/>";
}

?>