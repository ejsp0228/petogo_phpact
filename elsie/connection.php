<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "login/out";

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname))
{
	die("failed to connect!");
}