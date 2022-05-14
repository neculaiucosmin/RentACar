<?php session_start();
require_once "../db/conn.php";
$email = trim($_POST['email']);
$parola = trim($_POST['parola']);
$confirmaParola = trim($_POST['confirmPass']);
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
<body class="bg-white h-full w-full">
<nav class="flex flex-row justify-between w-fit p-5">
    <a href="../index.php">
        <img src="../assets/images/Logo/Logo.svg" alt="Home" width="150" height="100">
    </a>
</nav>
<div class="relative flex flex-col justify-center items-center cen bg-greyTransparent w-96 rounded-lg">
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
                                                              class="decoration-0 text-white ml-1"> Inregistreaza-te</a>
    </div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['trimite'])) {

        if (($parola == $confirmaParola)&& isset($email)) {
            $passHash=password_hash($parola, PASSWORD_BCRYPT);
            $sql = "INSERT INTO `user`(`email`, `parola`) VALUES('$email', '$passHash')";
            mysqli_query($conn, $sql);
            header("Location: ../index.php");
            echo "Inregistrare reusita";
            mysqli_close($conn);
        } else
            echo "Parolele nu coincid";
    }
}
?>
</div>
</body>