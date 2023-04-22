<?php
$lista = [
    "nombre"=>"Dylan",
    "apellido"=>"Kjolhede"
];
foreach ($lista as $key => $value) {
    echo "<li>".$key." : ".$value."</li>";
}