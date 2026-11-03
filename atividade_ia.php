<?php
  
 // criando as variáveis
$nota1 = 9;
$nota2 = 7;
$nota3 = 8;

     // criando a soma das variáveis
$soma = $nota1 + $nota2 + $nota3;
    // dividindo as variáveis
$media = $soma / 3;

echo " A média do aluno será:" . $media;

      // criando as condições para o aluno ser aprovado ou reprovado.
if ($media >= 7){
      echo " O aluno está aprovado!";
     } else {
       echo " O aluna esta reprovado!";
     }  

    ?> 
