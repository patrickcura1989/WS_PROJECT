<?php
session_start();
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
    $user_name = mysqli_real_escape_string($db_connection, $_POST['User_Name']);

    //mysql query to select field username if it's equal to the username that we check '
    $sqlValidUsername = "SELECT * FROM users WHERE username = '$user_name'";

    if (mysqli_query($db_connection, $sqlValidUsername))
    {
        $resultValidUsername = $db_connection->query($sqlValidUsername);

        //if number of rows fields is bigger them 0 that means it's NOT available '
        if ($resultValidUsername->num_rows > 0)
        {
            header("Location: http://" . HOMEURL . "/register.php"); /* Redirect browser */
            exit();
        }
        else
        {
            // Escape user inputs for security
            $first_name = mysqli_real_escape_string($db_connection, $_POST['First_Name']);
            $last_name = mysqli_real_escape_string($db_connection, $_POST['Last_Name']);
            $address = mysqli_real_escape_string($db_connection, $_POST['Address']);
            $phone_number = mysqli_real_escape_string($db_connection, $_POST['Phone_Number']);
            $email_address = mysqli_real_escape_string($db_connection, $_POST['Email_Address']);

            $password = md5(mysqli_real_escape_string($db_connection, $_POST['Password']));

            // attempt insert query execution
            $sqlRegister = "INSERT INTO users VALUES ('','$first_name', '$last_name', '$address', '$phone_number', '$email_address', '$user_name', '$password' )";

            if (mysqli_query($db_connection, $sqlRegister))
            {
                echo "USER Records added successfully.";

                $_SESSION["usernameSignIn"] = $user_name;

                $sqlLogIn = "SELECT * FROM users WHERE username = '$user_name' AND password = '$password'";
                if (mysqli_query($db_connection, $sqlLogIn))
                {
                    $resultLogIn = $db_connection->query($sqlLogIn);
                    $rowResultFromLogin = $resultLogIn->fetch_assoc();
                    $_SESSION["useridSignIn"] = $rowResultFromLogin["user_id"];
                }

                header("Location: http://" . HOMEURL . "/myProfile.php"); /* Redirect browser */
                exit();
            }
            else
            {
                echo "ERROR: Could not able to execute $sqlRegister. " . mysqli_error($db_connection);
            }
        }
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
                        <form onsubmit="return validateRegisterFields(this)" id="registerClass" action="register.php" method="POST">                                    
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
                            <div id="availability"></div>

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

<?php
include_once 'footer.php';
?>




</body>
</html>

<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript">
                            var error = '0';
                            $(document).ready(function () {
                                $("#username").blur(function () {
                                    var username = $(this).val();
                                    if (username == '') {
                                        $("#availability").html("");
                                    } else {
                                        $.ajax({
                                            url: "validation.php?uname=" + username
                                        }).done(function (data) {
                                            $("#availability").html(data);
                                            if (data != '')
                                            {
                                                error = '1';
                                            } else
                                            {
                                                error = '0';
                                            }
                                        });
                                    }
                                });
                                $("#registerClass").submit(function (e) {
                                    if (error === '1')
                                    {
                                        e.preventDefault();
                                    }
                                });
                            });
</script>

<?php
// close connection
mysqli_close($db_connection);
?>