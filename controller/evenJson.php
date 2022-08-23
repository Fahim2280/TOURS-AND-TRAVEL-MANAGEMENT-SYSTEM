<?php
require_once('../model/eventDbConnection.php');
$SEARCH = $_REQUEST['SEARCH'];
if ($SEARCH == null) {
    echo "";
    return;
} else {
    $data['SEARCH'] = $SEARCH;

    //$data['SEARCH'] = $SEARCH;
    $result = liveSearch($data);
    //$num = mysqli_num_rows($result);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            // $djson = json_encode($row);
            // $djson['serial'];
            echo $row['Name'];
        }
        mysqli_free_result($result);
    }
    liveSearch($data);
}
