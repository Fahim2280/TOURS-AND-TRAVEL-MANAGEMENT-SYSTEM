<?php

$conn = mysqli_connect('localhost', 'root', '', 'tours_and_travel');

$sql = "select * from event";
$result = mysqli_query($conn, $sql);
?>