<?
$host = "127.0.0.1";
$user = "root";
$pass = "1234";
$dbname = "user_db";
$tblname = "member_tbl";

$objConnect = mysql_connect($host,$user,$pass);
$objDB = mysql_select_db($dbname);

mysql_query("SET NAMES UTF8");

?>