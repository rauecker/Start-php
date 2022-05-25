<?php 

$contasCorrentes = [
	"123.456.789-10" => ["titular" => "Victor", "saldo" => 2000],
	"123.486.789-10" => ["titular" => "Diego", "saldo" => 1000],
	"123.496.789-10" => ["titular" => "Raul", "saldo" => 500]
];

$contasCorrentes [] = ["titular" => "Rafael", "saldo" => 100];


foreach ($contasCorrentes as $conta) {
	echo $conta["titular"] . "\n";
}