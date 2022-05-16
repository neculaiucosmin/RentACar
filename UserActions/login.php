<?php session_start();
if (isset($_SESSION['conectat']) && $_SESSION['conectat'] === true) {
    header('Location: ../index.php');
    exit();
}

require_once "../db/conn.php";

$email = $parola = "";

$eroare_email = $eroare_parola = $eroare_conectare = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty(trim($_POST['email'])))
        $eroare_email = "Va rugam introduceti o adresa de email";
    else
        $email = $_POST['email'];

    if (empty(trim($_POST['parola'])))
        $eroare_email = "Va rugam introduceti  parola";
    else
        $parola = $_POST['parola'];

    if (empty($eroare_email) && empty($eroare_parola)) {
        $sql = "SELECT id, email, parola FROM user WHERE email=?";
        if ($stmt = mysqli_prepare($conn, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $parm_emal);
            $parm_emal = $email;

            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    mysqli_stmt_bind_result($stmt, $id, $email, $hash_pass);
                    if (mysqli_stmt_fetch($stmt)) {
                        if (password_verify($parola, $hash_pass)) {
                            session_start();
                            $_SESSION['conectat'] = true;
                            $_SESSION['utilizator'] = $email;
                            header("Location: ../index.php");
                        } else {
                            $eroare_conectare = " parola gresita";
                        }
                    }
                } else {
                    $eroare_conectare = "Email  gresit";
                }
            } else {
                echo '<div class=text-white>Ceva nu am mers bine,<br> incercati din nou</div>';
            }
            mysqli_stmt_close($stmt);
        }
        mysqli_close($conn);
    }
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
    <?php if (!empty($eroare_conectare))
        echo '<div class="text-white">' . $eroare_conectare . '</div>';
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"
          class="flex flex-col mt-14 w-3/4">
        <label for="email" class="mb-1 text-white">Email</label>
        <input type="email" id="email" name="email" class=" rounded-sm h-10 p-2 bg-netflixGrey border-none mb-2 w-full">
        <?php if (!empty($eroare_email))
            echo '<div class="text-white">' . $eroare_email . '</div>';
        ?>
        <label for="password" class="mb-1 text-white">Parola</label>
        <input type="password" name="parola" id="password"
               class=" rounded-sm h-10 p-2 bg-netflixGrey border-none mb-3 w-full">
        <?php if (!empty($eroare_parola))
            echo '<div class="text-white">' . $eroare_parola . '</div>';
        ?>
        <button type="submit" name="trimite"
                class="bg-red-600 rounded-sm  h-10 mb-7 text-white text-xl font-bold w-full">
            Conecteaza-te
        </button>
    </form>
    <div class="text-gray-600 mb-10 mt-5">Nu ai un cont? <a href="../UserActions/register.php"
                                                            class="decoration-0 text-white ml-1">Inregistreaza-te</a>
    </div>
</div>
</body>