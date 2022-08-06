<!DOCTYPE html>

<head>

<body>
    <title>
        Event Data insert
    </title>
    <h1>Data table</h1>

    <table align="center">
        <tr>
            <td>SEARCH</td>
            <td><input type="text" name="SEARCH " value=""></td>
        </tr>
    </table>
    <br>

    <form action="../controller/eventDataAdd.php" method="post" enctype="multipart/form-data">

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
                <td><input type="file" id="file" name="file"></td>
            </tr>
            <tr>
                <td><input type="submit" id="button" name="uplode" value="confirm"></td>
            </tr>

        </table>
    </form>

    <form action="../controller/eventDataUpdate.php" method="post" enctype="multipart/form-data">

        <h1>Update data</h1>
        <table>
            <tr>
                <td>SERIAL</td>
                <td><input type="text" id="SERIAL_2" name="SERIAL" value=""></td>
            </tr>

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
                <td><input type="submit" id="button" name="uplode" value="Update"></td>
            </tr>
        </table>
    </form>

    <form action="../controller/eventDataDelet.php" method="post" enctype="multipart/form-data">

        <h1>Delet data</h1>
        <table>
            <tr>
                <td>SERIAL</td>
                <td><input type="text" id="SERIAL" name="SERIAL" value=""></td>
            </tr>
            <tr>
                <td><input type="submit" class="delet_box" name="" id="submit" value="Delet"></td>
            </tr>
        </table>

    </form>

</body>
</head>

</html>