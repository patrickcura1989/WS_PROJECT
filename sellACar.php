<?php
session_start();
include_once 'header.php';
?>

        <br>

        <div class="w3-content">

            <div class="w3-card-2 w3-round w3-white">
                <div class="w3-container w3-dark-grey">
                    <p>Sell Your Car</p>
                </div>

                <div class="w3-container">
                    <form onsubmit="return validateSellACarFields(this)" action="myProfile.php" method="POST">
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

        <footer class="w3-container w3-center w3-dark-grey">
            <p>� 2016 All Rights Reserved Wellington Institute of Technology
                (WelTec)</p>
        </footer>



    </body>
</html>