<?php
include "./modules/header.php";
?>

<!doctype html>
<html lang=ro>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Preturi</title>
</head>
<body class="bg-white">
<div class="flex flex-col justify-center text-text-color text-center font-Raleway">
    <h1 class=" font-semibold text-5xl">Preturi</h1>
    <h3 class="text-xl mt-3">Va puteti schimba pachetul si dupa cumparare</h3>
</div>
<div class="flex flex-col md:flex-row justify-center gap-2 flex-wrap">
    <div class="flex flex-col md:flex-row justify-center md:justify-start border-none md:border my-10 mx-10 lg:mx-auto md:my-24 font-Raleway w-96">
        <div class="flex flex-col border ">
            <div class="cursor-pointer drop-shadow-md md:drop-shadow-xl px-5 py-10  w-full">
                <div class="flex flex-row justify-between items-center">
                    <div class="text-2xl font-semibold">Standard</div>
                    <i class="fa-solid fa-car"></i>
                </div>
                <div class="text-center text-4xl font-semibold my-5">
                    $35.00
                </div>
                <div class="text-left text-p-color font-normal my-3">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid aperiam
                    aspernatur corporis dolorem, eos modi mollitia odit perferendis quia quisquam repellat sequi
                    voluptas
                    voluptatum.
                </div>
                <ul class="flex flex-col gap-3 mt-3">
                    <li class="flex flex-row items-center gap-1 text-lg font-semibold ">
                        <div class="w-1 h-1 rounded-full bg-greyTransparent"></div>
                        <p>Inchiriezi o masina pentru 3 zile.</p></li>
                    <li class="flex flex-row items-center gap-1 text-lg font-semibold ">
                        <div class="w-1 h-1 rounded-full bg-greyTransparent"></div>
                        <p>Poti preda masina in orice sediu din tara.
                        </p>
                    </li>
                    <li class="flex flex-row items-center gap-1 text-lg font-semibold ">
                        <div class="w-1 h-1 rounded-full bg-greyTransparent"></div>
                        <p>Lorem ipsum dolor.</p>
                    </li>
                </ul>
            </div>
            <button class=" relative bg-greyTransparent mt-10 h-16 w-full font-semibold text-lg ">Inchiriaza</button>
        </div>
    </div>

    <div class="flex flex-col md:flex-row justify-center md:justify-start border-none md:border my-10 mx-10 lg:mx-auto md:my-24 font-Raleway w-96">
        <div class="flex flex-col border relative  bottom-auto md:bottom-0 lg:bottom-16">
            <div class="cursor-pointer drop-shadow-md md:drop-shadow-xl px-5 py-10  w-full">
                <div class="flex flex-row justify-between items-center">
                    <div class="text-2xl font-semibold">Comfort</div>
                    <i class="fa-solid fa-jet-fighter-up"></i>
                </div>
                <div class="text-center text-4xl font-semibold my-5">
                    $55.00
                </div>
                <div class="text-left text-p-color font-normal my-3">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid aperiam
                    aspernatur corporis dolorem, eos modi mollitia odit perferendis quia quisquam repellat sequi
                    voluptas
                    voluptatum.
                </div>
                <ul class="flex flex-col gap-3 mt-3">
                    <li class="flex flex-row items-center gap-1 text-lg font-semibold ">
                        <div class="w-1 h-1 rounded-full bg-greyTransparent"></div>
                        <p>Inchiriezi o masina pentru 3 zile.</p></li>
                    <li class="flex flex-row items-center gap-1 text-lg font-semibold ">
                        <div class="w-1 h-1 rounded-full bg-greyTransparent"></div>
                        <p>Poti preda masina in orice sediu din tara.
                        </p>
                    </li>
                    <li class="flex flex-row items-center gap-1 text-lg font-semibold ">
                        <div class="w-1 h-1 rounded-full bg-greyTransparent"></div>
                        <p>Lorem ipsum dolor.</p>
                    </li>
                </ul>
            </div>
            <button class=" relative bg-red-600 mt-10 h-16 w-full font-semibold text-lg text-white">Inchiriaza</button>
        </div>
    </div>
    <div class="flex flex-col md:flex-row justify-center md:justify-start border-none md:border my-10 mx-10 lg:mx-auto md:my-24 font-Raleway w-96">
        <div class="flex flex-col border ">
            <div class="cursor-pointer drop-shadow-md md:drop-shadow-xl px-5 py-10  w-full">
                <div class="flex flex-row justify-between items-center">
                    <div class="text-2xl font-semibold">Ultra</div>
                    <i class="fa-solid fa-rocket"></i>
                </div>
                <div class="text-center text-4xl font-semibold my-5">
                    $99.00
                </div>
                <div class="text-left text-p-color font-normal my-3">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquid aperiam
                    aspernatur corporis dolorem, eos modi mollitia odit perferendis quia quisquam repellat sequi
                    voluptas
                    voluptatum.
                </div>
                <ul class="flex flex-col gap-3 mt-3">
                    <li class="flex flex-row items-center gap-1 text-lg font-semibold ">
                        <div class="w-1 h-1 rounded-full bg-greyTransparent"></div>
                        <p>Inchiriezi o masina pentru 3 zile.</p></li>
                    <li class="flex flex-row items-center gap-1 text-lg font-semibold ">
                        <div class="w-1 h-1 rounded-full bg-greyTransparent"></div>
                        <p>Poti preda masina in orice sediu din tara.
                        </p>
                    </li>
                    <li class="flex flex-row items-center gap-1 text-lg font-semibold ">
                        <div class="w-1 h-1 rounded-full bg-greyTransparent"></div>
                        <p>Lorem ipsum dolor.</p>
                    </li>
                </ul>
            </div>
            <button class=" relative bg-greyTransparent mt-10 h-16 w-full font-semibold text-lg ">Inchiriaza</button>
        </div>
    </div>
</div>



<div class="bg-greyTransparent">
    <?php
    include "./modules/footer.php";
    ?>
</div>
</body>
</html>



