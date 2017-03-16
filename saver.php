<?php
require "configuration.php";

// Create connection
$objConnection = new mysqli($strServer, $strUsername, $strPassword, $strDatabase);
// Check connection
if ($objConnection->connect_error) {
die("Connection failed! Cannot connect to database: " . $objConnection->connect_error);
}

$objQuery = "INSERT INTO '$strTable' (ip, coutry, reff, hash) VALUES ('$strIP', '$strLink', '$strReff', '$strHash')";

if ($objConnection->query($objQuery) === TRUE) {

} else {
// Is your own risk when your users see the save error message
echo "Error: " . $objQuery . "<br>" . $objConnection->error;

}

$objConnection->close();
?>
