<?php

define("SERVERNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DBNAME", "project");

    /* Attempt MySQL server connection. Assuming you are running MySQL
      server with default setting (user 'root' with no password) */

    $db_connection = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);

// Check connection
    if ($db_connection === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
	else
	{
		echo "Connected to DB";
	}
?>