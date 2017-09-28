<?php

$limit=9;

for ($i=0; $i <= $limit; $i++) { 
	
	if($i > 5)
	{
		$lim=$limit-$i;

	}else{
		
		$lim=$i;
	}

	for ($j=0; $j <$lim ; $j++) { 
		
		echo "*";
	}
	
	echo "\n";
}

?>

