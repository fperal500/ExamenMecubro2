<?php 

$filaDeNumerosAComparar = [3, 1 , 9, 5, 22, 12 , -12];
$numeroX = 13;


foreach ($filaDeNumerosAComparar as $array) {
	$primerNumero = $array;
	foreach ($filaDeNumerosAComparar as $segundoNumero) {
		if ($primerNumero + $segundoNumero == $numeroX) {
			echo $primerNumero . " + " . $segundoNumero . " = " . $numeroX . "<br>";
		}
	}
}
?>