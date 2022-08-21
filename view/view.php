<!DOCTYPE html>

<head>
    <title>TOURS AND TRAVEL | Food Data</title>
</head>

<body>
    <h2>Food Data</h2>
    <form>
        <select name="Food" onchange="showFoodData(this.value)">
            <option value="">Select :</option>
            <option value="Show">Food Data Show</option>
            <option value="Add ">Food Data Add</option>
            <option value="Uplode">Food Data Uplode</option>
            <option value="Delete">Food Data Delete</option>
        </select>
    </form>
    <br>
    <div id="View"></div>

    <script defer src="../controller/ajaxDatabase.js"></script>

</body>

</html>