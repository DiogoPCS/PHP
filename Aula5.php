<!DOCTYPE html>
<html>
<head> <meta charset="utf-8">
	<title>Aula 5 - Escopo de variaveis e funcoes</title>
</head>
<body>

<?php

# USANDO ESCOPO DE VARIÁVEL E FUNÇÕES BÁSICAS, COM PASSAGEM DE PARÂMETROS 
$NomeAluno = "Mariazinha";
function SomarValores($valor1, $valor2)
{
	global $NomeAluno;
	$soma = $valor1 + $valor2;
	echo "A nota da  " . $NomeAluno . " é " . ($soma / 2) ;
	
}
SomarValores(5, 5);






?>







</body>
</html>