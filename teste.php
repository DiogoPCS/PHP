<html>
<head>
<title>vari�veis de ambiente</title>
</head>
<body>

<?php
#Uma vari�vel de ambiente � um array, pr� definido, contendo informa��es sobre:
# cabe�alhos, paths, localiza��es de scripts, host, conex�o, entre tantas outras.
# As entradas nesse array s�o criadas pelo servidor web. Pode n�o haver garantia que o servidor prover� algum desses valores.

echo $var = getenv("REMOTE_INDENT");//getnv obt�m uma vari�vel ambiente
echo "<p>";

echo $var = getenv("SERVER_SOFTWARE");
echo "<p>";

echo $var = getenv("SERVER_NAME");
echo "<p>";

echo $var = getenv("SERVER_PROTOCOL");
echo "<p>";

echo $var = getenv("SERVER_PORT");
echo "<p>";

echo $var = getenv("REMOTE_ADDR");
echo "<p>";

#$_SERVER - INFORMA��ES DO SERVIDOR E AMBIENTE DE EXECU��O
echo "<hr>";
echo "<h1> Server </h1>";
echo $_SERVER['PHP_SELF'] . "<p>"; //raiz do documento
echo $_SERVER['SERVER_ADDR'] . "<p>"; // N�mero do IP do servidor onde o script est� em execu��o
echo $_SERVER['SERVER_NAME'] . "<p>"; //Nome do servidor
echo $_SERVER['SERVER_PORT'] . "<p>"; // Porta do servidor
echo $_SERVER['SERVER_PROTOCOL'] . "<p>"; //Protocolo de conex�o
echo $_SERVER['SERVER_SOFTWARE'] . "<p>"; //Informa��es do software servidor
echo $_SERVER['REMOTE_ADDR'] . "<p>"; // Endere�o IP de onde o usu�rio est� acessando a p�gina
echo $_SERVER['REMOTE_PORT'] . "<p>"; //Porta TCP do usu�rio






?>

</body>
</html>