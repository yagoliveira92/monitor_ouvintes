<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8"/>
	<title>MONITOR DE AUDIÊNCIA DE RÁDIOS ONLINE</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
<body>
	<span class="border">
		<div class="card text-center">
			<h4 class="card-header">MONITOR DE AUDIÊNCIA DE RÁDIOS ONLINE</h4>
			<div class="card-body">
				<table class="table">
					<thead class="thead-dark">
						<tr>
							<th scope="col">#</th>
							<th scope="col">Nome da Rádio</th>
							<th scope="col">Número de Ouvintes (gerais)</th>
							<th scope="col">Número de Ouvintes (unicos*)</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>103 FM</td>
							<td>
								<?php
								$centoetresfm = file_get_contents('http://stm18.abcaudio.tv:31696/index.html?sid=1');
								preg_match_all('/with(.*)of 5000 listeners/s', $centoetresfm, $conteudo103fm);
								echo $conteudo103fm[1][0];
								?>
							</td>
							<td>#</td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>Fan FM</td>
							<td>
								<?php
								$fanfm = file_get_contents('http://69.30.202.98:7114/index.html?sid=1');
								preg_match_all('/with(.*)of 2500 listeners/s', $fanfm, $conteudofan);
								echo $conteudofan[1][0];
								?>
							</td>
							<td>#</td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td>FM Sergipe</td>
							<td>
								<?php
								$fmsergipe = file_get_contents('http://radio.server6.com.br:8725/index.html?sid=1');
								preg_match_all('/with(.*)of 150 listeners/s', $fmsergipe, $conteudofmsergipe);
								echo $conteudofmsergipe[1][0];
								?>
							</td>
							<td>#</td>
						</tr>

						<tr>
							<th scope="row">4</th>
							<td>Ilha FM</td>
							<td>
								<?php
								$ilhafm = file_get_contents('http://radio.server6.com.br:9851/index.html?sid=1');
								preg_match_all('/with(.*)of 150 listeners/s', $ilhafm, $conteudoilha);
								echo $conteudoilha[1][0];
								?>
							</td>
							<td>#</td>
						</tr>
						<tr>
							<th scope="row">5</th>
							<td>Jovem Pan Aracaju</td>
							<td>
								<?php
								ini_set("user_agent", "Mozilla/58.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322)");
								$jovempanaju = file_get_contents('http://sh.upx.com.br/proxy/535e_1');
								preg_match_all('/with <B>(.*)of 9999 listeners/s', $jovempanaju, $conteudojp);
								echo $conteudojp[1][0];
								?>
							</td>
							<td>#</td>
						</tr>
						<tr>
							<th scope="row">6</th>
							<td>Mix FM</td>
							<td>
								<?php 
								$mixfm = file_get_contents('http://c1.fabricahost.com.br:8043/');
								preg_match_all('/<\/td><\/tr><tr><td>Listeners \(current\):<\/td><td class="streamstats">(.*)<\/td><\/tr><tr><td>Listeners/', $mixfm, $conteudomixfm);
								echo $conteudomixfm[1][0];
								?>	
							</td>
							<td>#</td>
						</tr>
						<tr>
							<th scope="row">7</th>
							<td>Xodó FM</td>
							<td>
								<?php
								$xodofm = file_get_contents('http://07.stmip.net:7506/index.html?sid=1');
								preg_match_all('/with(.*)of 3000 listeners/s', $xodofm, $conteudoxodo);
								echo $conteudoxodo[1][0];
								?>
							</td>
							<td>#</td>
						</tr>
						<thead class="thead-light">
							<tr>
								<th scope="col">Total Geral</th>
								<th></th>
								<th>
									<?php 
									echo (intval($conteudo103fm[1][0]) + intval($conteudofan[1][0]) + intval($conteudofmsergipe[1][0]));
									?>
								</th>
								<th>#</th>
							</tr>
						</thead>
					</tbody>
				</table>
				<a href="http://abcaudio.tv" class="btn btn-primary">Ir para a Home</a>
			</div>
			<div class="card-footer text-muted">
				<p>* Esse número corresponde aos número de IPs conectados simultaneamente no serviço de streaming.</p>
			</div>
		</div>
	</span>
</body>
</html>