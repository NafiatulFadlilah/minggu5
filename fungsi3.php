<!DOCTYPE HTML>
<html>
    <head>
    </head>
    <body>
        <h2> Fungsi Menghitung Luas Lingkaran </h2>
        <?php
            echo "Luas Lingkaran dengan jari-jari 7 cm = ".luas_lingakaran(7)." cm";

            function luas_lingakaran($jari2){
                return 3.14 * $jari2 * $jari2;
            }
        ?>
    </body>
</html>