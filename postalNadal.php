<!--
*Iván Vilar Diaz
*08/10/2019
*EXERCICIO:Exercicios básicos con Strings, Datas, Condicionais e BuclesTarefa
*VERSION:1.1.1-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Postal</title>
</head>

<body>
    <?php




    function dibujarFila($columnas, $numeroElementosApintar)
    {
        $centro = round($columnas / 2)+1;

        $posicionInicial = $centro - (round($numeroElementosApintar / 2));
        $posicionFinal = $posicionInicial + $numeroElementosApintar - 1;

        $contador = 0;

        for ($i = 0; $i < $columnas; $i++) {

            if ($i >= $posicionInicial && $i <= $posicionFinal) {
                echo '*';
                $contador++;
            } else {
                echo "&nbsp;&nbsp;";
            }
        }
        echo '</br>';
    }




    function dibujarRamas()
    {
        $filas = 11;
        $columnas = 21;

        $numeroElementosPintar = 1;
        for ($i = 0; $i < $filas; $i++) {

            if ($i > 0) {
                $numeroElementosPintar += 2;
            }


            dibujarFila($columnas, $numeroElementosPintar);
        }
    }

    function dibujarTronco()
    {
        $filas = 2;
        $columnas = 21;
        $numeroElementosApintar = 5;
        for ($i = 0; $i < 2; $i++) {
            dibujarFila($columnas, $numeroElementosApintar);
        }
    }

    function dibujarAbol()
    {
        dibujarRamas();
        dibujarTronco();
    }

    dibujarAbol();








    ?>
</body>

</html>