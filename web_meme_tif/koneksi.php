<?php  
$dbengine = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "website_meme";

mysqli_connect($dbengine, $dbuser, $dbpass, $dbname);

if (mysqli_connect) {
    echo "database connected...";
}
?>