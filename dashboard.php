<?php
include "./modules/header.php";
require_once "./db/conn.php";
?>
<!doctype html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
<div class="flex w-full h-fit gap-1 my-14 p-5"
     x-data="{activeTab:0}">
    <div class="flex flex-col gap-6 w-1/3 h-full border p-5">
        <div class="text-xl text-netflixGrey cursor-pointer border p-3 tab-control" @click="activeTab=0"
             :class="{'active':activeTab===0}">Dasboard
        </div>
        <div class="text-xl text-netflixGrey cursor-pointer border p-3 tab-control" @click="activeTab=1"
             :class="{'active':activeTab===1}">Adaugare masini
        </div>
        <div class="text-xl text-netflixGrey cursor-pointer border p-3 tab-control" @click="activeTab=2"
             :class="{'active':activeTab===2}">Adaugare cont
        </div>
    </div>
    <div class="w-full h-full border p-5 h-full tab-panel">
        <div class="font-semibold text-netflixGrey border w-full p-5">Dashboard >>
            <template x-data="{txt: activeTab}">
                <span x-show=""></span>
            </template>
        </div>
        <div class="tab-panel" :class="{'active':activeTab===0}"
             x-show.transition.in.opacity.duration.600="activeTab===0">
            <div class="flex flex-row gap-5 mt-5">
                <div class="font-semibold text-netflixGrey border w-full p-5">Produse</div>
                <div class="font-semibold text-netflixGrey border w-full p-5">
                    <div class="flex flex-row text-lg"><?php
                        $sqlNrConturi = "SELECT * FROM user";

                        if ($rezultat = mysqli_query($conn, $sqlNrConturi)) {
                            $nrUtli = mysqli_num_rows($rezultat);
                        }
                        echo "Numar clienti: " . $nrUtli;
                        ?> </div>
                </div>
            </div>
            <div class="flex flex-row mt-5 gap-5">
                <div class="font-semibold text-netflixGrey border w-full p-5">
                    <div class="text-4xl">Mesaje</div>
                    <?php
                    function afisareMesaje()
                    {
                        $sqlMesaje = "SELECT prenume, nume, telefon, email, judet, varsta, mesaj FROM contact";
                        $interogare = mysqli_prepare($conn, $sqlMesaje);
                        mysqli_stmt_bind_param($interogare, 'ssissis', $param_nume, $param_prenume, $param_telefon, $param_email, $param_judet, $param_varsta, $param_mesaj);
                        mysqli_stmt_execute($interogare);
                        $rezultat = mysqli_store_result($interogare);
                        $cnt = 1;
                        if (mysqli_num_rows($rezultat) > 0) {
                            foreach ($rezultat as $rez) {
                                echo " 
<table>
  <tr>
    <th>Nume</th>
    <th>Prenume</th>
    <th>Telefon</th>
    <th>Email</th>
    <th>Judet</th>
    <th>Varsta</th>
    <th>Mesaj</th>
  </tr>
  <tr>
    <td>. echo $rezultat->prenume .</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
</table>
";

                                END;
                            }
                        }

                    }

                    ?>
                </div>
            </div>
        </div>
        <div class="tab-panel" :class="{'active':activeTab===1}"
             x-show.transition.in.opacity.duration.600="activeTab===1">
            <div class="flex flex-row mt-5 gap-5">
                <div class="font-semibold text-netflixGrey border w-full p-5">Mesaje</div>
                <div class="font-semibold text-netflixGrey border w-full p-5">Mesaje</div>
                <div class="font-semibold text-netflixGrey border w-full p-5">Mesaje</div>
            </div>
        </div>
        <div class="tab-panel" :class="{'active':activeTab===2}"
             x-show.transition.in.opacity.duration.600="activeTab===2">
            <div class="flex flex-row gap-5 mt-5">
                <div class="font-semibold text-netflixGrey border w-full p-5">Produse</div>
                <div class="font-semibold text-netflixGrey border w-full p-5">Utilizatori</div>
            </div>
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


