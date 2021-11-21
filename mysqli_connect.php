<?php
error_reporting(0);
define('DB_USER', 'id17904227_root');
define('DB_PASSWORD', '\r9cK\kw]DoKWurM');
define('DB_HOST', 'localhost');
define('DB_NAME', 'id17904227_bbs');

$conn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die('Could not connect to the database'.mysqli_connect_error());
mysqli_set_charset($conn, 'utf8');
?>