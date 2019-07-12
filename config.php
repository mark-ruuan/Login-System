<?php
/*
This file contains database configuration.
*/
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'login');

/* Try connecting to the database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check the connection
if(!$conn){
    dir('Error: Cannot connect');
}

 


?>