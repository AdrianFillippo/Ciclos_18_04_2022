<?php
   $_DATA = (object) json_decode(file_get_contents("php://input"));
   $lista = (array) [
       "miguel",
       "nombre" => (string) "Juan",
       "Jose",
       "Andres",
       "Lista" => (array) ["Carlos"]
   ];
   foreach ($lista as $key => $value) {
       echo("Llave");
       print_r($key);
       echo ",<br>";
       echo("Valor");
       print_r($value);
       echo ",<br>";
   }
   //for ($i=0; $i < count($lista); $i++) { 
       //if(array_key_exists($i, $lista)){
           //print_r($lista[$i]);
       //}
   //}
      
?>