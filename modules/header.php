<?php
session_start();
?>
<head>
    <link href="./dist/output.css" rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://kit.fontawesome.com/8fb6d7c8f9.js" crossorigin="anonymous"></script>
</head>
<!doctype html>
<html lang="ro">

<nav class="flex justify-between bg-transparent px-5 py-3 scroll-my-3 p-10">
    <a href="../index.php" class="flex flex-col justify-center items-center">
        <img src="../assets/images/Logo/Logo.svg" alt="Acasa" width="100" height="150">
    </a>

    <?php
    if (isset($_SESSION['conectat']) && $_SESSION['conectat'] === true) {
        echo '
    <div class="relative" x-data="{toggle:false}">
        <div class="flex flex-row justify-between items-center gap-2 w-fit cursor-pointer" x-on:click="toggle= !toggle">
            <img src="../assets/images/Icons/face.svg" alt="profile" height="50" width="50">
            <div class="text-netflixGrey cursor-pointer"> ' . $_SESSION['utilizator'] . '</div>
        </div>
        <div class="absolute flex flex-col gap-2 mt-5 py-5 px-1 bg-netflixGrey rounded-sm w-full h-fit text-white"
        x-show="toggle">
            <a href="../cont.php" class="decoration-0 h-2 w-full h-full p-1 rounded-sm cursor-pointer z-10">Cont</a>
            <a href="../UserActions/log-out.php" class="decoration-0 h-2 w-full h-full p-1 rounded-sm cursor-pointer z-10">Deconecteaza-te</a>
        </div>
    </div>';
    } else {
        echo <<< END
            <a href="../UserActions/login.php" class="border-1 bg-red-600 p-3 rounded-sm">
        <h2 class="text-white font-bold">Conecteaza-te</h2>
    </a>
    END;
    }
    ?>
</nav>
