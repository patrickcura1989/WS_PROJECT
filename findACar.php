<?php
// http://www.w3schools.com/php/php_mysql_select.asp
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

                <form class="w3-container" onsubmit="return validateSellFields(this)" action="findACar.html">
                    <p>Fuel Type</p>
                    <select id="fuelType" name="Fuel Type"><option value="">Cars by Fuel Type</option>
                        <option value="diesel">Diesel</option>
                        <option value="dual fuel">Dual</option>
                        <option value="electric">Electric</option>
                        <option value="hybrid">Hybrid</option>
                        <option value="lpg">Lpg</option>
                        <option value="petrol">Petrol</option>
                        <option value="unleaded">Unleaded</option>
                    </select>

                    <p>Make</p>
                    <select id="make" name="Make"><option value="">Cars by Make</option>
                        <option value="ac">AC</option>
                        <option value="accessories">Accessories</option>
                        <option value="alfa romeo">Alfa Romeo</option>
                        <option value="aston martin">Aston Martin</option>
                        <option value="audi">Audi</option>
                        <option value="austin">Austin</option>
                        <option value="austin healey">Austin Healey</option>
                        <option value="bedford">Bedford</option>
                        <option value="bentley">Bentley</option>
                        <option value="bmw">BMW</option>
                        <option value="bugatti">Bugatti</option>
                        <option value="buick">Buick</option>
                        <option value="cadillac">Cadillac</option>
                        <option value="chery">Chery</option>
                        <option value="chery">Mazda</option>
                    </select>

                    <p>Model/Body</p>
                    <select id="bodyType" name="Model Body Type"><option value="">Cars by Body Type</option>
                        <option value="4x4">4X4</option>
                        <option value="convertible">Convertible</option>
                        <option value="coupe">Coupe</option>
                        <option value="hatchback">Hatchback</option>
                        <option value="heavy van">Heavy Van</option>
                        <option value="luxury">Luxury</option>
                        <option value="people mover">People Mover</option>
                        <option value="race car">Race Car</option>
                        <option value="sedan">Sedan</option>
                        <option value="sports car">Sports Car</option>
                        <option value="suv">SUV</option>
                        <option value="ute">Ute</option>
                        <option value="van and minivan">Van And Minivan</option>
                        <option value="wagon">Wagon</option>
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

            <div class="w3-row w3-margin">
                <div class="w3-third">
                    <a href="findACar_1.html">
                        <img
                            src="http://photos.dmotorworks.com.au/at/AT5008539/506103/large/lg_506103_1.jpg"
                            style="width: 100%; min-height: 200px">
                    </a>
                </div>
                <div class="w3-twothird w3-container">
                    <h2>BMW 116i 2013</h2>
                    <h4>$31,900</h4>
                    <div class="w3-left-align">
                        <ul>
                            <li>32,500km</li>
                            <li>Mineralgrau Metallic 5 Door</li>
                            <li>1598cc Auto</li>
                            <li>Petrol</li>
                        </ul>
                    </div>                          
                </div>
            </div>

            <div class="w3-row w3-margin">
                <div class="w3-third">
                    <a href="findACar_2.html">
                        <img
                            src="http://photos.dmotorworks.com.au/at/AT5124597/12569/large/lg_12569_2.jpg"
                            style="width: 100%; min-height: 200px">
                    </a>
                </div>
                <div class="w3-twothird w3-container">
                    <h2>2006 Mazda Mazda6</h2>
                    <h4>$14,875</h4>
                    <div class="w3-left-align">
                        <ul>
                            <li>84,500km</li>
                            <li>White Hatchback</li>
                            <li>2300cc 6 Speed</li>
                            <li>Petrol</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--         -->

            <?php
            $sql = "SELECT * FROM Cars";

            $result = $db_connection->query($sql);

            if ($result->num_rows > 0)
            {
                // output data of each row
                while ($row = $result->fetch_assoc())
                {
                    /*
                      $Car_Name = mysqli_real_escape_string($db_connection, $_POST['Car_Name']);
                      $Fuel_Type = mysqli_real_escape_string($db_connection, $_POST['Fuel_Type']);
                      $Make = mysqli_real_escape_string($db_connection, $_POST['Make']);
                      $Body = mysqli_real_escape_string($db_connection, $_POST['Body']);
                      $Year = mysqli_real_escape_string($db_connection, $_POST['Year']);
                      $Price = mysqli_real_escape_string($db_connection, $_POST['Price']);
                      $Image_URL = mysqli_real_escape_string($db_connection, $_POST['Image_URL']);
                      $Car_Description = mysqli_real_escape_string($db_connection, $_POST['Car_Description']);
                     */

                    $descriptionList = explode(PHP_EOL, $row["description"]);

                    echo '<div class="w3-row w3-margin">
                        <div class="w3-third">
                            <a href="findACar_2.html">
                                <img
                                    src="' . $row["url"] . '"
                                    style="width: 100%; min-height: 200px">
                            </a>
                        </div>
                        <div class="w3-twothird w3-container">
                            <h2>' . $row["car_name"] . '</h2>
                            <h4>$' . $row["price"] . '</h4>
                            <div class="w3-left-align">
                                <ul>';
                                foreach ($descriptionList as &$value) 
                                {
                                    echo '<li>'.$value.'</li>' ;
                                }
                                echo '</ul>
                            </div>
                        </div>
                    </div>';
                }
            }
            else
            {
                echo "0 results";
            }
            $db_connection->close();
            ?>

            <!--         -->


        </div>



    </div>
</div>

<footer class="w3-container w3-center w3-dark-grey">
    <p>� 2016 All Rights Reserved Wellington Institute of Technology
        (WelTec)</p>
</footer>



</body>
</html>