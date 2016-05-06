<?php
// http://www.w3schools.com/php/php_mysql_select.asp
// http://www.echoecho.com/htmlforms14.htm
// http://www.webreference.com/programming/php/search/2.html
// http://www.techonthenet.com/mysql/between.php
session_start();
include_once 'header.php';
include_once 'db_connection.php';
?>

<br>

<div class="w3-container w3-center">
    <div class="w3-row">

        <div class="w3-col m3 w3-left-align">
            <div class="w3-card-2 w3-round w3-white">
                <div class="w3-container w3-dark-grey">
                    <p>Search for a Car</p>
                </div>

                <form class="w3-container" onsubmit="return validateSellFields(this)" action="findACar.php" method="GET">
                    <p>Fuel Type</p>
                    <select id="fuelType" name="Fuel Type"><option value="">Cars by Fuel Type</option>
                        <?php
                        $sqlOptions = "SELECT DISTINCT(fuel_type) FROM cars ORDER BY fuel_type ASC";

                        $resultOptions = $db_connection->query($sqlOptions);

                        if ($resultOptions->num_rows > 0)
                        {
                            // output data of each row
                            while ($rowOptions = $resultOptions->fetch_assoc())
                            {
                                echo
                                '
                                <option value="' . $rowOptions["fuel_type"] . '">' . $rowOptions["fuel_type"] . '</option>
                                ';
                            }
                        }
                        ?>
                    </select>

                    <p>Make</p>
                    <select id="make" name="Make"><option value="">Cars by Make</option>
                        <?php
                        $sqlOptions = "SELECT DISTINCT(make) FROM cars ORDER BY make ASC";

                        $resultOptions = $db_connection->query($sqlOptions);

                        if ($resultOptions->num_rows > 0)
                        {
                            // output data of each row
                            while ($rowOptions = $resultOptions->fetch_assoc())
                            {
                                echo
                                '
                                <option value="' . $rowOptions["make"] . '">' . $rowOptions["make"] . '</option>
                                ';
                            }
                        }
                        ?>
                    </select>

                    <p>Model/Body</p>
                    <select id="bodyType" name="Model Body Type"><option value="">Cars by Body Type</option>
                        <?php
                        $sqlOptions = "SELECT DISTINCT(model) FROM cars ORDER BY model ASC";

                        $resultOptions = $db_connection->query($sqlOptions);

                        if ($resultOptions->num_rows > 0)
                        {
                            // output data of each row
                            while ($rowOptions = $resultOptions->fetch_assoc())
                            {
                                echo
                                '
                                <option value="' . $rowOptions["model"] . '">' . $rowOptions["model"] . '</option>
                                ';
                            }
                        }
                        ?>
                    </select>

                    <p>Year</p>
                    <select id="yearFrom" name="From Year"><option value="">Any</option>
                        <option value="1950">1950</option>
                        <option value="1960">1960</option>
                        <option value="1970">1970</option>
                        <option value="1980">1980</option>
                        <option value="1985">1985</option>
                        <option value="1990">1990</option>
                        <option value="1995">1995</option>
                        <option value="1999">1999</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                    </select><span>to</span><select id="yearTo" name="Year To"><option value="">Any</option>
                        <option value="1950">1950</option>
                        <option value="1960">1960</option>
                        <option value="1970">1970</option>
                        <option value="1980">1980</option>
                        <option value="1985">1985</option>
                        <option value="1990">1990</option>
                        <option value="1995">1995</option>
                        <option value="1999">1999</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                    </select>

                    <p>Price</p>
                    <select id="priceFrom" name="Price From"><option value="">Any</option>
                        <option value="2500">2500</option>
                        <option value="5000">5000</option>
                        <option value="7500">7500</option>
                        <option value="10000">10000</option>
                        <option value="12500">12500</option>
                        <option value="15000">15000</option>
                        <option value="20000">20000</option>
                        <option value="30000">30000</option>
                        <option value="40000">40000</option>
                        <option value="50000">50000</option>
                        <option value="60000">60000</option>
                        <option value="70000">70000</option>
                        <option value="80000">80000</option>
                        <option value="90000">90000</option>
                        <option value="100000">100000</option>
                        <option value="150000">150000</option>
                        <option value="200000">200000</option>
                    </select><span>to</span><select id="priceTo" name="Price To"><option value="">Any</option>
                        <option value="2500">2500</option>
                        <option value="5000">5000</option>
                        <option value="7500">7500</option>
                        <option value="10000">10000</option>
                        <option value="12500">12500</option>
                        <option value="15000">15000</option>
                        <option value="20000">20000</option>
                        <option value="30000">30000</option>
                        <option value="40000">40000</option>
                        <option value="50000">50000</option>
                        <option value="60000">60000</option>
                        <option value="70000">70000</option>
                        <option value="80000">80000</option>
                        <option value="90000">90000</option>
                        <option value="100000">100000</option>
                        <option value="150000">150000</option>
                        <option value="200000">200000</option>
                        <option value="250000">250000</option>
                        <option value="300000">300000</option>
                    </select>

                    <p>Keywords</p>
                    <input id="keywords" name="Keywords" value="" type="text">

                    <div class="w3-right-align">
                        <p>
                            <input class="w3-btn w3-dark-grey" value="FIND MY CAR" type="submit">
                        </p>
                    </div>

                </form>

            </div>
            <br>
        </div>


        <!--        -->


        <div class="w3-col m9">

            <!--         -->

            <?php
            if (isset($_GET['Model_Body_Type']) || 
                    isset($_GET['Fuel_Type']) || 
                    isset($_GET['Make']) || 
                    isset($_GET['From_Year']) || 
                    isset($_GET['Year_To']) || 
                    isset($_GET['Price_From']) || 
                    isset($_GET['Price_To']) || 
                    isset($_GET['Keywords']) 
            )
            {
                $bodyType = mysqli_real_escape_string($db_connection, $_GET['Model_Body_Type']);
                $fuelType= mysqli_real_escape_string($db_connection, $_GET['Fuel_Type']);
                $make = mysqli_real_escape_string($db_connection, $_GET['Make']);
                $fromYear = mysqli_real_escape_string($db_connection, $_GET['From_Year']);
                $yearTo = mysqli_real_escape_string($db_connection, $_GET['Year_To']);
                $priceFrom = mysqli_real_escape_string($db_connection, $_GET['Price_From']);
                $priceTo = mysqli_real_escape_string($db_connection, $_GET['Price_To']);
                $keywords = mysqli_real_escape_string($db_connection, $_GET['Keywords']);
                
                $sqlAllCars = "SELECT * FROM cars WHERE model LIKE '%$bodyType%' AND fuel_type LIKE '%$fuelType%' AND make  LIKE '%$make%' AND (car_name LIKE '%$keywords%' OR description LIKE '%$keywords%' OR fuel_type LIKE '%$keywords%' OR make LIKE '%$keywords%' OR model LIKE '%$keywords%') ";
                
                if($fromYear  != '' AND $yearTo != '')
                {
                    $sqlAllCars .= "AND (year BETWEEN '$fromYear' AND '$yearTo') ";
                }
                else if($fromYear  != '' AND $yearTo == '')
                {
                    $sqlAllCars .= "AND year >= '$fromYear' ";
                }
                else if($fromYear  == '' AND $yearTo != '')
                {
                    $sqlAllCars .= "AND year <= '$yearTo' ";
                }
                
                if($priceFrom  != '' AND $priceTo != '')
                {
                    $sqlAllCars .= "AND (price BETWEEN '$priceFrom' AND '$priceTo') ";
                }
                else if($priceFrom  != '' AND $priceTo == '')
                {
                    $sqlAllCars .= "AND price >= '$priceFrom' ";
                }
                else if($priceFrom  == '' AND $priceTo != '')
                {
                    $sqlAllCars .= "AND price <= '$priceTo' ";
                }
            }
            else
            {
                $sqlAllCars = "SELECT * FROM cars";
            }

            echo $sqlAllCars;

            $resultAllCars = $db_connection->query($sqlAllCars);

            if ($resultAllCars->num_rows > 0)
            {
                // output data of each row
                while ($rowAllCars = $resultAllCars->fetch_assoc())
                {


                    //$descriptionList = explode(PHP_EOL, $rowAllCars["description"]);

                    echo '<div class="w3-row w3-margin">
                            <form name="myform" action="http://' . HOMEURL . '/findACarDetails.php" method="GET">
                                <div class="w3-third">
                                    <input type="image" src="' . $rowAllCars["url"] . '" style="width: 100%; min-height: 200px" alt="Image not Available">
                                    <input type="hidden" name="car_id" value="' . $rowAllCars["car_id"] . '">
                                </div>
                                <div class="w3-twothird w3-container">
                                    <h2>' . $rowAllCars["car_name"] . '</h2>
                                    <h4>$' . $rowAllCars["price"] . '</h4>
                                    <div class="w3-left-align">
                                        <ul>';

                    echo '<li> Fuel Type: ' . $rowAllCars["fuel_type"] . '</li>';
                    echo '<li> Made By: ' . $rowAllCars["make"] . '</li>';
                    echo '<li> Body Type: ' . $rowAllCars["model"] . '</li>';
                    echo '<li> Year: ' . $rowAllCars["year"] . '</li>';

                    $sqlFromUsers = "SELECT * FROM users where user_id = '" . $rowAllCars["user_id"] . "'";

                    $resultFromUsers = $db_connection->query($sqlFromUsers);
                    $rowResultFromUsers = $resultFromUsers->fetch_assoc();

                    echo '<li> Seller Name: ' . $rowResultFromUsers["firstName"] . ' ' . $rowResultFromUsers["lastName"];
                    echo '<li> Phone Number: ' . $rowResultFromUsers["phoneNumber"];
                    echo '<li> Email: ' . $rowResultFromUsers["email"];
                    echo '</ul>
                                </div>
                            </div>
                        </form>
                    </div>';
                }
            }
            else
            {
                echo "0 results";
            }
            ?>

            <!--         -->


        </div>



    </div>
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