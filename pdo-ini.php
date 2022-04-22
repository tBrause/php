<?php
################# connection to the database ###

define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', 'secret');
define('DBNAME', 'filmwebsite');
define('DBSYTEM', 'mysql');
define('DBPORT', '3306');
define('DBDSN', DBSYTEM . ':dbname=' . DBNAME . ';host:' . DBHOST . ';port=' . DBPORT);

# Datenbank Klasse
$pdo = new PDO(DBDSN, DBUSER, DBPASS);
