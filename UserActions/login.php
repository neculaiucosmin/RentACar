<?php  session_start(); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="//unpkg.com/alpinejs" defer></script>
    <link href="../dist/output.css" rel="stylesheet">

    <link rel="icon" href="../assets/images/Logo/Logo.svg">
    <title>Inregistreaza-te</title>
</head>
<body class="bg-black h-full w-full">
<nav class="flex flex-row justify-between w-fit p-5">
    <a href="../index.php">
        <img src="../assets/images/Logo/Logo.svg" alt="Home" width="150" height="100">
    </a>
</nav>
<div class="relative flex flex-col justify-center items-center cen bg-netflixGrey w-96 p-10 m-2">
    <div class="text-white text-4xl">Inregistreaza-te</div>
    <form method="post" class="flex flex-col mt-14 w-3/4">
        <label for="email" class="mb-1">Email</label>
        <input type="email" id="email" class="h-10 p-2 bg-netflixGrey border-none mb-2">
        <label for="password" class="mb-1">Parola</label>
        <input type="password" id="password" class="h-10 p-2 bg-netflixGrey border-none mb-5">
        <button type="submit" class="bg-red-600 h-10 text-white text-xl">Inregistreaza-te</button>
    </form>
</div>

</body>