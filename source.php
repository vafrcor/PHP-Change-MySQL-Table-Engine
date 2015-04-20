<?php
// connect your database here first 
$db_host='your-database-host'; // e.g. localhost
$db_name='your-database-name';
$db_user='your-database-user';
$db_password='your-database-password';
$db_link=mysql_connect($db_host,$db_user,$db_password) OR die('Unable to connect to MySQL DB!');
$db_select=mysql_select_db($db_name,$db_link);
$old_db_engine='your-tables-old-engine'; // e.g. INNODB
$new_db_engine='your-tables-new-engine'; // e.g. MyISAM

// Actual code starts here 
$sql = "SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES
WHERE TABLE_SCHEMA = '{$db_name}' 
AND ENGINE = '{$old_db_engine}'";

$rs = mysql_query($sql);

while($row = mysql_fetch_array($rs))
{
	$tbl = $row[0];
	$sql = "ALTER TABLE `{$tbl}` ENGINE={$new_db_engine}";
	mysql_query($sql);
}
mysql_close($db_link);
?>