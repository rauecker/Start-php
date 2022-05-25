<?php 

$idade = 25;

echo "Olá Mundo!!\n";

echo "A minha idade é de $idade anos" . PHP_EOL;

echo PHP_EOL;

echo "Você só pode passar, se tiver a partir 18 anos\n";

if ($idade == 18 || $idade >18){  // tbm pode ser usando ">="
	echo"Você tem $idade anos.\n"; 
	echo "Pode passar\n";
}

echo "END"; 

// para condições de "e" utilizar "and" ou "&&"
// para condições de "ou" utilizar "||" ou "or"

