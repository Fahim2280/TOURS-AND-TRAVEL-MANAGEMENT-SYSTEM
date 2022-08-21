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

function updateFood($data){

    $conn = getConnection();

    $sql = "insert into food  ( breakfast, launch, dinner,snacks) values( '{$data['breakfast']}', '{$data['launch']}','{$data['dinner']}','{$data['snacks']}')";

    if (mysqli_query($conn, $sql)) {
        return;
    } else {
        return false;
    }
}

function deleteFood($data){

    $conn = getConnection();

    $sql = "delete from food where serial='{$data['serial']}'";


    if (mysqli_query($conn, $sql)) {
        return;
    } else {
        return false;
    }

}



?>