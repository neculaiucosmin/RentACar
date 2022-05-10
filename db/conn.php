<?php
$link="localhost";
$username="root";
$pass="1234";
$db="RentACar";

$conn=new mysqli($link, $username, $pass,$db);
if ($conn->error)
    die("Conexiune esuata, incercati din nou".$conn->connect_error);