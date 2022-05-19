<?php session_start();
require_once "../db/conn.php";
//$email = trim($_POST['email']);
//$parola = trim($_POST['parola']);
//$confirmaParola = trim($_POST['confirmPass']);
include "../validator.php";

function insereazaUtilizator($e, $p, $cp)
{
    //e=email, p=parola, cp =confirma parola
    if (($p == $cp) && isset($e)) {
        $passHash = password_hash($p, PASSWORD_BCRYPT);
        $sql = "INSERT INTO `user`(`email`, `parola`) VALUES('$e', '$passHash')";
        mysqli_query(conexiune(), $sql);
        mysqli_close(conexiune());
        header("Location: ../index.php");
    } else
        echo "Parolele nu coincid";
}

?>

<!doctype html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="//unpkg.com/alpinejs" defer></script>
    <link rel="stylesheet" href="../dist/output.css">
    <link rel="stylesheet" href="../assets/css/input.css">
    <link rel="icon" href="../assets/images/Logo/Logo.svg">
    <title>Inregistreaza-te</title>
</head>
<body class="bg-black h-full w-full">
<nav class="flex flex-row justify-between w-fit p-5">
    <a href="../index.php">
        <img src="../assets/images/Logo/Logo.svg" alt="Home" width="150" height="100">
    </a>
</nav>
<div class="relative flex flex-col justify-center items-center cen mt-32 bg-greyTransparent w-96 rounded-lg">
    <div class="text-white text-4xl mt-10">Inregistreaza-te</div>
    <form method="post" action="register.php" class="flex flex-col mt-14 w-3/4">
        <label for="email" class="mb-1 text-white">Email</label>
        <input type="email" id="email" name="email" class=" rounded-sm h-10 p-2 bg-netflixGrey border-none mb-2 w-full"
               required>
        <label for="password" class="mb-1 text-white">Parola</label>
        <input type="password" name="parola" id="password"
               class=" rounded-sm h-10 p-2 bg-netflixGrey border-none mb-2 w-full" required>
        <label for="confirmPass" class="mb-1 text-white">Confirma parola</label>
        <input type="password" name="confirmPass" id="confirmPass"
               class=" rounded-sm h-10 p-2 bg-netflixGrey border-none mb-3 w-full" required>
        <button type="submit" name="trimite"
                class="bg-red-600 rounded-sm  h-10 mb-7 text-white text-xl font-bold w-full">
            Inregistreaza-te
        </button>
    </form>
    <div class="text-gray-600 mb-10 mt-5">Ai deja un cont? <a href="../UserActions/login.php"
                                                              class="decoration-0 text-white ml-1"> Conecteaza-te</a>
    </div>
    <?php

    $email = $parola = $confirmaParola = "";
    $email_err = $parola_err = $confirmaParola_err = "";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['trimite'])) {
            if (empty(trim($_POST['email'])))
                $eroare_email = "Va rugam introduceti o adresa de email";
            else
                $email = $_POST['email'];

            if (empty(trim($_POST['parola'])))
                $eroare_email = "Va rugam introduceti  parola";
            else
                $parola = $_POST['parola'];


            if (empty(trim($_POST['parola'])))
                $eroare_email = "Va rugam introduceti  parola";
            else
                $confirmaParola = $_POST['parola'];

            if (validator::validareParole($parola))
                insereazaUtilizator($email, $parola, $confirmaParola);
        }
    }
    ?>
</div>
</body>