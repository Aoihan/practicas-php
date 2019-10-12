<?php
/*
Autor:Ivan Vilar Diaz
fecha:24/09/2019
*/
//Ejercicio 1
define('AUTOR', 'Ivan Vilar Diaz');
echo "<p> Autor:" . AUTOR . "</p>";

//Ejercicio 2
define('TITULO', '<h1 style="background-color:green; color: blue"> Miua Miua </h1>');
echo  TITULO;

//Ejercicio 3
$texto = 'https://www.vidaextra.com';
$variable1 = '<a href="%s">Dalle aquí que xa veras que guai</a>';
printf($variable1, $texto);
echo '</br>';


$texto2 = 'https://www.vidaextra.com';
$title = 'Dalle aquí que xa veras que guai';
$variable2 = '<a target="_blank" href="%s" title="%s"> Enlace </a>';
printf($variable2, $texto2, $title);

//Ejercicio 4
$numero1 = 7;
$numero2 = 43;
$numero3 = 1.5;
echo '</br>';

echo 'La suma de dos numero enteros y este dividido por un real es: ' . number_format((($numero1 + $numero2) / 2) / $numero3), 2;

?>

<?php
$numTabla1 = 115;
$numTabla2 = 255;
$numTabla3 = 318;
?>

<table border="solid" >
	<tr>
		<td> </td>
		<td>Numero1 </td>
		<td>Numero2 </td>
		<td>Numero3</td>
	</tr>
	<?php echo '
			<tr>
			<td>Decimal </td>
			<td>' . $numTabla1 . ' </td>
			<td> ' . $numTabla2 . ' </td>
			<td> ' . $numTabla3 . '</td>
		</tr>'

	?>

	<?php
	echo '
		<tr>
			<td>Binario </td>
			<td>' . sprintf("%b", $numTabla1) . '</td>
			<td>' . sprintf("%b", $numTabla2) . ' </td>
			<td>' . sprintf("%b", $numTabla3) . '</td>
		</tr>'

	?>

	<?php
	echo '
												<tr>
			<td>Hexadecimal </td>
			<td>' . sprintf("%x", $numTabla1) . ' </td>
			<td>' . sprintf("%x", $numTabla2) . ' </td>
			<td>' . sprintf("%x", $numTabla3) . '</td>
		</tr> '
	?>



</table>
</br>

<?php
$color1=' bgcolor="red"';
$color2=' bgcolor="yellow"';
?>



<table border="solid" >
	
	<?php
	echo '
	<tr'.$color1.'>
		<td  > </td>
		<td>Numero1 </td>
		<td>Numero2 </td>
		<td>Numero3</td>
	</tr>'

	?>


	<?php echo '
			<tr'.$color2.'>
			<td>Decimal </td>
			<td>' . $numTabla1 . ' </td>
			<td> ' . $numTabla2 . ' </td>
			<td> ' . $numTabla3 . '</td>
		</tr>'

	?>

	<?php
	echo '
		<tr'.$color1.'>
			<td>Binario </td>
			<td>' . sprintf("%b", $numTabla1) . '</td>
			<td>' . sprintf("%b", $numTabla2) . ' </td>
			<td>' . sprintf("%b", $numTabla3) . '</td>
		</tr>'

	?>

	<?php
	echo '
		<tr '.$color2.'>
												
			<td>Hexadecimal </td>
			<td>' . sprintf("%x", $numTabla1) . ' </td>
			<td>' . sprintf("%x", $numTabla2) . ' </td>
			<td>' . sprintf("%x", $numTabla3) . '</td>
		</tr> '
	?>




</table>
</br>



<?php
$dinero=431*0.21+431;

function prezo()
{
global $dinero;
return $dinero;
}

echo 'El precio con iva es ' .number_format(prezo(),2);

?>

<h3>H3 </h3>
<h4>H4 </h4>







