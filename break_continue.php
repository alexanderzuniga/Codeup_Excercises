<?php

for($i=0; $i <= 100; $i++) {
	echo $i . PHP_EOL;
	if ($i % 3 == 0) {
	continue;
	}
	echo "^^ this is an even number. \n";
}





?>
