<?php

function conexiune()
{
    $link = "localhost";
    $username = "root";
    $pass = "";
    $db = "pw";
    $conn = mysqli_connect($link, $username, $pass, $db);
    if ($conn->error)
        die("Conexiune esuata, incercati din nou" . $conn->connect_error);
    else return $conn;
}
