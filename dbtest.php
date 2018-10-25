<?php
$dbhost = getenv("DB_SERVICE_HOST");
$dbport = getenv("DB_SERVICE_PORT");
$dbuser = getenv("DB_USER");
$dbname = getenv("DB_NAME");
$dbpwd = getenv("DB_PASSWORD");;
 


$connection = mysqli_connect($dbhost.":".$dbport, $dbuser, $dbpwd, $dbname) or die("Error " . mysqli_error($connection));

$query_createTable = "CREATE TABLE users (user_id int(50), username varchar(35))" or die("Error in the consult.." . mysqli_error($connection));
$rs = $connection->query($query_createTable);

$query_insertValuesinTable = "INSERT INTO users (1,"Test")" or die("Error in the consult.." . mysqli_error($connection));
$rs = $connection->query($query_insertValuesinTable);

$query = "SELECT * from users" or die("Error in the consult.." . mysqli_error($connection));

echo "Hello All.. Here is the list of users: <br>";
$rs = $connection->query($query);
while ($row = mysqli_fetch_assoc($rs)) {
    echo "User Id: ".$row['user_id'] . " User Name: " . $row['username'] . "<br>";
}
echo "End of the list <br>";

mysqli_close($connection);

?>
