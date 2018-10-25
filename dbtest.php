<?php
$dbhost = getenv("DB_SERVICE_HOST");
$dbport = getenv("DB_SERVICE_PORT");
$dbuser = getenv("DB_USER");
$dbname = getenv("DB_NAME");
$dbpwd = getenv("DB_PASSWORD");;
 


$connection = mysqli_connect($dbhost.":".$dbport, $dbuser, $dbpwd, $dbname) or die("Error " . mysqli_error($connection));

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 
echo "Connected successfully";

mysqli_close($connection);

?>
