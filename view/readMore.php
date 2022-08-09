<!DOCTYPE html>

<head>

<body>
    <title>TOURS AND TRAVEL | Details</title>
    <link rel="stylesheet" href="./readMore.css" />
        <?php
        require_once('../model/dbConnection.php');
        if (isset($_GET['serial'])) {
            $serial=$_GET['serial'];
            $result = columnData($serial);
            echo $result['H_M_day'];
            if (mysqli_num_rows($result)>0) {
                echo $row['Name'];
                echo $row['H_M_day'];
            }
            ?>
            <?php
        }
        else{
            echo "erro";
        }
        ?>
        
</body>
</head>

</html>