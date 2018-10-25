<?php
$dbhost = getenv("DB_SERVICE_HOST");
$dbport = getenv("DB_SERVICE_PORT");
$dbuser = getenv("DB_USER");
$dbname = getenv("DB_NAME");
$dbpwd = getenv("DB_PASSWORD");;

$query = "show databases" or die("Error in the consult.." . mysqli_error($connection));

echo "Hello All.. Here is the list of users: <br>";
$rs = $connection->query($query);
echo "End of the list <br>";

mysqli_close($connection);

?>
