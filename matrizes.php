<html>
    <head>
        <meta charset="UTF-8">
        <title>Provamt</title>
    </head>
    <body>
        <?php
$matrizA = array
    (
    array(1,2,3),
    array(4,5,6)
);
$matrizB = array
    (
    array(3,2,1),
    array(6,5,4)
  
);
function GeraTabela($matrizA) {
    $numeroLinhas = count($matrizA);
    $numeroColunas = count($matrizA[0]);
    echo "<table border=1>
                   <table border=1>";
    for ($i = 0; $i < $numeroLinhas; $i++) {
        echo "</tr>";
        echo "<tr>";
        for ($j = 0; $j < $numeroColunas; $j++) {
            echo "<td> ". $matrizA[$i][$j] . "</td>";
        }
    }
    
    echo "<br>";
}
function SomaMatrizes($matrizA, $matrizB) {
    $copia = $matrizA;
    $numeroLinhas = count($matrizB);
    $numeroColunas = count($matrizB[0]);
    for ($i = 0; $i < $numeroLinhas; $i++) {
       for ($j = 0; $j < $numeroColunas; $j++) {
           $copia[$i][$j] = $matrizA[$i][$j] + $matrizB[$i][$j];
       }
        }
         return $copia;
    }
    
  
$va = SomaMatrizes($matrizA, $matrizB);
GeraTabela($va);