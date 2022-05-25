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
    <title>Cauta <?php echo $_SESSION['cauta']; ?></title>
</head>
<body class="bg-white w-full">
<div class="grid grid-flow-row">
    <div class="flex flex-row">
        <div class="flex w-full h-fit gap-1 my-14 p-5">
            <div class="flex flex-col gap-6 w-1/3 h-full border p-5">
                <form action="" method="get">
                    <label for="marca">Marca</label>
                    <select name="marca"
                            class="p-3 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-500 focus:outline-none filtru">
                        <option value="Audi">Audi</option>
                        <option value="BMW">BMW</option>
                        <option value="Dacia" selected>Dacia</option>
                        <option value="Renault">Renault</option>
                    </select>
                </form>
            </div>
            <div class="w-full h-full border p-5 h-full tab-panel">
                <div>

                </div>
            </div>
        </div>
</body>
</html>