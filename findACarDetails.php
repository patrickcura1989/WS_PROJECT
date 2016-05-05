<?php
session_start();
include_once 'header.php';

include_once 'db_connection.php';

//echo $db_connection . "";

if (!isset($_GET['car_id'])
)
{
    header("Location: http://" . HOMEURL . "/home.php"); /* Redirect browser */
    exit();
}
else
{
    $car_id = $_GET['car_id'];
    $sqlMyCars = "SELECT * FROM cars WHERE car_id = '$car_id'";

    $resultMyCars = $db_connection->query($sqlMyCars);

    if ($resultMyCars->num_rows > 0)
    {
        
    }
    else
    {
        header("Location: http://" . HOMEURL . "/home.php"); /* Redirect browser */
        exit();
    }
}
?>

<br>

<div class="w3-container w3-center">
    <div class="w3-row">

        <div class="w3-col m12">

            <div class="w3-row w3-margin">

                <?php
                $car_id = $_GET['car_id'];
                $sqlMyCars = "SELECT * FROM cars WHERE car_id = '$car_id'";

                $resultMyCars = $db_connection->query($sqlMyCars);

                if ($resultMyCars->num_rows > 0)
                {
                    // output data of each row
                    while ($rowMyCars = $resultMyCars->fetch_assoc())
                    {
                        $descriptionList = explode(PHP_EOL, $rowMyCars["description"]);


                        echo '
                            <div class="w3-third">
                                <img
                                    src="' . $rowMyCars["url"] . '"
                                    style="width: 100%; min-height: 200px">
                            </div>

                            <div class="w3-twothird w3-container">
                                <h2>' . $rowMyCars["car_name"] . '</h2>';
                        echo '<h4>$31,900</h4>
                                <div class="w3-left-align">';
                        foreach ($descriptionList as &$value)
                        {
                            echo '<p>' . $value . '</p>';
                        }
                        echo '</div>                          
                            </div>
                        ';
                    }
                }
                ?>        
            </div>

        </div>



    </div>
</div>

<?php
include_once 'footer.php';
?>



</body>
</html>

<?php
//echo $db_connection . "";
// close connection
mysqli_close($db_connection);
?>