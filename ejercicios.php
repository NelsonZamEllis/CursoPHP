<?php
$arreglo = [

	'keyStr1' => 'lado',
	0 => 'ledo',

	'keyStr2' => 'lido',
	1 => 'lodo',
	2 => 'ludo'

];
echo $arreglo['keyStr1'] . ', ' . $arreglo[0] . ', ' . $arreglo['keyStr2'] . ', ' . $arreglo[1] . ', ' . $arreglo[2] . '<br>';
echo 'decirlo al revés lo dudo.<br>';
echo $arreglo[2] . ', ' . $arreglo[1] . ', ' . $arreglo['keyStr2'] . ', ' . $arreglo[0] . ', ' . $arreglo['keyStr1'] . '<br>';
echo '¡Qué trabajo me ha costado!<br><br>';

$paises = [
    'Peru' => ['Lima', 'Arequipa', 'Puno'],
    'EEUU' => ['California', 'San Francisco', 'Washington'],
    'Argentina' => ['Buenos Aires', 'Cordoba', 'La Plata'],
    'Brasil' => ['Sao Paulo', 'Brasilia', 'Rio de Janeiro'],
    'Chile' => ['Antofagasta', 'Santiago', 'Valparaiso']
];
foreach ($paises as $llave => $valor){
    echo "<strong>$llave:</strong>";
foreach ($paises[$llave] as $valor){
    echo "$valor, ";
}
    echo "<br>";
}

  //Ciclo do while
       /*  $idx = 0;
          do{
          echo  '<li class="work-position">';
          echo '<h5>'.$jobs[$idx] ['title'].'</h5>';
          echo '<p>' .$jobs[$idx] ['description'].'</p>';
          echo '<strong>Achievements:</strong>';
          echo '<ul>';
          echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
          echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
          echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
          echo '</ul>';
        echo '</li>';
          
            
               $idx = $idx +1;

            }while($idx < 3); */


            Ejercicio 1.
Escribe el código necesario para generar la cadena final usando el arreglo dado

$arreglo = [

	‘keyStr1’ => ‘lado’,
	0 => ‘ledo’,

	‘keyStr2’ => ‘lido’,
	1 => ‘lodo’,
	2 => ‘ludo’

];

Lado, ledo, lido, lodo, ludo,
decirlo al revés lo dudo.
Ludo, lodo, lido, ledo, lado,
¡Qué trabajo me ha costado!

Ejercicio 2.
Crea un arreglo que contenga como clave los nombres de 5 países y como valor otro arreglo con 3 ciudades que pertenezcan a ese país, después utiliza un ciclo foreach, para imprimir el nombre del país seguido de las ciudades que definiste:

Ejemplo,

México: Monterrey Querétaro Guadalajara
Colombia: Bogota Cartagena Medellin

Ejercicio 3.
Escribe el código necesario para encontrar los 3 números más grandes y los 3 números más bajos de la siguiente lista:

$valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61]

/** EJERCICIO 1 */

$arreglo = [
    'keyStr1' => 'lado',
    0 => 'ledo',

    'keyStr2' => 'lido',
    1 => 'lodo',
    2 => 'ludo'
];

foreach($arreglo as $key => $value){
    echo $arreglo[$key] . ", ";
}

echo "<br />";
echo 'decirlo al revés lo dudo.';

$arregloRev = array_reverse($arreglo);

foreach($arregloRev as $key => $value){
    echo $arregloRev[$key] . ", ";
}

echo "<br />";
echo "¡Qué trabajo me ha costado!";

/** EJERCICIO 2 */

$paises = [
    'Venezuela' => ['Caracas', 'Valencia', 'Maracaibo'],
    'Colombia' => ['Cali', 'Bogotá', 'Barracas'],
    'Mexico' => ['DF', 'Monterrey', 'Xaputzale'],
    'EEUU' => ['Los angeles', 'New York', 'Broklyn'],
    'España' => ['Madrid', 'Valencia', 'Tenerife']
];

//No sé si todas la ciudades corresponden a los paises xD

foreach($paises as $pais => $ciudades){
    echo $pais . ": ";
    for($i = 0; $i < count($ciudades); $i++){
        echo $ciudades[$i] . " ";
    }
    echo "<br />";
}

/** EJERCICIO 3 */

$valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];
sort($valores);

echo "Los 3 números más bajos son: ";
for($i = 0; $i < 3; $i++){
    echo $valores[$i] . " - ";
}
echo "<br />";

$valoresRev = array_reverse($valores);

echo "Los 3 números más grandes son: ";
for($i = 0; $i < 3; $i++){
    echo $valoresRev[$i] . " - ";
}

Ejercicio 1.
Calcula el resultado de 32+3 y 3(2+3). Escribe el procedimiento que empleaste en la sección de discusiones.

Ejercicio 2.
Tomando en cuenta que tenemos una variable llamada $valor, escribe en la sección de discusiones ¿Cómo sería un condicional para las siguientes opciones?

$valor es mayor que 5 pero menor que 10
$valor es mayor o igual a 0 pero menor o igual a 20
$valor es igual a “10” asegurando que el tipo de dato sea cadena
$valor es mayor a 0 pero menor a 5 o es mayor a 10 pero menor a 15

	/////Ejercicio 1////////
	echo "Resultado de 32+3: ". (32+3) . "<br>";
	echo "Resultado de 3(2+3): ". 3*(2+3) . "<br>";
	/////Ejercicio 2////////
	$valor > 5 && $valor<10
	$valor >= 0 && $valor <= 20
	$valor === 10
	($valor > 0 && $valor < 5) || ($valor > 10 $valor < 15)

?>
