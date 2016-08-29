<?php

$host="localhost";
$username="root";
$password="";
$dbname="registration";


$conn=mysqli_connect($host,$username,$password,$dbname);

if(!$conn){

	echo "I think you have an error";
}



?>