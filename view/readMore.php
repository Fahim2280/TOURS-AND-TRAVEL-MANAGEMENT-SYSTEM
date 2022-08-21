<!-- <!DOCTYPE html>

<head></head>

<body>
    <title>TOURS AND TRAVEL | Details</title>
    <link rel="stylesheet" href="./readMore.css" />
        <!-- <?php
                require_once('../model/eventDbConnection.php');
                if (isset($_GET['serial'])) {
                    $serial = $_GET['serial'];
                    $result = columnData($serial);
                    echo $result['H_M_day'];
                    if (mysqli_num_rows($result) > 0) {
                        echo $row['Name'];
                        echo $row['H_M_day'];
                    }
                ?>
            <?php
                } else {
                    echo "erro";
                }
            ?>
         -->
</body>


</html> -->
<?
require_once("../model/eventDbConnection.php");

$result = showAllEvent();

$num = mysqli_num_rows($result);
if ($num > 0) {
    while ($data = mysqli_fetch_assoc($result)) {
        $img = $data['image'];
        echo "
<tr>
    <td>" . $data['serial'] . "</td>
    <td>" . $data['Name'] . "</td>
    <td>" . $data['H_M_day'] . "</td>
    <td>" . $data['Description'] . "</td>
    <td>" . $data['Place_Name'] . "</td>
    <td>" . $data['Food'] . "</td>
    <td>" . $data['Price'] . "</td>

    <td> <img src='$img' alt='' srcset='' width='100' height='100'></td>
</tr>";
    }
}
