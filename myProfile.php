<?php
/*
  http://www.w3schools.com/php/php_mysql_insert.asp
  http://www.tutorialrepublic.com/php-tutorial/php-mysql-insert-query.php
  http://stackoverflow.com/questions/8247001/best-practice-for-html-head-in-php
  http://php.net/manual/en/function.isset.php
  http://stackoverflow.com/questions/2112373/php-page-redirect
  http://www.echoecho.com/htmlforms07.htm
  http://stackoverflow.com/questions/7261026/what-mysql-type-for-long-descriptions-with-punctuation
 */

session_start();
include_once 'header.php';

if (!isset($_SESSION["usernameSignIn"])
)
{
    header("Location: http://" . HOMEURL . "/login.php"); /* Redirect browser */
    exit();
    echo 'NO SESSSION set';
}


include_once 'db_connection.php';

////////////////////////////////////////////////////////////////////

if (isset($_POST['car_id'])
)
{
    $car_id = $_POST['car_id'];

    $sqldeleteCar = "DELETE FROM cars WHERE car_id='$car_id'";

    if (mysqli_query($db_connection, $sqldeleteCar))
    {
        echo "Car deleted successfully.";
    }
    else
    {
        echo "ERROR: Could not able to execute $sqldeleteCar. " . mysqli_error($db_connection);
    }
}
?>

<br>




<!-- -->
<?php
$user_id = $_SESSION["useridSignIn"];
$sqlMyCars = "SELECT * FROM cars WHERE user_id = '$user_id'";

$resultMyCars = $db_connection->query($sqlMyCars);

if ($resultMyCars->num_rows > 0)
{
    echo'
    <div class="w3-center">
        <h2>My Cars For Sale</h2><br>
    </div>
    <div class="w3-content">
    ';

    // output data of each row
    while ($rowMyCars = $resultMyCars->fetch_assoc())
    {
        echo '<div class="w3-row w3-margin">
                            <form name="myform" action="http://' . HOMEURL . '/findACarDetails.php" method="GET">
                                <div class="w3-third">
                                    <input type="image" src="' . $rowMyCars["url"] . '" style="width: 100%; min-height: 200px" alt="Image not Available">
                                    <input type="hidden" name="car_id" value="' . $rowMyCars["car_id"] . '">
                                </div>
                                <div class="w3-twothird w3-container">
                                    <h2>' . $rowMyCars["car_name"] . '</h2>
                                    <h4>$' . $rowMyCars["price"] . '</h4>
                                    <div class="w3-left-align">
                                        <ul>';

        echo '<li> Fuel Type: ' . $rowMyCars["fuel_type"] . '</li>';
        echo '<li> Made By: ' . $rowMyCars["make"] . '</li>';
        echo '<li> Body Type: ' . $rowMyCars["model"] . '</li>';
        echo '<li> Year: ' . $rowMyCars["year"] . '</li>';

        $sqlFromUsers = "SELECT * FROM users where user_id = '" . $rowMyCars["user_id"] . "'";

        echo '</ul>
                                    </div>
                                </div>
                            </form>
                    </div>';

        echo '<div class="w3-right-align">
                                    <p>
                                        <form action="myProfile.php" method="POST"> 
                                            <input type="hidden" name="car_id" value="' . $rowMyCars["car_id"] . '">
                                            <input value="DELETE CAR" type="submit" class="w3-btn w3-dark-grey">
                                        </form>
                                    </p>
                                </div>';
    }
    echo '</div> </div>';
}
else
{
    echo'
    <div class="w3-center">
        <h2>You do not have cars for sale</h2><br>
    </div>
    <div class="w3-content">
    ';
}
?>
<!-- -->

</div>


<?php
include_once 'footer.php';
?>




</body>
</html>

<?php
// close connection
mysqli_close($db_connection);
?>