<?php
require_once('dbConnection.php');

function showAllSlideShow()
{

    $conn = getConnection();
    $sql = "select * from slideshow";

    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);
    return $result;
}
function addSlideShow($data){
    $conn = getConnection();

    $sql = "insert into slideshow  ( Name, SERIAL, image) values( '{$data['Name']}', '{$data['SERIAL']}','{$data['file_location']}')";

    if (mysqli_query($conn, $sql)) {
        return;
    } else {
        return false;
    }
}

function deleteSlideShow($data){

    $conn = getConnection();

    $sql = "delete from slideshow where SERIAL='{$data['SERIAL']}'";


    if (mysqli_query($conn, $sql)) {
        return;
    } else {
        return false;
    }
}

?>