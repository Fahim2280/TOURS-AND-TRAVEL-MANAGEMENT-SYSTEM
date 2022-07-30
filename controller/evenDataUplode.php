<?php
require './controller/evenDataUplode.php';
require './controller/dbConnection.php';
if(isset($_POST['uplod'])){
$Name=$_POST['Name'];
$H_M_day=$_POST['H_M_day'];
$Event=$_POST['Event'];
$image=$_POST['image'];

$sql = "INSERT INTO user (uplod,Name,H_M_day,Event,image) VALUES(?,?,?,?)";
$stmtimnsert = $db->prepare($sql);
$result = $stmtimnsert->execute([$Name , $H_M_day , $Event , $image ])
if($result){
    echo 'Successfully save';
}else{
    echo '';
}

}
