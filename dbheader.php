<?

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));  //default

/* DB header info */
// $DB['server'] = 'localhost';
// $DB['user'] = 'studentid';
// $DB['password'] = 'yyyymmdd';
// $DB['db'] = 'studentid';

$DB['server'] = 'localhost';
$DB['user'] = 'root';
$DB['password'] = 'usbw';
$DB['db'] = 'cats';

// connect to database
$link = mysqli_connect($DB["server"], $DB["user"], $DB["password"], $DB["db"])
                         or die ("Unable to connect to database");


?>