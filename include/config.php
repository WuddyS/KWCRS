<?
$host = "127.0.0.1";
$user = "root";
$pass = "1234";
$dbname = "user_db";

$objConnect = mysql_connect($host,$user,$pass) or die("ไม่สามารถเชื่อมต่อฐานข้อมูลได้");
$objDB = mysql_select_db($dbname);

mysql_query("SET NAMES UTF8");

?>