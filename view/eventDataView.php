<!DOCTYPE html>

<head>
    <title>TOURS AND TRAVEL | Event Data</title>
</head>

<body>

    <h1>Data table</h1>
    <script src="../controller/search.js"></script>
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
                <th>Name</th>
                <th>How many day</th>
                <th>Description</th>
                <th>Place Name</th>
                <th>Food</th>
                <th>Price</th>
                <th>Image</th>
            </tr>
            <?php
            require_once("../model/dbConnection.php");

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

            ?>
        </table>

    </form>

    <div id="display"></div>

</body>

</html>