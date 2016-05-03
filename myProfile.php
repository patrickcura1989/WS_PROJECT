<?php
/* http://www.w3schools.com/php/php_mysql_insert.asp
  http://www.tutorialrepublic.com/php-tutorial/php-mysql-insert-query.php
  http://stackoverflow.com/questions/8247001/best-practice-for-html-head-in-php
  http://php.net/manual/en/function.isset.php
 * http://stackoverflow.com/questions/2112373/php-page-redirect
 */

session_start();

if (!isset($_SESSION["usernameSignIn"])
)
{
    if(!isset($_POST['Username']))
    {
        header("Location: http://localhost/ws_project/login.php"); /* Redirect browser */
        exit();
        echo 'NO SESSSION set';
    }
}
else
{
    echo 'SESSSION set ';
}

include_once 'header.php';
include_once 'db_connection.php';


if (isset($_POST['First_Name']) &&
        isset($_POST['Last_Name']) &&
        isset($_POST['Address']) &&
        isset($_POST['Phone_Number']) &&
        isset($_POST['Email_Address']) &&
        isset($_POST['User_Name']) &&
        isset($_POST['Password'])
)
{

// Escape user inputs for security
    $first_name = mysqli_real_escape_string($db_connection, $_POST['First_Name']);
    $last_name = mysqli_real_escape_string($db_connection, $_POST['Last_Name']);
    $address = mysqli_real_escape_string($db_connection, $_POST['Address']);
    $phone_number = mysqli_real_escape_string($db_connection, $_POST['Phone_Number']);
    $email_address = mysqli_real_escape_string($db_connection, $_POST['Email_Address']);
    $user_name = mysqli_real_escape_string($db_connection, $_POST['User_Name']);
    $password = mysqli_real_escape_string($db_connection, $_POST['Password']);

// attempt insert query execution
    $sql = "INSERT INTO users VALUES ('','$first_name', '$last_name', '$address', '$phone_number', '$email_address', '$user_name', '$password' )";

    if (mysqli_query($db_connection, $sql))
    {
        echo "USER Records added successfully.";
    }
    else
    {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($db_connection);
    }
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

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


// Check connection
    if ($db_connection === false)
    {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

// Escape user inputs for security
    $Car_Name = mysqli_real_escape_string($db_connection, $_POST['Car_Name']);
    $Fuel_Type = mysqli_real_escape_string($db_connection, $_POST['Fuel_Type']);
    $Make = mysqli_real_escape_string($db_connection, $_POST['Make']);
    $Body = mysqli_real_escape_string($db_connection, $_POST['Body']);
    $Year = mysqli_real_escape_string($db_connection, $_POST['Year']);
    $Price = mysqli_real_escape_string($db_connection, $_POST['Price']);
    $Image_URL = mysqli_real_escape_string($db_connection, $_POST['Image_URL']);
    $Car_Description = mysqli_real_escape_string($db_connection, $_POST['Car_Description']);

// attempt insert query execution
    $sql = "INSERT INTO cars VALUES ('','$Car_Name', '$Fuel_Type', '$Make', '$Body', '$Year', '$Price', '$Image_URL', '$Car_Description','1' )";

    if (mysqli_query($db_connection, $sql))
    {
        echo "CAR Records added successfully.";
    }
    else
    {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($db_connection);
    }



}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if (isset($_POST['Username']) &&
        isset($_POST['Password'])
)
{


// Check connection
    if ($db_connection === false)
    {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

// Escape user inputs for security
    $user_name_login = mysqli_real_escape_string($db_connection, $_POST['Username']);
    $password_login = mysqli_real_escape_string($db_connection, $_POST['Password']);

// attempt insert query execution
    $sqlLogIn = "SELECT * FROM users WHERE username = '$user_name_login' AND password = '$password_login'";

    if (mysqli_query($db_connection, $sqlLogIn))
    {
        $resultLogIn = $db_connection->query($sqlLogIn);

            if ($resultLogIn->num_rows > 0)
            {
                echo "SIGN-IN successful."; 
                $_SESSION["usernameSignIn"] = "patrick";
                echo "<br>" . $_SESSION["usernameSignIn"] . " LOGGED IN";
            }
            else
            {
                echo "SIGN-IN not successful.";
            }
    }
    else
    {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($db_connection);
    }



}
?>

<br>

<div class="w3-center">
    <h2>My Cars For Sale</h2><br>
</div>

<div class="w3-content">

    <div class="w3-row w3-margin">
        <div class="w3-third">
            <img src="http://news.autotrader.co.nz/portals/0/ACP_MediaGallery/46702/45656.jpg"
                 style="width: 100%; min-height: 200px">
        </div>
        <div class="w3-twothird w3-container">
            <h2>Toyota Corolla Levin ZR</h2>
            <p>The Toyota Corolla is one of those cars whose everyman nature is both a blessing and a curse. Sheer familiarity and a reputation for reliability makes it a top seller and the default choice for many family and business buyers, but that also makes it seem a bit dull to those looking for something a bit more special in their family hatchback.</p>
            <div class="w3-right-align">
                <p>
                    <button class="w3-btn w3-dark-grey">DELETE CAR</button>
                </p>
            </div>
        </div>
    </div>

    <div class="w3-row w3-margin">
        <div class="w3-third">
            <img src="http://news.autotrader.co.nz/portals/0/ACP_MediaGallery/46697/45647.jpg"
                 style="width: 100%; min-height: 200px">
        </div>
        <div class="w3-twothird w3-container">
            <h2>Mitsubishi Outlander VRX</h2>
            <p> Previously marked by its distinctively retro exterior styling, the Mitsubishi Outlander has been relaunched with a new look that its maker calls �dynamic shield�, with changes to the grille, front and rear bumpers, tailgate and side sills. We test the flagship petrol-powered model, the VRX.</p>
            <div class="w3-right-align">
                <p>
                    <button class="w3-btn w3-dark-grey">DELETE CAR</button>
                </p>
            </div>
        </div>
    </div>


    <!-- -->
    <?php
    $sql = "SELECT * FROM Cars";

    $result = $db_connection->query($sql);

    echo '<div class="w3-row w3-margin">
        <div class="w3-third">
            <img src="http://news.autotrader.co.nz/portals/0/ACP_MediaGallery/46697/45647.jpg"
                 style="width: 100%; min-height: 200px">
        </div>
        <div class="w3-twothird w3-container">
            <h2>Mitsubishi Outlander VRX</h2>
            <p> Previously marked by its distinctively retro exterior styling, the Mitsubishi Outlander has been relaunched with a new look that its maker calls �dynamic shield�, with changes to the grille, front and rear bumpers, tailgate and side sills. We test the flagship petrol-powered model, the VRX.</p>
            <div class="w3-right-align">
                <p>
                    <button class="w3-btn w3-dark-grey">DELETE CAR</button>
                </p>
            </div>
        </div>
    </div>';
    ?>
    <!-- -->

</div>

<footer class="w3-container w3-center w3-dark-grey">
    <p>� 2016 All Rights Reserved Wellington Institute of Technology
        (WelTec)</p>
</footer>




</body>
</html>

<?php
// close connection
    mysqli_close($db_connection);
?>