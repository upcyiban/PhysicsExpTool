<?php
include"conn.php";
date_default_timezone_set('PRC');
echo  $t= date('Y-m-d H:i:s');
$content="";
$content = $_POST["content"];
$sql = "INSERT INTO root (content,time) VALUES ('$content','Date:$t')";
echo $sql;

if (!mysql_query($sql, $con)) {
    die('Error: ' . mysql_error());
}

mysql_close($con);
header("Location:index.php");