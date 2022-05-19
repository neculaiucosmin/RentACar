<!doctype html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="./dist/output.css" rel="stylesheet">
    <link rel="icon" href="./assets/images/Logo/Logo.svg">
    <title>Contact</title>
</head>
<body class="bg-black">
<?php
include "modules/header.php";
include "./db/conn.php";
require_once "validator.php";
$nume = $prenume = $email = $telefon = $judet = $varsta = $mesaj = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    if (isset($_GET['trimite'])) {

        $nume = /*filter_input(INPUT_POST, */
            $_GET['nume'];
        $prenume = /*filter_input(INPUT_POST, */
            $_GET['prenume'];
        $telefon = /*filter_input(INPUT_POST, */
            $_GET['telefon'];
        $email = /*filter_input(INPUT_POST, */
            $_GET['email'];
        $judet = /*filter_input(INPUT_POST, */
            $_GET['judet'];
        $varsta = /*filter_input(INPUT_POST, */
            $_GET['varsta'];
        $mesaj = /*filter_input(INPUT_POST, */
            $_GET['mesaj'];
            validator::TrimiteMesaj(conexiune(),$nume,$prenume,$telefon,$email,$judet,$varsta,$mesaj);
    }
}


?>
<div class="bg-gray-800 h-fit py-5 px-2 my-5">
    <form action="contact.php" method="get"
          class="bg-white  w-full md:w-3/4 lg:w-1/3 mx-auto my-16 py-5 px-2 md:px-5 rounded-sm">
        <div class="p-3">
            <h1 class="text-4xl text-netflixGrey">Contact</h1>
        </div>
        <fieldset>
            <div class="grid  grid-cols-2 gap-11 mt-5">
                <input class="p-3 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-500 focus:outline-none filtru"
                       type="text" name="prenume" id="prenume"
                       placeholder="Prenume" required>
                <input class="p-3 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-500 focus:outline-none filtru"
                       type="text" name="nume" id="nume"
                       placeholder="Nume" required>
            </div>
            <div class="grid  grid-cols-2 gap-11 mt-5">
                <input class="p-3 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-500 focus:outline-none filtru"
                       type="text" name="telefon" id="telefon"
                       placeholder="Telefon" required>
                <input class="p-3 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-500 focus:outline-none filtru"
                       type="email" name="email" id="email"
                       placeholder="Email" required>
            </div>
            <div class="grid  grid-cols-2 gap-11 mt-5">
                <select name="judet"
                        class="p-3 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-500 focus:outline-none filtru">
                    <option value="" selected>Judet</option>
                    <option value="Alba">Alba</option>
                    <option value="Arad">Arad</option>
                    <option value="Prahova">Prahova</option>
                    <option value="Bucuresti">Bucuresti</option>
                </select>
                <input class="p-3 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-500 focus:outline-none filtru"
                       type="number" name="varsta" id="varsta" max="100"
                       placeholder="Varsta" required>
            </div>
            <div class="mt-12">
                <textarea
                        class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-500 focus:outline-none filtru"
                        name="mesaj" placeholder="Mesaj"></textarea>
            </div>
            <div class="ty-6">
                <button type="submit" name="trimite" class="w-full my-6 bg-red-600 text-white p-3 rounded-md text-xl">
                    TRIMITE
                </button>
            </div>

        </fieldset>
    </form>
</div>
<?php
include "modules/footer.php";
?>
</body>
</html>


