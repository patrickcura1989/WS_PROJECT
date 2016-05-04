<?php

$name = $_GET['FirstName'];
$message = $_GET['Message'];

$fp = fopen("feedback.txt", 'a');

$data = "User: " . $name . " Feedback: " . $message;

fwrite($fp, $data);

fclose($fp);
        


$myFile = "feedback.txt"; 
$fh = fopen($myFile, 'r'); 
$fs=filesize($myFile); 
$outputFileContents = fread($fh, $fs); 
fclose($fh); 
echo $fs ."<br/>". $outputFileContents; 



?>