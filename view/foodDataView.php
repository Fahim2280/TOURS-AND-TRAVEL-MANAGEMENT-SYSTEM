<!DOCTYPE html>

<head>
    <title>TOURS AND TRAVEL| Food View</title>
</head>

<body>
    <h1>Data table</h1>
    <table align="center">
        <tr>
            <td>SEARCH</td>
            <td><input type="text" name="search " value=""></td>
        </tr>
    </table>
    <br>
    <form action="../controller/liveSearch.php" method="post" enctype="">

        <table align="center" border="1px" cellpadding="1px" cellspacing="2px">
            <tr>
                <th>Serial</th>
                <th>breakfast</th>
                <th>launch</th>
                <th>dinner</th>
                <th>snacks</th>
            </tr>
            <?php
            require_once("../model/foodDbConnection.php");

            $result = showAllFood();

            $num = mysqli_num_rows($result);
            if ($num > 0) {
                while ($data = mysqli_fetch_assoc($result)) {
                    echo "
        <tr>
            <td>" . $data['serial'] . "</td>
            <td>" . $data['breakfast'] . "</td>
            <td>" . $data['launch'] . "</td>
            <td>" . $data['dinner'] . "</td>
            <td>" . $data['snacks'] . "</td>
        </tr>";
                }
            }

            ?>
        </table>

    </form>

</body>

</html>