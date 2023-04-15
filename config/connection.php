<?php

$host="localhost";
$user="root";
$password=null;
$database="rutu";



$conn = new mysqli($host,$user,$password,$database);

if($conn->connect_error)
{
	die("connection failed:" . $conn->connect_error);
}	
//echo "connected successfully";






?>