<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8"/>
	<title>MONITOR DE AUDIÊNCIA DE RÁDIOS ONLINE</title>
</head>
<body>
	<h2><center>MONITOR DE AUDIÊNCIA DE RÁDIOS ONLINE</center></h2>
	<?php
	ini_set("user_agent", "Mozilla/58.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322)");
	$centoetresfm = file_get_contents('http://stm18.abcaudio.tv:31696/index.html?sid=1');
	$fmsergipe = file_get_contents('http://radio.server6.com.br:8725/index.html?sid=1');
	$fanfm = file_get_contents('http://69.30.202.98:7114/index.html?sid=1');
	$ilhafm = file_get_contents('http://radio.server6.com.br:9851/index.html?sid=1');
	$xodofm = file_get_contents('http://07.stmip.net:7506/index.html?sid=1');
	$mixfm = file_get_contents('http://c1.fabricahost.com.br:8043/');
	$jovempanaju = file_get_contents('http://sh.upx.com.br/proxy/535e_1');
	preg_match_all('/with(.*)of 5000 listeners/s', $centoetresfm, $conteudo103fm);
	$ouvintes103 = $conteudo103fm[1][0];
	echo "Temos atualmente ".$ouvintes103."ouvintes online na 103FM<br /><br />";
	preg_match_all('/with(.*)of 150 listeners/s', $fmsergipe, $conteudofmsergipe);
	$ouvintesSE = $conteudofmsergipe[1][0];
	echo "Temos atualmente ".$ouvintesSE."ouvintes online na FM Sergipe<br /><br />";
	preg_match_all('/with(.*)of 2500 listeners/s', $fanfm, $conteudofan);
	$ouvintesFan = $conteudofan[1][0];
	echo "Temos atualmente ".$ouvintesFan."ouvintes online na Fan FM<br /><br />";
	preg_match_all('/with(.*)of 150 listeners/s', $ilhafm, $conteudoilha);
	$ouvintesIlha = $conteudoilha[1][0];
	echo "Temos atualmente ".$ouvintesIlha."ouvintes online na Ilha FM<br /><br />";
	preg_match_all('/with(.*)of 3000 listeners/s', $xodofm, $conteudoxodo);
	$ouvintesXodo = $conteudoxodo[1][0];
	echo "Temos atualmente ".$ouvintesXodo."ouvintes online na Xodó FM<br /><br />";
	preg_match_all('/<\/td><\/tr><tr><td>Listeners \(current\):<\/td><td class="streamstats">(.*)<\/td><\/tr><tr><td>Listeners/', $mixfm, $conteudomixfm);
	$ouvintesMix = $conteudomixfm[1][0];
	echo "Temos atualmente ".$ouvintesMix." ouvintes online na Mix FM<br /><br />";
	preg_match_all('/with <B>(.*)of 9999 listeners/s', $jovempanaju, $conteudojp);
	$ouvintesJovemPanAju = $conteudojp[1][0];
	echo "Temos atualmente ".$ouvintesJovemPanAju."ouvintes online na Jovem Pan Aracaju FM<br /><br />";
	?>

</body>
</html>

</body>
</html>