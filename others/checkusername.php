<?php
if (isset($_POST["username"])
)
{
//connect to database
    include_once 'db_connection.php';

//get the username
    $username = mysql_real_escape_string($_POST['username']);

//mysql query to select field username if it's equal to the username that we check '
    $sql = "SELECT * FROM users WHERE username = '$username'";
    if (mysqli_query($db_connection, $sql))
    {
        $result = $db_connection->query($sql);

        //if number of rows fields is bigger them 0 that means it's NOT available '
        if ($result->num_rows > 0)
        {
            //and we send 0 to the ajax request
            echo 0;
        }
        else
        {
            //else if it's not bigger then 0, then it's available '
            //and we send 1 to the ajax request
            echo 1;
        }
    }
    // close connection
    mysqli_close($db_connection);
}
?>