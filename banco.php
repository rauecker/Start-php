<?php 

require_once "funcoes.php";

$contasCorrentes = [
	"123.456.789-10" => ["titular" => "Victor", "saldo" => 2000],
	"123.486.789-10" => ["titular" => "Diego", "saldo" => 1000],
	"123.496.789-10" => ["titular" => "Raul", "saldo" => 500]
];

$contasCorrentes["123.456.789-10"] = saca($contasCorrentes["123.456.789-10"], 500);

$contasCorrentes["123.496.789-10"] = saca($contasCorrentes["123.496.789-10"], 1000);

$contasCorrentes["123.496.789-10"] = deposita($contasCorrentes["123.496.789-10"],100);

maiuscula($contasCorrentes["123.456.789-10"]);
maiuscula($contasCorrentes["123.486.789-10"]);
maiuscula($contasCorrentes["123.496.789-10"]);

foreach ($contasCorrentes as $cpf => $conta) {
	["titular" => $titular, "saldo" => $saldo] = $conta;

	mostra("$cpf $titular $saldo");
}



