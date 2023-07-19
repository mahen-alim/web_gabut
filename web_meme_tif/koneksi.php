<?php  
$dbengine = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "website_meme";

$conn = mysqli_connect($dbengine, $dbuser, $dbpass, $dbname);

if ( !$conn ) {
    die("error : " . mysqli_error($conn));
}

?>