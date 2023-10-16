<?php

/* Escribe un programa que muestre tu horario de clase 
mediante una tabla. Puedes combinar html y PHP.*/

$horarios = ["8:30-9:25", "9:25-10:20", "10:20-11:15", "11:45-12:40", "12:40-13:35", "13:35-14:30"];
$dias = ["XXXXX", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes"];
$asignaturas = ["Servidor", "HLC", "Empresa", "Cliente", "Despliegue", "Interfaces"];

// Interfaces = 3 horas
// Servidor = 2 horas
// HLC = 1 hora

// Cliente = 1 ó 2 ó 3 horas

// Empresa = 1 ó 2 horas
// Despliegue = 1 ó 2 horas
?>

<html>
    <table border=1>
        <tr>
            <?php   
            foreach ($dias as $dia){
                echo "<td>$dia</td>";
                foreach ($horarios as $intervalo){
                    echo "<td>$horario</td>";
                }
            }
            ?>
        </tr>
    </table>
</html>

