<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="./view/card.css" />
</head>
<?php
require './controller/dbConnection.php';
$queray_run = mysqli_query($conn, $sql);
$check_event = mysqli_num_rows($queray_run) > 0;

if ($check_event) {
    while ($row = mysqli_fetch_assoc($queray_run)) {
?>

        <body>
            <section class="container">
                <div class="col-md-3">
                    <div class="card">
                        <img src="" id="card-image"><?php echo $row['image']; ?></img>
                        <h2 id="title"><?php echo $row['Name'];  ?></h2>
                        <h4 id="H-M-day"><?php echo $row['H-M-day']; ?></h4>
                        <p id="description"><?php echo $row['Event']; ?></p>
                        <a href="">READ MORE</a>
                    </div>
            </section>
        </body>
<?php

    }
} else {
    echo "Not found";
}
?>

</html>