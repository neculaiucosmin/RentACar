<?php
// npx tailwindcss -i ./assets/css/input.css -o ./dist/output.css --watch
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="./dist/output.css" rel="stylesheet">

    <link rel="icon" href="./assets/images/Logo/Logo.svg">
    <title>Rent A Car</title>
</head>
<body class="w-100 h-100 bg-black -z-20">
<?php
include "modules/header.php";

$caut = $err_caut = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['cauta']) && !empty($_POST['cauta'])) {
        $caut = trim($_POST['cauta']);
        $_SESSION['cauta'] = mb_strtolower($caut);
    } else
        $_SESSION['cauta'] = "dacia";
}
?>
<div class="relative text-white flex flex-col justify-center items-center w-full h-fit text-center gap-11">
    <h1 class="text-4xl font-semibold   ">Ai o multime de masini,<br>pret accesibil.</h1>
    <h2 class="text-xl font-normal">Inchiriaza oricand, de oriunde.</h2>
    <form method="post" action="cautare.php" class="mb-10">
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
<!---->

<div class="flex justify-center md:justify-around flex-col md:flex-row  md:p-10 sm:p-10 text-center md:text-left">
    <div class="text-white xs:pt-10 pt-24">
        <div class="text-4xl font-semibold text-white mb-10">Bucura-te de condus.</div>
        <div class="text-xl font-normal text-white  mb-0 md:mb-10">Poti alege o masina <br>pentru orice fel de drum,
            off-road,<br> autostrada, oras.
        </div>
    </div>
    <div class="p-20">
        <img src="./assets/images/Cars/electric/spring1.webp"
             class="xl:w-96 md:w-72 w-full hover:scale-110 ease-linear duration-200 rounded-sm" alt="Dacia Spring">
    </div>
</div>
<hr class="w-full h-2 bg-netflixGrey border-none relative">
<div class="flex justify-center md:justify-around flex-col md:flex-row-reverse  md:p-10 sm:p-10 text-center md:text-left">
    <div class="flex flex-col justify-center items-center text-white xs:pt-10 pt-24 ">
        <div class="text-4xl font-semibold text-white mb-10">Pret redus.</div>
        <div class="text-xl font-normal text-white  mb-0 md:mb-10">Gasesti masina potrivita pentru orice buget
        </div>
    </div>
    <div class="p-20">
        <img src="./assets/images/Icons/cheap.jpg"
             class="xl:w-96 md:w-72 w-full hover:scale-110 ease-linear duration-200 rounded-sm" alt="Dacia Spring">
    </div>
</div>
<hr class="w-full h-2 bg-netflixGrey border-none relative">

<div class="flex justify-center md:justify-around flex-col md:flex-row  md:p-10 sm:p-10 text-center md:text-left">
    <div class="text-white xs:pt-10 pt-24">
        <div class="text-4xl font-semibold text-white mb-10">Unde ai nevoie.</div>
        <div class="text-xl font-normal text-white  mb-0 md:mb-10">Iti poti inchiria o masina din peste <br>15 locatii,
            inclusiv Iasi, Bucuresti,<br> Timisoara
        </div>
    </div>
    <div class="p-20">
        <img src="./assets/images/Icons/locatii.jpg"
             class="xl:w-96 md:w-72 w-full hover:scale-110 ease-linear duration-200 rounded-sm" alt="Sping">
    </div>
</div>
<hr class="w-full h-2 bg-netflixGrey border-none relative">

<div class="flex justify-center md:justify-around flex-col md:flex-row-reverse  md:p-10 sm:p-10 text-center md:text-left">
    <div class="flex flex-col justify-center items-center text-white xs:pt-10 pt-24 ">
        <div class="text-4xl font-semibold text-white mb-10">Bucura-te de condus.</div>
        <div class="text-xl font-normal text-white  mb-0 md:mb-10">Poti alege o masina <br>pentru orice fel de drum,
            off-road,<br> autostrada, oras.
        </div>
    </div>
    <div class="p-20">
        <img src="./assets/images/Icons/cheap.jpg"
             class="xl:w-96 md:w-72 w-full hover:scale-110 ease-linear duration-200 rounded-sm" alt="Dacia Spring">
    </div>
</div>
<hr class="w-full h-2 bg-netflixGrey border-none relative">

<div class="flex flex-col justify-center items-center gap-2 my-10 text-white  w-full"
     x-data="acordeon">
    <div class="text-4xl font-semibold text-white mb-10">Intrebari frecvente</div>
    <div class="w-full flex flex-col justify-center items-center cursor-pointer">
        <div class="flex flex-row justify-between items-center px-3 w-full md:w-96 lg:w-2/3 h-14 bg-netflixGrey"
             @click="selected !== 1? selected=1 : selected=null">
            <div class="text-xl">Ce este RentACar?</div>
            <img src="./assets/images/Icons/add.svg" alt="show/hide" class="duration-75"
                 x-bind:class="selected ===1?'transform rotate-45':''">
        </div>
        <div class="px-3 w-full md:w-96 lg:w-2/3 max-h-0 bg-netflixGrey mt-1 overflow-hidden duration-300" x-ref="tab1"
             :style="selected ===1 ? 'max-height: ' +$refs.tab1.scrollHeight + 'px;':''">
            <p class="p-2 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa itaque minus
                nesciunt, rem sapiente veritatis?</p>
        </div>
    </div>

    <div class="w-full flex flex-col justify-center items-center cursor-pointer">
        <div class="flex flex-row justify-between items-center px-3 w-full md:w-96 lg:w-2/3 h-14 bg-netflixGrey"
             @click="selected !== 2? selected=2 : selected=null">
            <div class="text-xl">Ce este RentACar?</div>
            <img src="./assets/images/Icons/add.svg" alt="show/hide" class="duration-75"
                 x-bind:class="selected ===2?'transform rotate-45':''">
        </div>
        <div class="px-3 w-full md:w-96 lg:w-2/3 max-h-0 bg-netflixGrey mt-1 overflow-hidden duration-300" x-ref="tab2"
             :style="selected ===2 ? 'max-height: ' +$refs.tab2.scrollHeight + 'px;':''">
            <p class="p-2 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa itaque minus
                nesciunt, rem sapiente veritatis?</p>
        </div>
    </div>
    <div class="w-full flex flex-col justify-center items-center cursor-pointer">
        <div class="flex flex-row justify-between items-center px-3 w-full md:w-96 lg:w-2/3 h-14 bg-netflixGrey"
             @click="selected !== 3? selected=3 : selected=null">
            <div class="text-xl">Ce este RentACar?</div>
            <img src="./assets/images/Icons/add.svg" alt="show/hide" class="duration-75"
                 x-bind:class="selected ===3?'transform rotate-45':''">
        </div>
        <div class="px-3 w-full md:w-96 lg:w-2/3 max-h-0 bg-netflixGrey mt-1 overflow-hidden duration-300" x-ref="tab3"
             :style="selected ===3 ? 'max-height: ' +$refs.tab3.scrollHeight + 'px;':''">
            <p class="p-2 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa itaque minus
                nesciunt, rem sapiente veritatis?</p>
        </div>
    </div>
</div>
<script>
    function acordeon() {
        return {
            selected: null
        };
    }
</script>
<hr class="w-full h-2 bg-netflixGrey border-none relative">
<?php
include "modules/footer.php";
?>
</body>
</html>
