<?php
session_start();
$token	= isset($_SESSION['__TOKEN__']) ? $_SESSION['__TOKEN__'] : false;
if (empty($token))		// 未获取授权
{
    header("Location: authorize.php");
}