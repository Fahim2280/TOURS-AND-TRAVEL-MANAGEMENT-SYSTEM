<?php
require_once("../model/dbConnection.php");
if (isset($_GET['input'])) {
    $result = liveSearch($input);
    $input = $_GET['input'];
    $data = array();
    header("Content-type: application/json; charset={$charset}");

    if (mysqli_num_rows($result) > 0) { ?>
        <table align="center" border="1px" cellpadding="1px" cellspacing="2px">
            <tr>
                <th>Serial</th>
                <th>Name</th>
                <th>How many day</th>
                <th>Description</th>
                <th>Place Name</th>
                <th>Food</th>
                <th>Price</th>
                <th>Image</th>
            </tr>
        </table>
<?
        while ($row = mysqli_fetch_assoc($result)) {
            $row['Name'] = htmlspecialchars($row['Name']);
            $data[] = array('serial'=>$row['serial']);
        }
        echo json_encode($data);
        exit;
    }
}
?>