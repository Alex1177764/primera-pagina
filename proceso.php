<?php 

$numero_1 = $_POST['numero_1'];
$numero_2 = $_POST['numero_2'];
$operacion = $_POST['operacion'];

if ($operacion == 'suma') {
    $resultado = $numero_1 + $numero_2;
}
if ($operacion == 'resta') {
    $resultado = $numero_1 - $numero_2;
}
if ($operacion == 'multiplicacion') {
    $resultado = $numero_1 * $numero_2;
}
if ($operacion == 'division') {
    $resultado = $numero_1 / $numero_2;
}
print "La ".$operacion. " de ". number_format($numero_1). " & ". 
number_format($numero_2). " es igual a: ". number_format($resultado);


?>