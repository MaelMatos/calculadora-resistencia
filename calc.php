<?php
//coleta de variaveis
$c1 = $_GET['c1'];
$c2 = $_GET['c2'];
$c3 = $_GET['c3'];

//valores tabela
$preto = 0;
$marrom = 1;
$vermelho = 2;
$laranja = 3;
$amarelo = 4;
$verde = 5;
$azul = 6;
$violeta = 7;
$cinza = 8;
$branco = 9;
$dourado = -1;
$prata = -2;
$sem_cor = 0

$n = intval(strval($$c1) + strval($$c2)) * (10**$$c3);
$n = strval($n) + Ω;

echo $n;


?>