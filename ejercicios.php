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
?>
