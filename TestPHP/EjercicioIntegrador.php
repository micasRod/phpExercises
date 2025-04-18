<?php


$string = "Lunes,Martes,Miercoles,Jueves,Viernes";
function inverseArray($string)
{
     $dias = explode(",", $string);
     print_r($dias);
}

inverseArray($string);



//$numeros = [4, 2, 8, 1];
//sort($numeros);  // si quiero hacer lo contrario rsort
//print_r($numeros);

//$edades = ["Ana" => 22, "Luis" => 35, "Pedro" => 29];
//asort($edades);  // Ordena por valor, mantiene las claves
//print_r($edades);

//$edades = ["Ana" => 22, "Luis" => 35, "Pedro" => 29];
//ksort($edades);  // Ordena por clave alfabéticamente
//print_r($edades);

//$personas = [
//    ["nombre" => "Ana", "edad" => 22],
//    ["nombre" => "Luis", "edad" => 35],
//    ["nombre" => "Pedro", "edad" => 29]
//];
//
//usort($personas, function ($a, $b) {
//    return $a['edad'] - $b['edad'];  // Ascendente por edad
//});
//
//print_r($personas);

?>