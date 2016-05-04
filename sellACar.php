<?php
session_start();
include_once 'header.php';

if (!isset($_SESSION["usernameSignIn"])
)
{
	header("Location: http://".HOMEURL."/login.php"); /* Redirect browser */
    exit();
    echo 'NO SESSSION set';
}
else
{
    echo 'SESSSION set ';
    echo "<br>" . $_SESSION["usernameSignIn"] . " LOGGED IN. ID is " . $_SESSION["useridSignIn"];
}


include_once 'db_connection.php';

if (isset($_POST['Car_Name']) &&
        isset($_POST['Fuel_Type']) &&
        isset($_POST['Make']) &&
        isset($_POST['Body']) &&
        isset($_POST['Year']) &&
        isset($_POST['Price']) &&
        isset($_POST['Image_URL']) &&
        isset($_POST['Car_Description'])
)
{

// Escape user inputs for security
    $Car_Name = mysqli_real_escape_string($db_connection, $_POST['Car_Name']);
    $Fuel_Type = mysqli_real_escape_string($db_connection, $_POST['Fuel_Type']);
    $Make = mysqli_real_escape_string($db_connection, $_POST['Make']);
    $Body = mysqli_real_escape_string($db_connection, $_POST['Body']);
    $Year = mysqli_real_escape_string($db_connection, $_POST['Year']);
    $Price = mysqli_real_escape_string($db_connection, $_POST['Price']);
    $Image_URL = mysqli_real_escape_string($db_connection, $_POST['Image_URL']);
    $Car_Description = mysqli_real_escape_string($db_connection, $_POST['Car_Description']);
    $user_id = $_SESSION["useridSignIn"];

// attempt insert query execution
    $sqlInsertCars = "INSERT INTO cars VALUES ('','$Car_Name', '$Fuel_Type', '$Make', '$Body', '$Year', '$Price', '$Image_URL', '$Car_Description','$user_id' )";

    if (mysqli_query($db_connection, $sqlInsertCars))
    {
        echo "CAR Records added successfully.";
    }
    else
    {
        echo "ERROR: Could not able to execute $sqlInsertCars. " . mysqli_error($db_connection);
    }
}
?>

        <br>

        <div class="w3-content">

            <div class="w3-card-2 w3-round w3-white">
                <div class="w3-container w3-dark-grey">
                    <p>Sell Your Car</p>
                </div>

                <div class="w3-container">
                    <form onsubmit="return validateSellACarFields(this)" action="sellACar.php" method="POST">
                        <p>Car Name</p>
                        <input value="" id="carName" name="Car Name" type="text">

                        <p>Fuel Type</p>
                        <input value="" id="fuelType" name="Fuel Type" type="text">

                        <p>Make</p>
                        <input value="" id="make" name="Make" type="text">

                        <p>Model/Body</p>
                        <input value="" id="body" name="Body" type="text">

                        <p>Year</p>
                        <input value="" id="year" name="Year" type="text">

                        <p>Price</p>
                        <input value="" id="price" name="Price" type="text">

                        <p>URL to Image</p>
                        <input value="" id="imageURL" name="Image URL" type="text">

                        <p>Car Description</p>
                        <p>
                            <textarea class="w3-input  w3-border" style="height: 200px" id="description" name="Car Description"
                                      placeholder="Please Describe the Car you are Selling.."></textarea>
                        </p>

                        <div class="w3-right-align">
                            <p>
                                <input class="w3-btn w3-dark-grey" value="SELL MY CAR" type="submit" >
                            </p>
                        </div>
                    </form>
                </div>
                
            </div>

            <br>

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