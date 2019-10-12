<!--
*Iván Vilar Diaz
*08/10/2019
*EXERCICIO:Exercicios básicos con Strings, Datas, Condicionais e BuclesTarefa
*VERSION:1.1.1-->
<html>

<head>
</head>

<body>

	<!--Exercicio1-->
	<?php
	$refraneiro = "VALAR MORGHULIS"; //Cadea coa frase principal
	$refraneiro2 = "valar morghulis";
	echo strtolower($refraneiro); //Cadea en minusculas (strtupper) para maisculas
	echo '</br>';

	echo ucwords($refraneiro2); //Primeira letra de cada palabra en Maiscula
	echo '</br>';

	echo str_replace("A", "Á", $refraneiro); //Reemplaza las A por Á
	echo '</br>';

	echo $valar = substr($refraneiro2, 0, -10); //numero letras valar
	echo '<br/>';

	echo 'El numero de letras de Valar es: ' . strlen($valar);
	echo '<br/>';

	echo $morghulis = substr($refraneiro2, 6, 15); //numero de letras morghulis
	echo '<br/>';

	echo 'El numero de letras de Morghulis es: ' . strlen($morghulis);
	echo '<br/>';

	echo str_replace("morghulis", "dohaeris", $refraneiro2); //cambio de morghulis a dohaeris
	echo '<br/>';

	echo 'El numero de palabras que contiene VALAR MORGHULIS es: ' . str_word_count($refraneiro); //Numero de palabras
	echo '</br>'
	?>

	<!--Exercicio2-->

	<?php
	setlocale(LC_TIME, "es_ES"); //establezco la hora local
	date_default_timezone_set('Europe/Madrid');
	$data = date('d-m-Y'); // Funcion para saber la fecha de hoy
	echo 'A data de hoxe e: ' . $data;
	echo '</br>';

	$data2 = date("l,F,Y");
	echo $data2;
	echo '</br>';

	$datetime1 = new datetime("2019-02-02"); //tiempo de referencia
	$datetime2 = new datetime("now"); //tiempo actual

	$interval = date_diff($datetime1, $datetime2); //diferencia entre las datas.
	echo $interval->format('%R%a Numero de dias transcurridos desde el 2 de febrero');

	echo '</br>';

	$conseguirdia = getdate();
	$claves = array_keys($conseguirdia);
	echo 'Estamos en el dia Nº: ' . $conseguirdia[$claves[7]]; // Calcula que nº de día dos 365 do ano é
	echo '</br>';

	?>

	<!--Exercicio3-->
	<?php
	$numeroRandom = rand(1, 100);//Numero Random Entre 1 y 100
	echo $numeroRandom;

	if ($numeroRandom < 50) { //Si el numero es menor de 50
		echo "<p style='font-size:14px'> Epa, é menor! </p>";
	} elseif ($numeroRandom > 50) { //Si el numero es mayor de 50
		echo "<p style='font-size:20px'> Opa, é maior! </p>";
	} else {
		echo "<p style='font-size:30px'> Menuda puntería!!! </p>";
	}
	echo '</br>';

	?>

	<?php
	$numeroRandom2 = rand(1, 100); //Numero Random Entre 1 y 100
	echo $numeroRandom2;

	switch ($numeroRandom2) {
		case $numeroRandom2 > 0 && $numeroRandom2 < 21:
			echo "<p style='font-size:14px'> Catorce Pixeles!!! </p>";
			break;

		case $numeroRandom2 > 21 && $numeroRandom2 < 41:
			echo "<p style='font-size:16px'> Dieciseis Pixeles!!! </p>";
			break;

		case $numeroRandom2 > 41 && $numeroRandom2 < 61:
			echo "<p style='font-size:18px'> Dieciocho Pixeles!!! </p>";
			break;

		case $numeroRandom2 > 61 && $numeroRandom2 < 81:
			echo "<p style='font-size:20px'> Veinte Pixeles!!! </p>";
			break;

		case $numeroRandom2 > 81 && $numeroRandom2 < 101:
			echo "<p style='font-size:22px'> Veintidos Pixeles!!! </p>";
			break;

		default:
			echo "<p style='font-size:40px'> Algo Saiu Tremendamente Mal!!! </p>";
			break;
	}
	echo '</br>'

	?>
		<!--Exercicio4-->
		
		<?php

		$numero = rand(1, 10);
		echo 'Numero Aleatorio entre 1 y 10 para multiplicar hasta 21: ' . $numero;
		echo '</br>';

		for ($i = 1; $i <= 21; $i++) {
			//$numero*$i;
			//echo ' '.$i ;
			$numero2 = $numero * $i;
			echo $numero.'*'.$i.'='.$numero2.' ';
		}

		?>

</body>

</html>