<!DOCTYPE HTML>
<html>
<?php 
	include('conexao.php');
	$login_cookie = $_COOKIE['login'];
	
	if(isset($_POST['usuario'])) $usuario = $_POST['usuario']; else $usuario="Selecione o aluno...";
?>
<head>
<meta charset="utf-8">
<title> Relatório </title>
<link href="../estilosFundoPadaro.css" rel="stylesheet" type="text/css">
<link href="estilosJogarProfessor.css" rel="stylesheet" type="text/css">
<link href="estiloRelatorio.css" rel="stylesheet" type="text/css">
<link href="estilosTabela.css" rel="stylesheet" type="text/css">
<link href="../fontes_selecionadas/stylesheet.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="corpoInteiro">
	<div id="corpoBotoesTopo"></div>
		<div id="corpoResponsivo">
        
        	<?php include('menu.php');?>
            
            <div id="fundoOpacidade"></div>
            
                <div id="boasVindas">
                    <?php
                         if(isset($login_cookie))
                         {
							$login_cookie = ucfirst(strtolower($login_cookie));
                            echo "Escolha um aluno para ver sua pontuação, $login_cookie <br>";
                        }
                        ?>    
           		</div>  
                 
				<div id="selecoes">
					<form action="relatorio.php" method="POST">
						<div class="styled-select green rounded">
							<select name="usuario">
								<option>Selecione o aluno...</option>
								<?php
									$sql1 = "select login
											 from usuarios
											 order by login ASC";
											 
									$resultado1 = mysql_query($sql1) or die (mysql_error());
									$linhas1 = mysql_num_rows($resultado1);
									
									if($linhas1 > 0){
										while($pegar = mysql_fetch_array($resultado1)){
								?>
											<option><?php echo $pegar['login'];?></option>
								<?php
										}
									}
								?>
							</select>
						</div>
						
						<input type="submit" class="botaoBuscar" value="Buscar">
					</form>
				</div>
				
				<table id="tabelaRelatorio">
					<thead>
						<tr style="font-family: 'Buxton Sketch'; border-bottom: solid 1px #fff;">
							<th></th>
							<th>JOGO</th>
							<th>DA</th>
							<th>MEMÓRIA</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php
							if($usuario != 'Selecione o aluno...'){
								$sql1 = "select usuario, horas, minutos, segundos, centesimas, pontos
										 from jogodamemoria
										 where usuario = '{$usuario}'";
										 
								$resultado1 = mysql_query($sql1) or die (mysql_error());
								$linhas1 = mysql_num_rows($resultado1);
								
								if($linhas1 > 0){ ?>
									<thead>
										<tr>
											<th>Nome</th>
											<th>Horas</th>
											<th>Minutos</th>
											<th>Segundos</th>
											<th>Centesimos</th>
											<th>Pontos</th>
										</tr>
									</thead>
									
									<?php
									
										while($pegar = mysql_fetch_array($resultado1)){
											
										?>
											<tr>
												<td><?php echo $pegar['usuario']; ?></td>
												<td><?php echo $pegar['horas'];?></td>
												<td><?php echo $pegar['minutos'];?></td>
												<td><?php echo $pegar['segundos'];?></td>
												<td><?php echo $pegar['centesimas'];?></td>
												<td><?php echo $pegar['pontos'];?></td>
											</tr>
										<?php
										}
								}else{?>
									<tr style="font-family: 'Buxton Sketch';">	
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td>Nenhum registro encontrado!!</td>
										<td></td>
									</tr>
								<?php
								}
							}
							?>
					</tbody>
				</table>
				
				
				<table id="tabelaRelatorio" style="margin-top: 30%">
					<thead>
						<tr style="font-family: 'Buxton Sketch'; border-bottom: solid 1px #fff;">
							<th></th>
							<th>JOGO</th>
							<th>DAS</th>
							<th>SÍLABAS</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php
							if($usuario != 'Selecione o aluno...'){
								$sql1 = "select usuario, horas, minutos, segundos, centesimas, pontos
										 from jogodassilabas
										 where usuario = '{$usuario}'";
										 
								$resultado1 = mysql_query($sql1) or die (mysql_error());
								$linhas1 = mysql_num_rows($resultado1);
								
								if($linhas1 > 0){ ?>
									<thead>
										<tr>
											<th>Nome</th>
											<th>Horas</th>
											<th>Minutos</th>
											<th>Segundos</th>
											<th>Centesimos</th>
											<th>Pontos</th>
										</tr>
									</thead>
									
									<?php
									
										while($pegar = mysql_fetch_array($resultado1)){
											
										?>
											<tr>
												<td><?php echo $pegar['usuario']; ?></td>
												<td><?php echo $pegar['horas'];?></td>
												<td><?php echo $pegar['minutos'];?></td>
												<td><?php echo $pegar['segundos'];?></td>
												<td><?php echo $pegar['centesimas'];?></td>
												<td><?php echo $pegar['pontos'];?></td>
											</tr>
										<?php
										}
								}else{?>
									<tr style="font-family: 'Buxton Sketch';">	
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td>Nenhum registro encontrado!!</td>
										<td></td>
									</tr>
								<?php
								}
							}
							?>
					</tbody>
				</table>
        </div>
</div>               
</body>
</html>