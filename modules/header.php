<?php
session_start();
?>
<head>
    <link href="./dist/output.css" rel="stylesheet">
</head>
<!doctype html>
<html lang="ro">

<nav class="flex justify-between bg-transparent p-5 scroll-my-3 p-10">
    <a href="../index.php"><img src="../assets/images/Logo/Logo.svg" alt="Acasa" width="100" height="150"></a>

    <?php
    if (isset($_SESSION['conectat']) && $_SESSION['conectat'] === true) {
        echo '
    <div class="relative" x-data="toggle:false">
        <div class="flex flex-row justify-between items-center gap-2 w-fit">
            <img src="../assets/images/Icons/face.svg" alt="profile" height="50" width="50">
            <div class="text-netflixGrey cursor-pointer"> ' . $_SESSION['utilizator'] . '</div>
        </div>
        <div class="absolute flex flex-col gap-2 mt-5 py-5 px-1 bg-netflixGrey rounded-sm w-full h-fit text-white">
            <a href="../UserActions/log-out.php" class="decoration-0 h-2 w-full h-full p-1 rounded-sm cursor-pointer z-10">Cont</a>
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
