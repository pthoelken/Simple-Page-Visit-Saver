
$strServer      = "localhost";
$strUsername    = "forge";
$strPassword    = "forge";
$strDatabase    = "forge";
$strTable       = "tblLogging";

$strIP          = $_SERVER['REMOTE_ADDR'];
$strLink        = implode ('', file ("http://api.hostip.info/country.php?ip=$strIP"));
$strReff        = $_SERVER['HTTP_REFERER'];
$strHash        = hash('sha512', $strIP);


