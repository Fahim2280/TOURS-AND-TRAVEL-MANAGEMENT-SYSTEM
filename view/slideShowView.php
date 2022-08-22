<!DOCTYPE html>

<head>
    <title>TOURS AND TRAVEL | SlideShow Data</title>
</head>

<body>

    <h1>Data table</h1>
    <form action="" method="post" enctype="">

        <table align="center" border="1px" cellpadding="1px" cellspacing="2px">
            <tr>
                <th>Serial</th>
                <th>Name</th>
                <th>Image</th>
            </tr>
            <?php
            require_once("../model/slideShowDbConnection.php");

            $result = showAllSlideShow();

            $num = mysqli_num_rows($result);
            if ($num > 0) {
                while ($data = mysqli_fetch_assoc($result)) {
                    $img = $data['image'];
                    echo "
        <tr>
            <td>" . $data['SERIAL'] . "</td>
            <td>" . $data['Name'] . "</td> 
            <td> <img src='$img' alt='' srcset='' width='100' height='100'></td>
        </tr>";
                }
            }

            ?>
        </table>

    </form>
</body>

</html>