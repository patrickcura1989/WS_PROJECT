<?php

$name = $_GET['FirstName'];
$message = $_GET['Message'];

$fp = fopen("feedback.txt", 'a');

$data = "User: " . $name . " Feedback: " . $message;

fwrite($fp, $data);

fclose($fp);
        
?>