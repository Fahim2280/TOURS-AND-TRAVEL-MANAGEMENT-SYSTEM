<!DOCTYPE html>

<head>
    <title>TOURS AND TRAVEL| Gallery</title>
</head>

<body>


    <link rel="stylesheet" href="./galleryCard.css" />

    <form action="" method="post" enctype="multipart/form-data">
        <table align="center">
            <tr>
                <td>SEARCH</td>
                <td><input type="text" name="SEARCH " value=""></td>
            </tr>
            <br>
        </table>
        <div class="gallaryCard">
            <?php
            require_once('../model/eventDbConnection.php');

            $result = showAllEvent();

            $num = mysqli_num_rows($result);
            if ($num > 0) {
                while ($data = mysqli_fetch_assoc($result)) {
                    $img = $data['image'];
            ?>

                    <body>
                        <section Class="container">
                            <div class="col-md-3">
                                <div class="card">
                                    <h2><?php echo $data['Place_Name']; ?></h2>
                                    <img src="<?php echo $img ?>" class="card-image"></img>
                        </section>
                    </body>
            <?php
                }
            }
            ?>
    </form>
    </div>
</body>

</html>