<!DOCTYPE html>
<html>
<head> <meta charset="utf-8">
	<title>Capitulo 3</title>
</head>
<body>

<?php 
echo '<H2><hr>Aspas Simples</H2>';
echo ' It\'s is Diogo\'s "Object" ';
#pagina 38 para achar outros controles com \

echo '<H2><hr>Aspas Dupla</H2>';
$palavra = "Object";
$frase = " It's Diogo's \"$palavra\" ";
echo $frase;

echo '<H2><hr>Aspas Invertidas</H2>';
//echo `dir`;
#podemos utilizar comandos internos do SO

echo '<H2><hr>Constantes</H2>';
define ("meunome", "Diogo");
echo "O meu nome é " . meunome . "<br />";
#constantes já existentes do sistema, vide pagina 41
echo PHP_OS . "<br />";
echo PHP_VERSION . "<br />";
echo __FILE__ . "<br />";
echo __LINE__ . "<br />";

echo '<H2><hr>Escopo de Variáveis</H2>';
$num = 5000;
function testa_escopo1()
{
	global $num;
	$num += 5;
	echo $num . "<br>";
}



echo $num . "<br>";
testa_escopo1();

























 ?>

</body>
</html>