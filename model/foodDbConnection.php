<?php
require_once('dbConnection.php');

function showAllFood()
{

    $conn = getConnection();
    $sql = "select * from food";

    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);
    return $result;
}

function addFood($data){

    $conn = getConnection();

    $sql = "insert into food  (SERIAL, breakfast, launch, dinner, snacks) values( '{$data['SERIAL']}','{$data['breakfast']}', '{$data['launch']}','{$data['dinner']}','{$data['snacks']}')";

    if (mysqli_query($conn, $sql)) {
        return;
    } else {
        return false;
    }
}

function deleteFood($data){

    $conn = getConnection();

    $sql = "delete from food where SERIAL='{$data['SERIAL']}'";


    if (mysqli_query($conn, $sql)) {
        return;
    } else {
        return false;
    }

}



?>