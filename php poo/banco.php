<?php

require_once 'src/titular.php';
require_once 'src/Conta.php';

$primeiraConta = new Conta(new titular('123.456.789-10', 'Vinicius Dias'));
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$segundaConta = new Conta(new titular('698.549.548-10', 'Patricia'));
var_dump($segundaConta);

$outra = new Conta(new titular('123', 'Abcdefg'));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
