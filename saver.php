<?php
$objConnection = new mysqli('<DATABASE_HOST>', '<DATABASE_USER>', '<DATABASE_PASSWORD>', '<DATABASE_NAME>');

$strTable       = 'tblLogging';

// Check your server if these $SERVER-variables are available
$strIP          = $_SERVER['REMOTE_ADDR'];
$strOrigin      = $_SERVER['HTTP_REFERER'];
$strCountry     = implode ('', file ("http://ip-api.com/csv/". $strIP . "?fields=countryCode"));
$strHash        = hash('sha512', $strIP);

$objQuery = "INSERT INTO $strTable (ip, country, origin, hash) VALUES ('$strIP', '$strCountry', '$strOrigin', '$strHash')";

if (!$objConnection) {
    die('Could not connect database: ' . mysqli_error());
}

if (mysqli_query($objConnection, $objQuery)) {
    // You don't should display any messages here. If you show the message on the user screen the user knows that you
    // save there privacy information.
} else {
    // Disable the error messages in these section. It's only for debugging.
    // If you don't disable, your users knows that you don't have a connection to your database server.
    // echo "Error: " . $objQuery . "<br>" . mysqli_error($objConnection);
}

mysqli_close($objConnection);
?>