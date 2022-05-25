<?php 

$idade = 16;
$numeroDePessoas = 1;

echo "Olá Mundo!!\n";

echo "A minha idade é de $idade anos" . PHP_EOL;

echo PHP_EOL;

echo "Você só pode passar, se tiver a partir 18 anos, ou a partir de 16 anos acompanhado.\n";

if ($idade == 18 || $idade >18){  
	echo"Você tem $idade anos pode passar\n";

} else if ($idade >= 16 && $numeroDePessoas > 1) {
	echo "Você tem $idade anos, está acompanhado pode entrar\n";

	}else{
		echo "Você só tem $idade anos, e está sozinho. Você não pode entrar\n";		
	}

echo "END"; 



