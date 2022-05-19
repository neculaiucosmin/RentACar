<?php

class validator
{
    public static function validareParole($par)
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

    public static function validareForm($param)
    {

    }

}
