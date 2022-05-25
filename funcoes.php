<?php 

function mostra($mensagem){

	echo "$mensagem" . "\n";
}

function saca(array $conta, float $valorASacar): array{

	if ($valorASacar > $conta["saldo"]){
		mostra("Saldo insuficiente para está operação.");
	} else {

	$conta["saldo"] -= $valorASacar;
	}

	return $conta;
}

function deposita(array $conta, float $valorADepositar): array{

	if($valorADepositar < 0){
		mostra("Inserir um valor positivo");
	} else {
		$conta["saldo"] += $valorADepositar;
	}

	return $conta;
}

function maiuscula(array &$conta){

	$conta["titular"] = strtoupper($conta["titular"]);
}



