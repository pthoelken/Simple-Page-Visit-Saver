<?php
$objConnection = new mysqli('localhost', 'root', '', 'dbiplog');

$strTable       = 'tblLogging';

$strIP          = $_SERVER['REMOTE_ADDR'];
$strCountry     = implode ('', file ("http://ip-api.com/php/". $strIP . "?fields=countryCode"));
// NOT WORK ATM $strOrigin      = $_SERVER['HTTP_REFERER'];
$strOrigin      = "UC";
$strHash        = hash('sha512', $strIP);

$objQuery = "INSERT INTO $strTable (ip, country, origin, hash) VALUES ('$strIP', '$strCountry', '$strOrigin', '$strHash')";

if (!$objConnection) {
    die('Could not connect: ' . mysqli_error());
}


if (mysqli_query($objConnection, $objQuery)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $objQuery . "<br>" . mysqli_error($objConnection);
}

mysqli_close($objConnection);
?>