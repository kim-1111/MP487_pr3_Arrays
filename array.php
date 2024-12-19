<?php
$datos = array('nombre' => "Sara", 'apellido' => "Martínez", 'edad' => 23, 'ciudad' => "Barcelona");

$num = 1;

echo "<h2>Ejercicio 1</h2>";
foreach ($datos as $valor) {
    echo "dato " . $num . "º:" . $valor. "<br>";
    $num++;
}


echo "<h2>Ejercicio 2</h2>";
foreach ($datos as $key => $valor) {
    echo "$key: $valor <br>";
}

echo "<h2>Ejercicio 3</h2>";
$datos['edad']=24;
$num = 1;
foreach ($datos as $valor) {
    echo "dato " . $num . "º:" . $valor. "<br>";
    $num++;
}

echo "<h2>Ejercicio 4</h2>";
 unset($datos['ciudad']);
var_dump($datos);

echo "<h2>Ejercicio 5</h2>";
$letters = "a,b,c,d,e,f";
$letra = explode("," , $letters);

$n = 6;
for ($i = count($letra); $i > 0; $i--) {
    echo "letra " . $n . "º:" . $letra[$i-1] . "<br>";
    $n--;
}

echo "<h2>Ejercicio 6</h2>";
$notas = array('Miguel' => 5, 'Luís' => 7, 'Marta' => 10, 'Isabel' => 8, 'Aitor' => 4, 'Pepe' => 1);
arsort($notas);

echo "Nota de los estudiantes: ";

foreach ($notas as $key => $valor) {
    echo $key . ": " . $valor . " ";
}


echo "<h2>Ejercicio 7</h2>";

$sumatotal=0;

foreach($notas as $key => $valor){
    $sumatotal += $valor;
}

$media = $sumatotal / count($notas);

echo "Media de las notas: " . round($media,2) . "<br>";

echo "Alumnos con nota por  encima de la media: <br>";

foreach($notas as $key => $valor){
    if($valor >= $media){
        echo $key . "<br>";
    }

}

echo "<h2>Ejercicio 8</h2>";
$notaMasAllta = max($notas);

foreach($notas as $key => $valor){
    if($valor == max($notas)){
        echo "La nota más alta es " . $valor . "y el mejor alumno es " . $key;
    }

}
