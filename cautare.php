<?php
session_start();
include "modules/header.php";

?>
<!doctype html>
<html lang=ro>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cauta <?php echo $_SESSION['cauta'];?></title>
</head>
<body class="bg-white w-full">
<div class="grid grid-flow-row">
    <?php include "./modules/baraCautare.php"?>
    <div class="flex flex-col">text</div>
</div>
</body>
</html>