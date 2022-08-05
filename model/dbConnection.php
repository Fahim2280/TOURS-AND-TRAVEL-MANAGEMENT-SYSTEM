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

    $sql = "insert into event  ( Name, H_M_day, Event, image) values( '{$data['Name']}', '{$data['H_M_day']}','{$data['Event']}','{$data['image']}')";

    if (mysqli_query($conn, $sql)) {
        return;
    } else {
        return false;
    }
}

function deleteEvent($user)
{
    $conn = getConnection();

    $sql = "delete from event where serial={$user['serial']}";


    if (mysqli_query($conn, $sql)) {
        return;
    } else {
        return false;
    }
}

function updateEvent($user)
{
    $conn = getConnection();

    $sql = "update event SET  Name='{$user['Name']}', H_M_day='{$user[' H_M_day']}',Event='{$user['Event']}',image='{$user['image']}' WHERE serial= {$user['serial']}";


    if (mysqli_query($conn, $sql)) {
        return;
    } else {
        return false;
    }
}


?>