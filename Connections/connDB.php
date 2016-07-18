<?php require_once('../admin/config.php'); ?>
<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_connDB = $db_host;
$database_connDB = $db_database;
$username_connDB = $db_username;
$password_connDB = $db_password;
$connDB = ($GLOBALS["___mysqli_ston"] = mysqli_connect($hostname_connDB,  $username_connDB,  $password_connDB)) or trigger_error(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)),E_USER_ERROR); 
?>