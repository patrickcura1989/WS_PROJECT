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
                                <form onsubmit="return validateLoginFields()" action="myProfile.php" method="POST">  
                                    <label><b>Username</b></label> 
                                    <input class="w3-input w3-border w3-margin-bottom" placeholder="Enter Username" type="text" onblur="setStyle1()" onfocus="setStyleFocus('username')" id="username" name="Username"> 

                                    <label><b>Password</b></label>
                                    <input class="w3-input w3-border" placeholder="Enter Password" type="password" onblur="setStyle2()" onfocus="setStyleFocus('password')" id="password" name="Password">
                                    <input value="Login" type="submit"  class="w3-btn w3-btn-block w3-dark-grey w3-section">
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