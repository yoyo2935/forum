<?php
session_start();
$host="localhost";
$db_user="root";
$db_pass="123";
$db_name="bbs";
$timezone="Asia/Shanghai";
date_default_timezone_set("Etc/GMT+8");
$link=mysql_connect($host,$db_user,$db_pass);
mysql_select_db($db_name,$link);
mysql_query("SET names UTF8");

header("Content-Type: text/html; charset=utf-8");
?>
