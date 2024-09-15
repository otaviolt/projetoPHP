<?php 

   $valor = 1;

   echo "Escolha um número </br>";
   echo "1 - Banana </br>";
   echo "2 - Laranja </br>";
   echo "3 - Abacaxi </br>";
   echo "4 - Sair </br>";

   switch ($valor) {

      case 1:
      	echo "Você escolheu Banana";
      	break;

      case 2:
        echo "Você escolheu Laranja";
        break;

      case 3:
      echo "Você escolheu Abacaxi";
      break;

      case 4:
      echo "Você saiu";
      break;

      default:
              echo "Você não escolheu nenhuma opção válida";
              break;

   }

 ?>