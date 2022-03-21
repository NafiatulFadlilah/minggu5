<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <h2> Multidimensional Array </h2>
        <table>
            <tr>
                <th>Judul Film</th>
                <th>Tahun</th>
                <th>Rating</th>
            </tr>
            <?php
                $movie = array(
                                array("Avengers: Invinity War", 2018, 8.7),
                                array("The Avengers", 2012, 8.1), 
                                array("Guardians pf the Galaxy", 2014, 8.1), 
                                array("Iron Man", 2008, 7.9)
                                );

                for($i = 0; $i < 4; $i++){ //modifikasi perulangan
                    echo "<tr>";
                    for($j = 0; $j < 3; $j++){
                        echo "<td>". $movie[$i][$j] ."</td>";
                    }
                    echo "</tr>";
                }

                /*echo "<tr>"; //kode program asli
                        echo "<td>". $movie[0][0] ."</td>";
                        echo "<td>". $movie[0][1] ."</td>";
                        echo "<td>". $movie[0][2] ."</td>";
                echo "</tr>";
                echo "<tr>";
                        echo "<td>". $movie[1][0] ."</td>";
                        echo "<td>". $movie[1][1] ."</td>";
                        echo "<td>". $movie[1][2] ."</td>";
                echo "</tr>";
                echo "<tr>";
                        echo "<td>". $movie[2][0] ."</td>";
                        echo "<td>". $movie[2][1] ."</td>";
                        echo "<td>". $movie[2][2] ."</td>";
                echo "</tr>";
                echo "<tr>";
                        echo "<td>". $movie[3][0] ."</td>";
                        echo "<td>". $movie[3][1] ."</td>";
                        echo "<td>". $movie[3][2] ."</td>";
                echo "</tr>";*/
            ?>
        </table>
    </body> 
</html>