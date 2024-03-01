<?php

$idade = 18;

$numeroDePessoas = 1;

echo "Você só pode entrar se tiver mais do que 18 anos e se for o residente. "; PHP_EOL;
echo "ou a partir de 16 anos acompanhado". PHP_EOL;

 if ($idade >= 18 ) {
    echo "Você tem $idade  anos. Pode entrar";
 }
 else{
 echo "Você só tem $idade anos, não é o residente e não está acompanhado de um supervisor. Você não pode entrar";
 echo PHP_EOL . "É uma pena";
 }
if ($idade >= 16 && $numeroDePessoas > 1) {
   echo "Você tem $idade anos. está acompanhado (a), então pode entrar.";
}
   
 echo PHP_EOL;
 echo "Adeus!";