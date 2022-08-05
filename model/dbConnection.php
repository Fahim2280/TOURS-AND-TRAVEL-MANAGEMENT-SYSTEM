<?php

$host = "localhost";
$dbname = "tours_and_travel";
$dbpass = "";
$dbuser = "root";

function getConnection()
{
    global $host;
    global $dbname;
    global $dbpass;
    global $dbuser;

    $conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
    return $conn;
}

function showAllEvent(){

    $conn = getConnection();
    $sql = "select * from event";

    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);
    return $result;

}

function addEvent($data)
{

    $conn = getConnection();

    $sql = "insert into train  ( Name, H_M_day, Event, image) values( '{$data['Name']}', '{$data['H_M_day']}','{$data['Event']}','{$data['image']}')";

    if (mysqli_query($conn, $sql)) {
        return;
    } else {
        return false;
    }
}

?>