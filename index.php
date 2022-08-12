<!DOCTYPE html>

<head>
    <title>TOURS AND TRAVEL</title>
</head>

<body>

    <link rel="stylesheet" href="./view/eventCard.css" />

    <form action="" method="POST" enctype="">
        <fieldset style="background-color:DodgerBlue;">
            <h1>Booking.com</h1>
            <table>
                <tr>
                    <td>Search </td>
                    <td><input type="text" name="Name" value="" id="searchId" placeholder="searc"></td>
                </tr>
                <tr>
                    <td><a href="./view/viewGallery.php"> View Gallery </a> <br></td>
                </tr>
            </table>
        </fieldset>
        </from>

        <script>
            let content = document.getElementById('searchId');
        </script>
        <div class="eventCard">
            <?php

            require_once('./model/dbConnection.php');
            $result = showAllEvent();
            while ($row = mysqli_fetch_assoc($result)) {
                $img = $row['image'];
            ?>


                <section class="container">
                    <div class="col-md-3">
                        <div class="card">
                            <img src="<?php echo $img ?>" class="card-image"></img>
                            <h2 id="title"><?php echo $row['Name'];  ?></h2>
                            <h4 id="H-M-day"><?php echo $row['H_M_day']; ?></h4>
                            <p id="description"><?php echo $row['Description']; ?></p>
                            <a href="./view/readMore.php?serial=<?php echo $row['serial'] ?>">READ MORE</a>
                        </div>
                </section>
            <?php
            }
            ?>
        </div>
</body>


</html>