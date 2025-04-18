<?php

$tipo= 'rueda de tractor';
$espesor = 0;
$rodado = -1;
$marca= 'cosechax';

if($rodado > 1.4 && $espesor > 0.35 && $rodado > 0){
    echo "<p>La rueda es para un vehiculo grande</p>";
}
elseif ($rodado > 1.4 && $espesor <= 0.35 && $rodado > 0) {
    echo "<p>La rueda es para un vehiculo mediano</p>";
}
elseif ( $rodado <=1.4 && $rodado >0) {
    echo "<p>La rueda es para un vehiculo pequenio</p>";
}
else{
    echo "<p>No es un tamanio de rueda valido</p>";
}

?>