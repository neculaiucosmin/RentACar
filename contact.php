<!doctype html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="./dist/output.css" rel="stylesheet">
    <title>Contact</title>
</head>
<body class="bg-black">
<?php
include "modules/header.php";
?>
<div class="bg-gray-800 h-fit p-5 my-5 p-3">
    <form action="contact.php" class="bg-white w-3/4 mx-auto my-16 p-5 rounded-sm">
        <div class="p-3">
            <h1 class="text-4xl text-netflixGrey">Contact</h1>
        </div>
        <fieldset>
            <div class="grid  grid-cols-2 gap-11 mt-5">
                <input class="p-3 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-500 focus:outline-none" type="text" name="prenume" id="prenume"
                       placeholder="Prenume">
                <input class="p-3 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-500 focus:outline-none" type="text" name="nume" id="nume"
                       placeholder="Nume">
            </div>
            <div class="grid  grid-cols-2 gap-11 mt-5">
                <input class="p-3 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-500 focus:outline-none" type="text" name="telefon" id="telefon"
                       placeholder="Telefon">
                <input class="p-3 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-500 focus:outline-none" type="email" name="email" id="email"
                       placeholder="Email">
            </div>
            <div class="grid  grid-cols-2 gap-11 mt-5">
                <input class="p-3 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-500 focus:outline-none" type="text" name="judet" id="judet"
                       placeholder="Judet">
                <input class="p-3 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-500 focus:outline-none" type="email" name="nume" id="nume"
                       placeholder="email">
            </div>
            <div class="mt-12">
                <textarea class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-500 focus:outline-none" name="mesaj" placeholder="Mesaj"></textarea>
            </div>
            <div class="ty-6">
                <button type="button" name="trimite" class="w-full my-6 bg-red-600 text-white p-3 rounded-md text-xl">TRIMITE</button>
            </div>

        </fieldset>
    </form>
</div>
<?php
include "modules/footer.php";
?>
</body>
</html>


