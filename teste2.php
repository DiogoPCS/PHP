<html>
<head>
<title>variáveis de ambiente</title>
</head>
<body>
<?php
$Name = getenv("SERVER_SOFTWARE");	
function HostName()
{
	global $Name;
	echo "<b>Host Name: </b> " . $Name;
}
HostName();
?>
</body>
</html>