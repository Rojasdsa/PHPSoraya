<?php

/* Escribe un programa que muestre por pantalla 10 palabras en inglés 
junto a su correspondiente traducción al castellano. 

Las palabras deben estar distribuidas en dos columnas. 

Utiliza etiqueta &lt;tabla&gt; de HTML.*/

$palabras = ["aceituna"=>"olive","loco"=>"crazy", "cabeza"=>"head", "coche"=>"car", "navaja"=>"knife", "pelo"=>"hair", "nabo"=>"turnip", "mano"=>"hand", "reir"=>"laugh", "sexo"=>"sex"];
?>

<html>
    <table border=1>
        <tr>
            <?php   
            foreach ($palabras as $key => $value){
                echo "<td>$key</td>" . "<td>$value</td></tr>";
            }
            ?>
        </tr>
    </table>
</html>
