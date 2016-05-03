<?php
/* 
http://www.w3schools.com/php/php_mysql_insert.asp
http://www.tutorialrepublic.com/php-tutorial/php-mysql-insert-query.php
http://stackoverflow.com/questions/8247001/best-practice-for-html-head-in-php
http://php.net/manual/en/function.isset.php
http://stackoverflow.com/questions/2112373/php-page-redirect
 */

session_start();

if (!isset($_SESSION["usernameSignIn"])
)
{
    header("Location: http://localhost/ws_project/login.php"); /* Redirect browser */
    exit();
    echo 'NO SESSSION set';
}
else
{
    echo 'SESSSION set ';
    echo "<br>" . $_SESSION["usernameSignIn"] . " LOGGED IN. ID is " . $_SESSION["useridSignIn"];
}

include_once 'header.php';
include_once 'db_connection.php';




//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
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