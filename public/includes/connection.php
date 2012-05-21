<?php //connection.php
require('constants.php');
// 1 Create a database connection
$connection = mysql_connect(DB_SERVER, DB_USER, DB_PASS);
if(!$connection)
{
	die("Connection failed" .mysql_error());
}

// 2 Select a dabatase
$db_select = mysql_select_db(DB_NAME);
if(!$db_select)
{
	die("Failed to select a database". mysql_error());
}
?>