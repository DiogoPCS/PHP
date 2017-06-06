<html>
<head>
<title>variáveis de ambiente</title>
</head>
<body>

<?php
#Uma variável de ambiente é um array, pré definido, contendo informações sobre:
# cabeçalhos, paths, localizações de scripts, host, conexão, entre tantas outras.
# As entradas nesse array são criadas pelo servidor web. Pode não haver garantia que o servidor proverá algum desses valores.

echo $var = getenv("REMOTE_INDENT");//getnv obtém uma variável ambiente
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

#$_SERVER - INFORMAÇÕES DO SERVIDOR E AMBIENTE DE EXECUÇÃO
echo "<hr>";
echo "<h1> Server </h1>";
echo $_SERVER['PHP_SELF'] . "<p>"; //raiz do documento
echo $_SERVER['SERVER_ADDR'] . "<p>"; // Número do IP do servidor onde o script está em execução
echo $_SERVER['SERVER_NAME'] . "<p>"; //Nome do servidor
echo $_SERVER['SERVER_PORT'] . "<p>"; // Porta do servidor
echo $_SERVER['SERVER_PROTOCOL'] . "<p>"; //Protocolo de conexão
echo $_SERVER['SERVER_SOFTWARE'] . "<p>"; //Informações do software servidor
echo $_SERVER['REMOTE_ADDR'] . "<p>"; // Endereço IP de onde o usuário está acessando a página
echo $_SERVER['REMOTE_PORT'] . "<p>"; //Porta TCP do usuário






?>

</body>
</html>