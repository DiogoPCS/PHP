<html>
<head>
<title>Exemplo</title>
</head>
<body>


<?php
# Regras para o nome de variáveis
# Use $
# Nome começa com Letra ou Underscore
# Nome só contém caracteres alfanuméricos ou undescore
# Nome não pode conter espaços
# Case-sensitive

# ESCOPO DE VARIÁVEL
# definição: é a parte do script onde a variável pode ser utilizada. Temos quatro escopos de variáveis.
# local, global, estático, parâmetro

#LOCAL
#Uma variável declarada dentro de uma função PHP é local e pode ser acessada somente dentro daquela função.
#Exemplo:
$a = 5; //escopo global
function exemploLocal()
{
	echo $a; //escopo local
}
exemploLocal();
//podemos então ter variáveis com o mesmo nome, que são diferentes, e estão dentro de funções diferentes


#GLOBAL
#Escopo global são variáveis criadas e acessíveis fora de qualquer função.
#Para acessar a variável global dentro de uma função, usamos a palavra chave, Global.
#Exemplo:

$b1 = 5;
$c1 = 10;
function exemploGlobal1()
{
	global $b1, $c1;
	$b1 = $b1 + $c1;
}
exemploGlobal();
echo $b1;

#Variáveis globais são também armazenadas em um array chamado $GLOBALS[index], tal que, seu índice é o nome da variável.
#Assim essa matriz também será acessível dentro de funções.
#Reescrevendo o exemplo acima.

$b2 = 5;
$c2 = 10;
function exemploGlobal2()
{
	$GLOBALS['b2'] = $GLOBALS['b2'] + $GLOBALS['c2'];	
}
exemploGlobal2();
echo $b2;


#ESTÁTICO
# Quando uma função for fechada, todas as variáveis pertencentes a função serão suprimidas.
# Para guardar os valores, mesmo depois de fechadas, podemos deixar a variável estática.
#Exemplo:
function exemploEstatico(){
	static $d;
}
#A variável é ainda local para a função, porém, toda vez que a função for chamada novamente, o valor da variável ainda estará armazenado.


#PARÂMETROS
#Um parâmetro é uma variável local, cujo valor é passado para a função pelo código de chamada.
function exemploParametro($nota1, $nota2){
	$soma = $nota1 + $nota2;
}


#VARIÁVEIS DE VARIÁVEIS
#Bascicamente pega o valor de uma variável e trata como o nome de uma variável
#Exemplo:
$a = "Hello";
$$a = "World";
echo "$a ${$a}";
//produz a mesma saída que $a $hello

#EXPRESSÕES
#Tudo que tem valor é uma expressão

$a = 5;
$b = $a; // $b = 5;

$b = ($a = 15);
$b = $a = 15; // é o mesmo que $a = 15; $b = 15;












?>

</body>
</html>