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

function showAllEvent()
{

    $conn = getConnection();
    $sql = "select * from event";

    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);
    return $result;
}

function addEvent($data)
{

    $conn = getConnection();

    $sql = "insert into event  ( Name, H_M_day, Description, image) values( '{$data['Name']}', '{$data['H_M_day']}','{$data['Description']}','{$data['file_location']}')";

    if (mysqli_query($conn, $sql)) {
        return;
    } else {
        return false;
    }
}

function deleteEvent($data)
{
    $conn = getConnection();

    $sql = "delete from event where serial={$data['serial']}";


    if (mysqli_query($conn, $sql)) {
        return;
    } else {
        return false;
    }
}

function updateEvent($data)
{
    $conn = getConnection();

    $sql = "update event SET Name='{$data['Name']}', H_M_day='{$data['H_M_day']}',Description='{$data['Description']}'}' WHERE serial= {$data['serial']}";


    if (mysqli_query($conn, $sql)) {
        return;
    } else {
        return false;
    }
}
