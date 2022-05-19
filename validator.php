<?php

class validator
{
    public static function validareParole($par): bool
    {
        $regex = "/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/";
        if (!empty($par)) {
            if (strlen($par) >= 8) {
                if (preg_match($regex, $par)) {
                    return true;
                }
                echo "<p class='text-white'>Parola trebuie sa contina cel putin 8 caractere,<br>un numar, o litera mare si un carcater special.</p>";
            }
            echo "<p class='text-white'>Parola trebuie sa contina cel putin 8 caractere,<br>un numar, o litera mare si un carcater special.</p>";
        }
        echo "<p class='text-white'>Parola trebuie sa contina cel putin 8 caractere,<br>un numar, o litera mare si un carcater special.</p>";
        return false;
    }

    public static function TrimiteMesaj($conn,$num, $pren, $tel, $em, $jud, $varst, $msg): void
    {
        $sql = "INSERT INTO `contact` (`prenume`, `nume`, `telefon`, `email`, `judet`, `varsta`, `mesaj`) 
VALUES (?,?,?,?,?,?,?)";

        if ($stmt = mysqli_prepare($conn, $sql)) {
            mysqli_stmt_bind_param($stmt, 'ssissis', $param_nume, $param_prenume, $param_telefon, $param_email, $param_judet, $param_varsta, $param_mesaj);
            $param_nume = $num;
            $param_prenume = $pren;
            $param_telefon = $tel;
            $param_email = $em;
            $param_judet = $jud;
            $param_varsta = $varst;
            $param_mesaj = $msg;
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
            } else echo "Ceva nu a mers bine, va rugam incercati mai tarziu";
        }
    }
}
