<?php session_start();
$email = trim(['email']);
$parola = trim(['password']);
if (isset($email) && isset($parola))
    echo "next";
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
    <title>Conecteaza-te</title>
</head>
<body class="bg-black h-full w-full">
<nav class="flex flex-row justify-between w-fit p-5">
    <a href="../index.php">
        <img src="../assets/images/Logo/Logo.svg" alt="Home" width="150" height="100">
    </a>
</nav>
<div class="relative flex flex-col justify-center items-center cen bg-greyTransparent w-96 mt-32 rounded-lg">
    <div class="text-white text-4xl mt-10">Conecteaza-te</div>
    <form method="post" class="flex flex-col mt-14 w-3/4">
        <label for="email" class="mb-1 text-white">Email</label>
        <input type="email" name="email" class=" rounded-sm h-10 p-2 bg-netflixGrey border-none mb-2 w-full">
        <label for="password" class="mb-1 text-white">Parola</label>
        <input type="password" name="password" id="password"
               class=" rounded-sm h-10 p-2 bg-netflixGrey border-none mb-3 w-full">
        <button type="submit" class="bg-red-600 rounded-sm  h-10 mb-7 text-white text-xl font-bold w-full">
            Conecteaza-te
        </button>
    </form>
    <div class="text-gray-600 mb-10 mt-5">Nu ai un cont?   <a href="../UserActions/register.php" class="decoration-0 text-white ml-1">Conecteaza-te</a>
    </div>

</div>
</body>