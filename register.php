<?php
session_start();
include_once 'header.php';
?>

        <br>

        <div class="w3-content">

            <div class="w3-row-padding">
                <div class="w3-row w3-margin">

                    <div class="w3-modal-content w3-card-8 w3-animate-zoom"
                         style="max-width: 600px">

                        <div class="w3-center">
                            <br> <img src="http://www.w3schools.com/w3css/img_avatar4.png"
                                      alt="Avatar" style="width: 40%" class="w3-circle w3-margin-top">
                        </div>

                        <div class="w3-container">
                            <div class="w3-section">
                                <form onsubmit="return validateRegisterFields(this)" action="myProfile.php" method="POST">                                    
                                    <label><b>First Name</b></label> 
                                    <input class="w3-input w3-border w3-margin-bottom" id="firstName" name="First Name" placeholder="Enter your First Name" type="text"> 

                                    <label><b>Last Name</b></label> 
                                    <input class="w3-input w3-border w3-margin-bottom" id="lastName" name="Last Name" placeholder="Enter your Last Name" type="text"> 

                                    <label><b>Address</b></label> 
                                    <input class="w3-input w3-border w3-margin-bottom" id="address" name="Address" placeholder="Enter your Address" type="text"> 

                                    <label><b>Phone Number</b></label> 
                                    <input class="w3-input w3-border w3-margin-bottom" id="phoneNumber" name="Phone Number" placeholder="Enter your Phone Number" type="text"> 

                                    <label><b>Email Address</b></label> 
                                    <input class="w3-input w3-border w3-margin-bottom" id="emailAddress" name="Email Address" placeholder="Enter your Email Address" type="text"> 


                                    <label><b>Username</b></label> 
                                    <input class="w3-input w3-border w3-margin-bottom" id="username" name="User Name" placeholder="Enter Username" type="text"> 

                                    <label><b>Password</b></label>
                                    <input class="w3-input w3-border" placeholder="Enter Password" id="password" name="Password" type="password">
                                    <input class="w3-btn w3-btn-block w3-dark-grey w3-section" value="Register" type="submit" >
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <footer class="w3-container w3-center w3-dark-grey">
            <p>� 2016 All Rights Reserved Wellington Institute of Technology
                (WelTec)</p>
        </footer>




    </body>
</html>