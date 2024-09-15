<?php

$idade1 = 30;
$altura1 = 153;
$sexo1 = "masculino";

$idade2 = 65;
$altura2 = 180;
$sexo2 = "feminino";

$idade3 = 35;
$altura3 = 156;
$sexo3 = "feminino";


$cont = 0;
$cont_mulher = 0;
$total_altura = 0;
$media_altu_mulher = 0;
$altura_f = 0;

while ($cont < 3 ){
	if ($altura3 > $altura2){

	$altura_f = $altura3;
	$altura3 = $altura2;
	$altura2 = $altura_f;

	}else if($altura2 > $altura1){

		$altura_f = $altura2;
		$altura2 = $altura1;
		$altura1 = $altura_f;
	}
	$cont++;
};;
$cont = 0;

	echo("A maior altura é $altura1 cm <br />	
		A menor altura é $altura2 cm" );

while ($cont < 3) {
		if($sexo1 == "feminino"){
			$cont_mulher++;
		$total_altura += $altura1;
		}
		if($sexo2 == "feminino"){
			$cont_mulher++;
			$total_altura += $altura2;
		}
		if($sexo3 == "feminino"){
			$cont_mulher++;

			$total_altura += $altura3;

		}$cont++;

		$media_altu_mulher = $total_altura / $cont_mulher; 
	}

		echo(" <br /> media de altura das mulheres é de $media_altu_mulher cm") ;






	







	?>