<!DOCTYPE html>

<head>

<body>
    <title>
        Event Data insert
    </title>
    <form action="../controller/eventDataUplode.php" method="post" enctype="multipart/form-data">

        <h1>Data table</h1>

        <table align="center">
            <tr>
                <td>SEARCH</td>
                <td><input type="text" name="SEARCH " value=""></td>
            </tr>
        </table>

        <br>

        <table align="center" border="1px" cellpadding="1px" cellspacing="2px">
            <tr>
                <th>Name</th>
                <th>How many day</th>
                <th>Description</th>
                <th>Image</th>
            </tr>
        </table>
        <h1>Card data</h1>
        <table>
            <tr>
                <td>Place name </td>
                <td><input type="text" id="Name" name="Name" value=""></td>
            </tr>
            <tr>
                <td>How many day </td>
                <td><input type="text" id="H_M_day" name="H_M_day" value=""></td>
            </tr>
            <tr>
                <td>Card description </td>
                <td><textarea id="Description" name="Description" rows=" 4" cols="50"></textarea></td>
            </tr>
            <tr>
                <td>Image </td>
                <td><input type="file" id="myFile" name="filename"></td>
            </tr>
            <tr>
                <td><input type="submit" id="button" name="uplode" value="confirm"></td>
            </tr>

        </table>
    </form>
</body>
</head>

</html>