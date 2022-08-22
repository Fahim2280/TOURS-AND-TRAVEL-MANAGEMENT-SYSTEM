<?php
require_once("../model/eventDbConnection.php");

$result = liveSearch();

$num = mysqli_num_rows($result);
$q = $_GET["q"];
$hint = "";

if ($num > 0) {
    while ($data = mysqli_fetch_assoc($result)) {
        $djson= json_encode($data);
        echo $djson;
    }
}

if ($hint == "") {
    $response = "no suggestion";
} else {
    $response = $hint;
}
echo $response;

?>
