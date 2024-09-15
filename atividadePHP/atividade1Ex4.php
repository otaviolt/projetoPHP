
<?php 
	$a = 10;
	$b = 20;
	$c = 30;

	$t = 01;

	$cont = 0;



	while ($cont < 10) {
		
		if($c > $b){

			$t = $c;

			$c = $b;
			$b = $t;
		
		}else if($b > $a){
			$t = $b;
			$b = $a;
			$a = $t;
			}
		$cont++;
		}

		echo "organizando os numeros na ordem decrescente eles ficam = $a $b $c";


?>