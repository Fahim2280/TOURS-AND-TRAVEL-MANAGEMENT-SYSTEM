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

    $sql = "insert into event  ( Name, H_M_day, Description, image, Place_Name, Food, Price) values( '{$data['Name']}', '{$data['H_M_day']}','{$data['Description']}','{$data['file_location']}','{$data['Place_Name']}','{$data['Food']}','{$data['Price']}')";

    if (mysqli_query($conn, $sql)) {
        return;
    } else {
        return false;
    }
}

function deleteEvent($data)
{
    $conn = getConnection();

    $sql = "delete from event where serial='{$data['serial']}'";


    if (mysqli_query($conn, $sql)) {
        return;
    } else {
        return false;
    }
}

function updateEvent($data)
{
    $conn = getConnection();

    $sql = "update event SET Name='{$data['Name']}', H_M_day='{$data['H_M_day']}',Description='{$data['Description']}',Place_Name='{$data['Place_Name']}',Food='{$data['Food']}',Price='{$data['Price']}' WHERE serial= {$data['serial']}";


    if (mysqli_query($conn, $sql)) {
        return;
    } else {
        return false;
    }
}

function columnData($serial)
{
    $conn = getConnection();

    $sql = "select * from event where serial = serial";

    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);
    return $result;
}

function liveSearch($input){
    $conn = getConnection();

    $sql= "select * from event where Name LIKE '{$input}%' OR H_M_day LIKE'{$input}%' OR Description LIKE'{$input}%' OR serial LIKE'{$input}%' OR Place_Name LIKE'{$input}%' Food LIKE'{$input}%' OR `Price LIKE'{$input}%' ";
    
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}
