<?php 
require_once ("templates/mostrarHtml.php");
function table($filas, $columnas){    
    echo "<table>";        
    /* for ($i=1; $i <=($filas); $i++) {
        echo "<tr>";
        for ($j=1; $j<=$columnas ; $j++) {                
            echo "<td>";
            echo ($i*$j);
            echo "</td>";            
        }
        echo "</tr>";
    } */
    echo "</table>";
    echo pie();    
}
    