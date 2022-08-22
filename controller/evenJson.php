<?php
require_once('../model/eventDbConnection.php');

if (isset($_GET['serial'])) {
    $SEARCH = $_GET['serial'];
    $result = liveSearch($SEARCH);
    $num = mysqli_num_rows($result);
    if ($num > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $djson = json_encode($row);
            $djson['serial'];
        }
        mysqli_free_result($result);
    }
    liveSearch($data);
}
