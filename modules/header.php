
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
    if (isset($_SESSION['conectat']) && $_SESSION['conectat'] === true){
    echo '
    <div class="flex flex-row justify-between items-center gap-2 w-fit">
        <img src="../assets/images/Icons/face.svg" alt="profile" height="50" width="50">
        <div class="text-white"> '.$_SESSION['utilizator'].'</div>
    </div>';
    }else{
        echo <<< END
            <a href="../UserActions/login.php" class="border-1 bg-red-600 p-3 rounded-sm">
        <h2 class="text-white font-bold">Conecteaza-te</h2>
    </a>
    END;

    }
    ?>

</nav>
