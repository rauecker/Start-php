<?php 

$peso = 90;
$altura = 1.75;
$imc = $peso / $altura ** 2;

echo "Seu IMC é de $imc. Você está com o IMC";

if($imc < 19){
	echo "abaixo";
}else if($imc < 25){
	echo "dentro";
}else{
	echo "acima";
}

echo " do recomendado";