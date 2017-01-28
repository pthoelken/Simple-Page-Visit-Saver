<?php
require "configuration.php";

// Create connection
$objConnection = new mysqli($strServer, $strUsername, $strPassword, $strPassword);
// Check connection
if ($objConnection->connect_error) {
die("Connection failed, cannot connecto to database: " . $objConnection->connect_error);
}

$strInsertQuery = "INSERT INTO '$strTable' (ip, from, reff, hash) VALUES ('$strIP', '$strLink', '$strreff', '$strHash')";

if ($objConnection->query($strInsertQuery) === TRUE) {

} else {
// Is your own risk when your users see the save error message
echo "Error: " . $strInsertQuery . "<br>" . $objConnection->error;

}

$objConnection->close();
?>
