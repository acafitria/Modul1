<!DOCTYPE html>
<html>
    <head>
    </head>
        <body>
            <?php
                $c=37.841;
                $f = round((9/5) *$c +32, 4);
                $k = round($c+273.15, 4);
                $r = 4/5 * $c;

                echo " Fahrenheit (F) = $f </br>
                       Reamur (R) = $r </br>
                       Kelvin (K) = $k </br>";
            ?>
        </body>
</html>

