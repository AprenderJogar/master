<html>

	<?php $login_cookie = $_COOKIE['login'];?>
<head>
	<meta charset="utf-8">
	<title> Jogar Primário </title>
	<link href="../estilosFundoPadaro.css" rel="stylesheet" type="text/css">
	<link href="../fontes_selecionadas/stylesheet.css" rel="stylesheet" type="text/css">
	<link href="estiloBotoesMateria.css" rel = "stylesheet" type = "text/css">
	<link href="estilosJogarProfessor.css" rel="stylesheet" type="text/css">
</head>

<body>

	<div id = "corpoInteiro">
		<div id = "corpoBotoesTopo"></div>
			<div id = "corpoResponsivo">
				<?php include('menu.php');?>
				
				<div id = "fundoOpacidade"></div>
					
				<div id = "fonteTitulo">Selecione a Matéria</div>
					
				<div id = "quadroMaterias">
					
					<a href = "JogoDaMemoria/index.html">
						<div id = "matematica"></div>
					</a>
					
					<a href = "JogoDasSilabas/index.html">
						<div id = "portugues"></div>
					</a>
					
					<a href = "#">
						<div id = "geografia"></div>
					</a>
				</div>
			</div>
		 
	</div>
</body>
</html>