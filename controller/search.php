<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../view/card.css" />
</head>

<body>
    <form action="./search.php" method="POST" enctype="">
        <fieldset style="background-color:DodgerBlue;">
            <h1>Booking.com</h1>
            <table>
                <tr>
                    <td>Search </td>
                    <td><input type="text" name="Name" value=""></td>
                    <td><button type="submit" name="search" value="SEARCH BY ID">Search</button></td>
                </tr>
                <tr>
                    <td><a href="SignUp.html"> View Gallery </a> <br></td>
                </tr>
            </table>
        </fieldset>
        </from>
        <?php

        require './dbConnection.php';


        if (isset($_POST['search'])) {
            $name = $_POST['Name'];
            $sql = "select * from event where Name ='$name'";
            $queray_run = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($queray_run)) {
        ?>

                <body>
                    <section class="container">
                        <div class="col-md-3">
                            <div class="card">
                                <img src="" id="card-image"><?php echo $row['image']; ?></img>
                                <h2 id="title"><?php echo $row['Name'];  ?></h2>
                                <h4 id="H-M-day"><?php echo $row['H_M_day']; ?></h4>
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