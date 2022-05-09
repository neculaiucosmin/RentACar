<?php
// npx tailwindcss -i ./assets/css/input.css -o ./dist/output.css --watch
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
<body class="w-100 h-100 bg-black -z-20">
<?php
include "modules/header.php";
?>
<div class="relative -z-10 text-white flex flex-col justify-center items-center w-full h-fit text-center gap-11">
    <h1 class="text-4xl font-semibold   ">Ai o multime de masini,<br>pret accesibil.</h1>
    <h2 class="text-xl font-normal">Inchiriaza oricand, de oriunde.</h2>
    <form method="post" class="mb-10">
        <label for="cauta">Pregatit de cautare? Introdu numele marcii pe care o doriti.</label><br>
        <div class="grid md:grid-flow-col sm:grid-flow-row z-10">
            <input type="text" id="cauta" name="cauta"
                   class="h-14 mt-5 p-3 text-black md:rounded-tl-sm md:rounded-br-none  md:rounded-tr-none sm:rounded-br-sm sm:rounded-tl-sm sm:rounded-bl-sm sm:rounded-tr-sm sm:rounded-br-sm"
                   maxlength="35"
                   placeholder="Dacia">
            <button type="submit"
                    class="text-center h-14 mt-5 cursor-pointer flex justify-center items-center space-x-4  bg-red-600 md:rounded-tr-sm md:rounded-br-sm hover:bg-red-500">
                <p class="cursor-pointer">CAUTA</p>
                <img src="./assets/images/Icons/right-arrow.svg" width="20" height="20" alt="Submit"></button>
        </div>
    </form>
    <hr class="w-full h-2 bg-netflixGrey border-none relative">
</div>
<div class="flex md:justify-around sm:justify-center md:flex-row sm:flex-col md:p-10 sm:p-10 sm:text-center">
    <div class="text-white pt-24">
        <div class="text-4xl font-semibold text-white mb-10">Bucura-te de condus.</div>
        <div class="text-xl font-normal text-white  mb-10">Poti alege o masina <br>pentru orice fel de drum,
            off-road,<br> autostrada, oras.
        </div>
    </div>
    <div class="p-20">
        <img src="./assets/images/Cars/electric/spring1.webp"
             class="xl:w-96 md:w-72 sm:w-full hover:scale-110 ease-linear duration-200 rounded-sm" alt="Sping">
    </div>
</div>
<hr class="w-full h-2 bg-netflixGrey border-none relative">


<div class="flex md:justify-around sm:justify-center md:flex-row-reverse sm:flex-col-reverse md:p-10 sm:p-10 sm:text-center">
    <div class="text-white pt-24">
        <div class="text-4xl font-semibold text-white mb-10">Bucura-te de condus.</div>
        <div class="text-xl font-normal text-white  mb-10">Poti alege o masina <br>pentru orice fel de drum,
            off-road,<br> autostrada, oras.
        </div>
    </div>
    <div class="p-20 ">
        <img src="./assets/images/Cars/electric/spring1.webp"
             class="lg:w-96 md:w-72 sm:w-full hover:scale-110 ease-linear duration-200  rounded-sm" alt="Sping">
    </div>
</div>
<hr class="w-full h-2 bg-netflixGrey border-none relative">


<div class="flex md:justify-around sm:justify-center md:flex-row sm:flex-col md:p-10 sm:p-10 sm:text-center">
    <div class="text-white pt-24">
        <div class="text-4xl font-semibold text-white mb-10">Bucura-te de condus.</div>
        <div class="text-xl font-normal text-white  mb-10">Poti alege o masina <br>pentru orice fel de drum,
            off-road,<br> autostrada, oras.
        </div>
    </div>
    <div class="p-20">
        <img src="./assets/images/Cars/electric/spring1.webp"
             class="xl:w-96 md:w-72 sm:w-full hover:scale-110 ease-linear duration-200 rounded-sm" alt="Sping">
    </div>
</div>
<hr class="w-full h-2 bg-netflixGrey border-none relative">


<div class="flex md:justify-around sm:justify-center md:flex-row-reverse sm:flex-col-reverse md:p-10 sm:p-10 sm:text-center">
    <div class="text-white pt-24">
        <div class="text-4xl font-semibold text-white mb-10">Bucura-te de condus.</div>
        <div class="text-xl font-normal text-white  mb-10">Poti alege o masina <br>pentru orice fel de drum,
            off-road,<br> autostrada, oras.
        </div>
    </div>
    <div class="p-20 ">
        <img src="./assets/images/Cars/electric/spring1.webp"
             class="lg:w-96 md:w-72 sm:w-full hover:scale-110 ease-linear duration-200  rounded-sm" alt="Sping">
    </div>
</div>
<hr class="w-full h-2 bg-netflixGrey border-none relative">

<?php
include "modules/footer.php";
?>
</body>
</html>
