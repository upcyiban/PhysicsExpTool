<?php
$con = mysql_connect("138.128.212.138","phpstudy","123456");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}

// some code
mysql_select_db("phpstudy", $con);