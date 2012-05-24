<?php //connection.php
require('constants.php');

$connection= new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME) or die('error');

?>