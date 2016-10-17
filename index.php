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
        ?>
    </body>
</html>
