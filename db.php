<?php
// Establishing a connection to MariaDB
$con = mysqli_init();
if (!$con) {
    die("mysqli_init failed");
}

// Set the authentication method
mysqli_options($con, MYSQLI_INIT_COMMAND, 'SET default_authentication_plugin=mysql_native_password');

// Connect to the database
/*if (!mysqli_real_connect($con, "localhost", "root", "", "hotel")) {
    die("Connection failed: " . mysqli_connect_error());
} */


// Connection successful
echo "Connected successfully";
?>
