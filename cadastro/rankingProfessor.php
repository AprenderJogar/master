<!DOCTYPE HTML>
<html>
<?php 
	include('conexao.php');
	$contador = 1;
	$login_cookie = $_COOKIE['login'];
?>
<head>
<meta charset="utf-8">
<title> Ranking </title>
<link href="../estilosFundoPadaro.css" rel="stylesheet" type="text/css">
<link href="estilosRankingProfessor.css" rel="stylesheet" type="text/css">
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
                            echo "Confira o Ranking, $login_cookie <br>";
                        }
                        ?>    
           		 </div>  
                 
				 
                <table id="tabelaRelatorio">
					<tbody>
						<?php
							
							$sql1 = "select usuario, horas, minutos, segundos, centesimas, pontos
									 from jogodamemoria
									 order by pontos DESC";
									 
							$resultado1 = mysql_query($sql1) or die (mysql_error());
							$linhas1 = mysql_num_rows($resultado1);
							
							if($linhas1 > 0){ ?>
								<thead>
									<tr>
										<th>Pos.</th>
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
											
											<td><?php echo $contador++."°" ?></td>
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
								<script>
									alert("Nenhum registro encontrado!");
								</script>
							<?php
							}
						?>
					</tbody>
				</table>
                     
        </div>
	
</div>               
</body>
</html>