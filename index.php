<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8"/>
	<title>MONITOR DE AUDIÊNCIA DE RÁDIOS ONLINE</title>
</head>
<body>
	<h2><center>MONITOR DE AUDIÊNCIA DE RÁDIOS ONLINE</center></h2>
	<?php
	$centoetresfm = file_get_contents('http://stm18.abcaudio.tv:31696/index.html?sid=1');
	/*$fmsergipe = file_get_contents('http://radio.server6.com.br:8725/index.html?sid=1');
	$fanfm = file_get_contents('http://69.30.202.98:7114/index.html?sid=1');
	$ilhafm = file_get_contents('http://radio.server6.com.br:9851/index.html?sid=1');
	$xodofm = file_get_contents('http://07.stmip.net:7506/index.html?sid=1');
	$mixfm = file_get_contents('http://c1.fabricahost.com.br:8043/');
	$jovempanaju = file_get_contents('http://sh.upx.com.br/proxy/535e_1?mp=');*/
	preg_match_all('/with(.*)of 5000 listeners/s', $centoetresfm, $conteudo103fm);
	$ouvintes = $conteudo103fm[1][0];
	echo "Temos atualmente ".$ouvintes."ouvintes na 103FM<br />";

	?>

</body>
</html>

</body>
</html>