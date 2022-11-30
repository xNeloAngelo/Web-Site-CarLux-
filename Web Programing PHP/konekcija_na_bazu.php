<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.O Transitional//EN" "http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional.dtd">
<html wmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Untitled document</title>
</head>

<body>
<?php
$dbhost="localhost";
$dbname="dada";
$dbuser="root";
$dbpass="";

$a=mysqli_connect($dbhost,$dbuser,$dbpass) or die("ne mozete se konektovati");
mysqli_select_db($a,$dbname) or die("ne mozete selektovati navedenu bazu");
?>
</body>
</html>