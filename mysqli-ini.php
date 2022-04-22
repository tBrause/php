################# connection to the database ###
$mysql_host             = "localhost";
$mysql_user             = "root";
$mysql_password         = "secret";
$mysql_dbname           = "filmwebsite";
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_dbname);

# mysqli charset
mysqli_set_charset($conn, 'utf8');
