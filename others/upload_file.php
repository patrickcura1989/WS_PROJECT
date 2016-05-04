<?php
if ($_FILES["f1"]["size"] < 20000)
{
    if ($_FILES["f1"]["error"] > 0)
    {
        echo "Return Code: " . $_FILES["f1"]["error"] . "<br />";
    }
    else
    {
        echo "Upload: " . $_FILES["f1"]["name"] . "<br />";
        echo "Type: " . $_FILES["f1"]["type"] . "<br />";
        echo "Size: " . ($_FILES["f1"]["size"] / 1024) . " Kb<br />";
        echo "Temp file: " . $_FILES["f1"]["tmp_name"] . "<br />";

        if (file_exists("upload/" . $_FILES["f1"]["name"]))
        {
            echo $_FILES["f1"]["name"] . " already exists. ";
        }
        else
        {
            move_uploaded_file($_FILES["f1"]["tmp_name"], "upload/" . $_FILES["f1"]["name"]);
            echo "Stored in: " . "upload/" . $_FILES["f1"]["name"];
        }
    }
}
else
{
    echo "Invalid file";
}
?>
