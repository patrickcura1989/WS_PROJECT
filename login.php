<?php
// http://webcheatsheet.com/php/md5_encrypt_passwords.php
// http://stackoverflow.com/questions/247304/what-data-type-to-use-for-hashed-password-field-and-what-length
// 
session_start();
include_once 'header.php';
include_once 'db_connection.php';

if (isset($_POST['Username']) &&
        isset($_POST['Password'])
)
{
// Escape user inputs for security
    $user_name_login = mysqli_real_escape_string($db_connection, $_POST['Username']);
    $password_login = md5(mysqli_real_escape_string($db_connection, $_POST['Password']));

// attempt insert query execution
    $sqlLogIn = "SELECT * FROM users WHERE username = '$user_name_login' AND password = '$password_login'";

    if (mysqli_query($db_connection, $sqlLogIn))
    {
        $resultLogIn = $db_connection->query($sqlLogIn);

            if ($resultLogIn->num_rows > 0)
            {
                echo "SIGN-IN successful."; 
                
                $rowResultFromLogin = $resultLogIn->fetch_assoc();
                
                $_SESSION["usernameSignIn"] = $user_name_login;
                $_SESSION["useridSignIn"] = $rowResultFromLogin["user_id"];
                
				
                header("Location: http://".HOMEURL."/myProfile.php"); /* Redirect browser */
                exit();
            }
            else
            {
                //echo "SIGN-IN not successful. " . $password_login;
                echo '<div style="display: block;" id="id01" class="w3-modal">
                    <div class="w3-modal-content w3-animate-top w3-card-8">
                      <header class="w3-container w3-red"> 
                        <h2>Sign-In Failed</h2>
                      </header>
                      <div class="w3-container">
                        <p>Invalid Username or Password</p>
                      </div>
                      <footer class="w3-container w3-red">
                          <span onclick="document.getElementById(\'id01\').style.display=\'none\'" class="w3-closebtn w3-text-white w3-medium w3-right w3-hover-text-black"><p>Close</p></span>     
                      </footer>
                    </div>
                  </div>';
            }
    }
    else
    {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($db_connection);
    }
}
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
                                <form onsubmit="return validateLoginFields()" action="login.php" method="POST">  
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


    </body>
</html>

<?php
// close connection
mysqli_close($db_connection);
?>