################# connection to the database ###
$mysql_host             = "localhost";
$mysql_user             = "";
$mysql_password         = "";
$mysql_dbname           = "";
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_dbname);

# mysqli charset
mysqli_set_charset($conn, 'utf8');
