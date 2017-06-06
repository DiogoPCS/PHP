<?php 


// Cria uma variável que terá os dados do erro
$erro = false;

if (!isset($_POST) || empty($_POST))
{
	
	$erro = "Nada foi postado";
}

foreach ($_POST as $chave => $valor)
{
	//remover todas as tags html
	//remover os espaços em branco do valor
	$$chave = trim(strip_tags($valor));

	//verifica se tem algum valor nulo
	if (empty($valor))
	{
		$erro = "Existem campos em branco";
	}
}

var_dump(isset($_POST["idade"]));
var_dump(isset($idade));

#VALIDAÇÃO DOS CAMPOS
if ( (!isset($idade) || !is_numeric($idade)) && !$erro)
{
	$erro = "A idade deve ser um valor numérico.";
}


If ((!isset($site) || !filter_var($site, FILTER_VALIDATE_URL)) && !$erro)
{
	$erro = "Envie um site válido.";
}

if ((!isset($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) && !$erro)
{
	$erro = "Envie um email válido.";
}



if ($erro)
{
	echo $erro;
} else {
	//se a variável do erro continuar com o valor falso
	//você pode fazer o que preferir aqui por exemplo
	//enviar para a base de dados, ou enviar um email
	echo "<h1> Veja os dados enviados</h1>";

	foreach ($_POST as $chave => $valor) {
		echo "<br>" . $chave . "</br>" . $valor . "<br><br>";
	}
}









?>