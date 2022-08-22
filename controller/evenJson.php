<?php
require_once('../model/eventDbConnection.php');

$SEARCH = $_GET['SEARCH'];

if ($SEARCH == null) {
    echo "";
    return;
}else{
    $data['SEARCH'] = $SEARCH;

    $result = liveSearch($data);
    $num = mysqli_num_rows($result);
    if ($num > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $djson = json_encode($row);
            echo $djson;
        }
        mysqli_free_result($result);
    }
    liveSearch($data);
}

?>
