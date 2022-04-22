<?php 
// DB credentials.
define('DB_HOST','containers-us-west-41.railway.app');
define('DB_USER','root');
define('DB_PASS','WOwRAiRaa58iMxMvtuLl');
define('DB_NAME','railway');
define('DB_PORT',5760);
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>