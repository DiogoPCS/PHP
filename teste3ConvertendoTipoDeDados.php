 <html>
 <head>
 <title> Convertendo tipo de dados da Var </title>
 </head>
 <body>
 <?php 

 // CONVERTENDO PARA STRING
// Um valor pode ser convertido em uma string utilizando o modificador (string). 
	# Boolean True é convertido para string "1"
	# Boolean False é convertido para string vazia ""
	# Int e Float, são convertidos para números textuais.
	# NUll é convertido para uma string vazia ""
		
	$foo = "0";	//string
	var_dump($foo);

	$foo += 2;	// variável agora é do tipo inteiro
	var_dump($foo);

	$foo = $foo + 1.3;	//variável agora é do tipo float
	var_dump($foo);

	$foo = 5 + "10 anões da branca de neve"; //variável é do tipo inteiro
	var_dump($foo);

	$foo = 5 - "2 anões da branca de neve";
	var_dump($foo);

	$foo = 5 + "16 anões de 6 branca de neve";
	var_dump($foo);

	$foo = 10;
	$bar = (boolean) $foo;	//convertida para booleano
	var_dump($bar);

	if ($foo === $bar)
	{
		echo "são do mesmo tipo";
	} else {
		echo "não são do mesmo tipo";
	}

//CONVERTENDO PARA BOOLEANO
//Para converter explicitamente um valor para booleano, utilize os modificadores 
//(bool) ou (boolean). Entretanto, na maioria dos casos, o modificador não será 
// necessário, já que qualquer valor será convertido se houver um argumento booleano.
//Os seguintes valores são considerados FALSE
	# o próprio booleano FALSE
	# o inteiro 0
	# o flutuante 0.0
	# string vazia e string "0"
	# array sem elementos
	# um tipo NULL
	
	var_dump((bool) "");
	var_dump((bool) 1);
	var_dump((bool) -2);
	var_dump((bool) "foo");
	var_dump((bool) 2.3e5);
	var_dump((bool) array(12));
	var_dump((bool) array());
	var_dump((bool) "false");
	var_dump((bool) False);
	var_dump((bool) 0);
	

// CONVERTENDO PARA INTEIRO
// Para converter explicitamente um valor para inteiro, utilize os modificadores 
//(int) ou (integer). Na maioria dos casos, o modificador não é necessário, já que a 
//conversão pode ocorrer de forma automática por utilizar um argumento inteiro.
	# de Booleano para Inteiro, false = 1, e tru = 0
	# de Ponto Flutuante para Inteiro fará o número ser truncado
	
	echo "<h1>Conversão para Inteiros </h1>";
	var_dump((int) "a");
	var_dump((int) "b");
	var_dump((int) "1a");
	var_dump((int) "0");
	var_dump((int) 1.2);
	var_dump((int) 1444.65);
	var_dump((int) true);

	
//	CONVERTENDO PARA PONTO FLUTUANTE
//	Para valores, com excessão de strings, normalmente o valor é convertido para 
// int, e posteriormente para ponto flutuante.
	echo "<h1>Conversão para Ponto Flutuante </h1>";
	var_dump((float) 1);
	var_dump((float) 100);
	var_dump((float) "a");
	var_dump((float) "b");
	var_dump((float) "1a");
	var_dump((float) "11.467A");
	var_dump((float) True);
	var_dump((float) "Meu Texto");
	
	

 
 
 
 
 
 
 
 
 
 
 
 
	
	
 ?>
 
 
 
 
 </body>
 </html>