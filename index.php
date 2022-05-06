<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="//unpkg.com/alpinejs" defer></script>
    <link href="../dist/output.css" rel="stylesheet">

    <link rel="icon" href="./assets/images/Logo/Logo.svg">
    <title>Rent A Car</title>
</head>
<body class="w-100 h-100 bg-black relative">
<?php
include "modules/header.php";
?>
<div class="absolute -z-10 text-white flex flex-col justify-center items-center w-full text-center gap-11">
    <h1 class="text-4xl font-semibold   ">Ai o multime de masini,<br>pret accesibil</h1>
    <h2 class="text-xl font-normal">Inchiriaza oricand, de oriunde</h2>
    <form action="" method="post">
        <label for="cauta">Pregatit de cautare? Introdu numele marcii pe care o doriti.</label><br>
        <div class="grid md:grid-flow-col sm:grid-flow-row">
            <input type="text" id="cauta" class="h-10 mt-5 pr-1 text-black" placeholder="Dacia">
            <button type="submit" class="border-dashed text-center h-10 mt-5 flex justify-center items-center space-x-4  bg-red-600"><p>CAUTA</p>
                <img src="./assets/images/Icons/right-arrow.svg" width="20" height="20"  alt="Submit"></button>
        </div>
    </form>
</div>

</body>
</html>
