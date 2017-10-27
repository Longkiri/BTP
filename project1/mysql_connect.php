<?php

define('DB_NAME', 'Students_database');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

//connect to mysql
$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if(!$link){
	die ('Could not connect:' . mysql_error());
}

//selecting database
$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected) {
	die('Cant use' .DB_NAME. ':'. mysql_error());
}

echo "Connected Successfully";
?>
