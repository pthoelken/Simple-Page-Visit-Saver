
$strServer      = "localhost";
$strUsername    = "root";
$strPassword    = "";
$strDatabase    = "dbIPLog";
$strTable       = "tblLogging";

$strIP          = $_SERVER['REMOTE_ADDR'];
$strLink        = implode ('', file ("http://api.hostip.info/country.php"));
$strReff        = $_SERVER['HTTP_REFERER'];
$strHash        = hash('sha512', $strIP);


