<?php

/*
  Title :  Ajax username validation with php and mysql
  Author : Anand Roshan
  Author URI : http://voidtricks.com
  Documentation : http://voidtricks.com/
  http://www.voidtricks.com/ajax-username-validation/
 */

include_once 'db_connection.php';

//get the username
$username = mysqli_real_escape_string($db_connection, $_GET['uname']);

//mysql query to select field username if it's equal to the username that we check '
$sql = "SELECT * FROM users WHERE username = '$username'";
if (mysqli_query($db_connection, $sql))
{
    $result = $db_connection->query($sql);

    //if number of rows fields is bigger them 0 that means it's NOT available '
    if ($result->num_rows > 0)
    {
        //echo "<span class='red'> " . $username . " is Not Available </span> <br> <br>";
        echo "<span class='red'> Chosen Username is already taken </span> <br> <br>";
    }
    else
    {
        //echo "<span class='green'> " . $username . " is Available </span> <br> <br>";
    }
}
// close connection
mysqli_close($db_connection);
?>