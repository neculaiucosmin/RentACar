<?php
require_once "./db/conn.php";
session_start();
?>

<!doctype html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./dist/output.css">
    <title>Cont</title>
</head>
<body class="bg-black w-full flex justify-center">
<div class="flex flex-col bg-greyTransparent w-96 my-auto mt-24 justify-center items-center p-5">

    <div class="w-32 rounded-full overflow-hidden">
        <img src="./assets/images/Icons/face.svg" alt="Profile pic" height="50">
    </div>
    <div class="flex flex-col mt-5 text-center rounded">
        <div class="text-xl text-white">Email: <span class="ml-1"><?php echo $_SESSION['utilizator']?></span></div>
        <form action="cont.php" method="get" class="grid grid-cols-2 gap-3 w-full text-white my-3">
            <button class="border rounded-md ml-2 bg-red-600" name="logout">Logout</button>
            <button class="border rounded-md p-2  bg-red-600" name="sterge">Sterge cont</button>
        </form>
    </div>

</div>
</body>
</html>

<?php
$email=$_SESSION['utilizator'];
$stergeCont=$_GET['sterge'];
if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(isset($_GET['logout'])){
        header("locaion: ./UserAction/log-out.php");
    }
    else if(isset($stergeCont)){
        $sql="DELETE FROM user WHERE email='$email'";
        if (mysqli_query($conn,$sql) === TRUE) {
            echo "Contul a fost sters";
            session_destroy();
            header("Location: ./index.php");
        } else {
            echo "Error deleting record: " . mysqli_error();
        }

    }
}
?>


