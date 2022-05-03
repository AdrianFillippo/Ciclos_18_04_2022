<?php
$_DATA = (object) json_decode(file_get_contents("php://input"));
    if($_DATA->opcion == "iniciarCiclo"){
        for ($i=$_DATA->inicio; $i < $_DATA->final; $i+=$_DATA->avance) { 
            echo "ciclo #$i Incremento <br>";
        }
    }else if($_DATA->opcion == "iniciarCiclo2"){
        for ($i=$_DATA->final; $i > $_DATA->inicio; $i-=$_DATA->avance) { 
            echo "ciclo #$i Decremento <br>";
        }
    }
    
      
?>