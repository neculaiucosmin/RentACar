<?php
$host="localhost";
$user="root";
$pass="1234";
$db="RentACar";
try {
$conn= mysqli_connect($host, $user, $pass,$db);
}
catch (mysqli_sql_exception $e){
    echo $e;
}

