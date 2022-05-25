<?php 

$numero = 0;

for($numero = 0; $numero <= 100; $numero++){
	if(is_integer($numero / 2)){
		continue;
	}

echo "#$numero\n";
}