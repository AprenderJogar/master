
<?php 

	 include('conexao.php');
	 
	 $sql = "SELECT * FROM usuarios WHERE login = '$login_cookie'";
	 $resultado = mysqli_query($connect, $sql) or die (mysql_error());
	 $linhas = mysqli_num_rows($resultado);
	 if($linhas > 0)
	 {
		 while($row = mysqli_fetch_array($resultado)){
			$pessoa = $row["campo"];
			 
			if($pessoa == "aluno"){
				?>
					<div id="corpoResponsivoBotoes">
						<div id="LogoIcone"></div>
						<div id="corpoBotoesJogarRanking">
							<a href="jogar.php"><div id="botaoJogar">Jogar</div></a>
							<a href="ranking.php"><div id="botaoRanking">Ranking</div></a>
						</div>
						<div id="corpoBotoesEditarSair">
							<a href="#"><div id="botaoEditar">Editar</div></a>
							<a href="logando.php"><div id="botaoSair">Sair</div></a>
						</div>
					</div>
				<?php
			}
			 
			if($pessoa =="professor"){
				?>
					<head>
						<link href="estilosJogarProfessor.css" rel="stylesheet" type="text/css">
					</head>
					<div id="corpoResponsivoBotoes">
						<div id="LogoIcone"></div>
						<div id="corpoBotoesJogarRanking">
							<a href="jogar.php"><div id="botaoJogar">Jogar</div></a>
							<a href="ranking.php"><div id="botaoRanking">Ranking</div></a>
							<a href="relatorio.php"><div id="botaoRelatorio">Relatório</div></a>
						</div>
						<div id="corpoBotoesEditarSair">
							<a href="#"><div id="botaoEditar">Editar</div></a>
							<a href="logando.php"><div id="botaoSair">Sair</div></a>
						</div>
					</div>
				<?php
			}
			
			if($pessoa =="convidado"){
				?>
					<div id="corpoResponsivoBotoes">
						<div id="LogoIcone"></div>
						<div id="corpoBotoesJogarRanking">
							<a href="jogar.php"><div id="botaoJogar">Jogar</div></a>
							<a href="ranking.php"><div id="botaoRanking">Ranking</div></a>
						</div>
						<div id="corpoBotoesEditarSair">
							<a href="#"><div id="botaoEditar">Editar</div></a>
							<a href="logando.php"><div id="botaoSair">Sair</div></a>
						</div>
					</div>
				<?php
			}
		 }
	 } else {
	 	echo "<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='logando.php';</script>";
	 }
?>