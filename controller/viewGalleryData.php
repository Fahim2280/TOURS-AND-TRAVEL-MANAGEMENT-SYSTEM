
<?php
require_once('../model/dbConnection.php');

$result = showAllEvent();

$num = mysqli_num_rows($result);
if ($num > 0) {
    while ($data = mysqli_fetch_assoc($result)) {
        $img = $data['image'];
        echo "
        <tr>        
            <td> <img src='$img' alt='' srcset='' width='500' height='500'></td>
        </tr>";
    }
}
