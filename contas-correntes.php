<?php 

$conta1 = ["titular" => "Victor", "saldo" => 2000];
$conta2 = ["titular" => "Diego", "saldo" => 1000];
$conta3 = ["titular" => "Raul", "saldo" => 500];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i< count($contasCorrentes); $i++){

	echo $contasCorrentes[$i]["titular"] . "\n";
}

foreach ($contasCorrentes as $conta) {
	echo $conta["saldo"] . "\n";
}