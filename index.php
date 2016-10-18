<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo 'Hello....PHP BASIC 2';
        $cars = array("Volvo", "BMW", "Toyota");
        $arrlength = count($cars);
        for ($x = 0; $x < $arrlength; $x++) {
            echo $cars[$x];
            echo "<hr>";
        }

        echo 'invite Danapon';

        $colors = array("red", "green", "blue", "yellow");

        foreach ($colors as $value) {
            echo "$value <br>";
        }

        $cars1 = array
            (
            array("Volvo", 22, 18),
            array("BMW", 15, 13),
            array("Saab", 5, 2),
            array("Land Rover", 17, 15)
        );
        for ($row = 0; $row < 4; $row++) {
            echo "<p><b>Row number $row</b></p>";
            echo "<ul>";
            for ($col = 0; $col < 3; $col++) {
                echo "<li>" . $cars1[$row][$col] . "</li>";
            }
            echo "</ul>";
        }
        ?>
    </body>
</html>
