<?php
$server = "localhost";
$user = "root";
$pwd = "";
$dbName="dark";
$conn = mysqli_connect($server,$user,$pwd,$dbName);
if(!$conn)
{
    die("Connection failure" .mysqli_connect_error());
}
else
{
   # echo "Connection established";
}
?>