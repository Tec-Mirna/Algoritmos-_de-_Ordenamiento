<?php
    
    echo "<h1>Algoritmos de ordenamiento</h1>";
echo "<h3>Bubble Sort </h3>";
function bubbleSort($array){
    $n = count($array); //obtner longitud del array

    for($i = 0; $i < $n -1; $i++){ // itera sobre el array y se ejecuta $n -1 veces
        for($j = 0; $j < $n - 1; $j++){ // se ejecuta n-1 veces
            if($array[$j] < $array[$j + 1]){ // comprobar si el elemento es menor que el siguiente(verdadero=los intercambia )
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    } return $array; // devuelve el array ordenado
}
//lista a ordenar
$numbers = array(15, 30, -4, 2, 9, 20, 29, 30, -40);

echo "Lista original: "; //imprime los numeros en el orden original
foreach ($numbers as $number){
    echo $number . ", " ;
} echo "<br>";

$lista_ordenada = bubbleSort($numbers);

echo "<br>"; //itera la lista ordenada para mostrar
echo "Lista ordenada de manera descendente implementando el algoritmo bubble sort: " ;
foreach ($lista_ordenada as $number){
    echo $number . ", ";
}


echo "<h3>Merge Sort </h3>";
function merge_sort($array){
    $length = count($array); //obtener la longitud
    
    // Si el array solo tiene un elemento simplemente lo muestras
    if($length <= 1){
        return $array;
    }
    // Calcula la mitad del array
    $mitad_array = (int) ($length / 2);
    //se divide el array en dos(izquierda a derecha)
    $left = array_slice($array, 0, $mitad_array);
    $right = array_slice($array, $mitad_array);

    //llamar a la funcion merge_sort en izquierda y derecha
    return merge(merge_sort($left), merge_sort($right));
}

function merge($left, $right){
    $result = []; //inicializar un array

    // significa= mmientras haya elementos en ambas partes(izquierda o derecha) si una de las mitades(numero impar) está vacía, dejamos de comparar
    while (count($left) > 0 && count($right) > 0){// compara los primeros elementos de cada mitad

        $result[] = ($left[0] < $right[0]) ? array_shift($left) : array_shift($right);
    }
    //Añade cualquier elemento restante de las mitades al resultado
    return array_merge($result, $left, $right);
}
//palabras para ordenar
$lista_palabras = array ('blue', 'green', 'black', 'pink', 'purple', 'orange', 'yellow');

echo "Lista antes de implementar Merge Sort: <br> " . implode("<br> ", $lista_palabras) . "<br>" . "<br>";

// llamar merge_sort para ordenar la lista de palabras proporcionadas
$sortedWord = merge_sort($lista_palabras);

echo "Lista ordenada implementando Merge Sort: <br>". implode("<br>", $sortedWord);



echo "<h3>Insertion Sort </h3>";

function insertionSort($array) {
    $length = count($array);
    
    // Recorremos la lista 
    for ($i = 1; $i < $length; $i++) {
        // Seleccionar elemento actual para compararlo
        $actual = $array[$i];
        $j = $i - 1;
        
        // Se desplazamos el elemento mayor que el elemento actual hacia la derecha
        while ($j >= 0 && $array[$j] > $actual) {
            $array[$j + 1] = $array[$j];
            $j--;
        }
        
        // Colocar el elemento actual en su posición correcta
        $array[$j + 1] = $actual;
    }
    
    return $array;
}

// Lista de nombres para ordenar
$name = array("Fernando", "Mirna", "Eduardo", "Rudy", "Edgar", "Daniel");

// Mostramos la lista original
echo "Lista original sin implementar el algoritmo insertion Sort: <br>" . implode("<br> ", $name) . "<br>" ."<br>";

// Ordenamos la lista utilizando Insertion Sort
$sortedNames = insertionSort($name);

// Mostramos la lista ordenada
echo "Lista ordenada implementando el algoritmo Insertion Sort para ordenar alfabéticamente: <br>" . implode("<br> ", $sortedNames);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algoritmos de ordenamiento</title>
    <style>
        body{
            margin: 3em;
        }
    </style>
</head>
<body>
</body>
</html>