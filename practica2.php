<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resultados</title>
</head>
<body>
    <?php
    // Verificar qué formulario fue enviado y realizar las operaciones correspondientes

    // 1. Números Pares
    if (isset($_POST['paresN'])) {
        $N = intval($_POST['paresN']);
        echo "<h1 align='center'> 1. Números Pares </h1>";
        echo "<hr width='80%' align='center'>";
        $vector = array();
        for ($i = 1; $i <= $N; $i++) {
            $vector[] = $i * 2;
        }
        echo "Vector: [" . implode(", ", $vector) . "]";
    }

    // 2. Serie Fibonacci
    if (isset($_POST['fibonacciN'])) {
        $N = intval($_POST['fibonacciN']);
        echo "<h1 align='center'> 2. Serie Fibonacci </h1>";
        echo "<hr width='80%' align='center'>";
        $a = 0;
        $b = 1;
        $fibonacci = array();
        for ($i = 0; $i < $N; $i++) {
            $fibonacci[] = $a;
            $c = $a + $b;
            $a = $b;
            $b = $c;
        }
        echo "Vector : [" . implode(", ", $fibonacci) . "]";
    }

    // 3. Patrón de 1s y 0s
    if (isset($_POST['patronN'])) {
        $N = intval($_POST['patronN']);
        echo "<h1 align='center'> 3. Patrón de 1s y 0s </h1>";
        echo "<hr width='80%' align='center'>";
        $vector = array();
        $count = 1;
        $totalElements = 0;
        while ($totalElements < $N) {
            for ($i = 0; $i < $count; $i++) {
                if ($totalElements < $N) {
                    $vector[] = 1;
                    $totalElements++;
                }
            }
            if ($totalElements < $N) {
                $vector[] = 0;
                $totalElements++;
            }
            $count++;
        }
        echo "Vector B: [" . implode(", ", $vector) . "]";
    }

    // 4. Invertir Vector con Números Aleatorios
    if (isset($_POST['aleatorioM'])) {
        $M = intval($_POST['aleatorioM']);
        echo "<h1 align='center'> 4. Invertir Vector con Números Aleatorios </h1>";
        echo "<hr width='80%' align='center'>";
        $R = array();
        for ($i = 0; $i < $M; $i++) {
            $R[] = rand(0, 100);
        }
        echo "Vector: [" . implode(", ", $R) . "]<br>";

        // Invertir el vector
        $inicio = 0;
        $fin = $M - 1;
        while ($inicio < $fin) {
            $temp = $R[$inicio];
            $R[$inicio] = $R[$fin];
            $R[$fin] = $temp;
            $inicio++;
            $fin--;
        }
        echo "Vector invertido: [" . implode(", ", $R) . "]";
    }
    ?>
</body>
</html>
