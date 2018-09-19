<?php
include('../../conexao.php');
$login_cookie = $_COOKIE['login'];
	$select = "SELECT fasedois from jogodassilabas where usuario = '$login_cookie'";
	$result = mysql_query($select);
	$fetch = mysql_fetch_row($result);
	$final = $fetch[0];
	echo $final;
	
if ($final == '')
{
	if (isset($_GET["Segundos"])) {
		$horas = $_GET["Horas"];
		$segundos = $_GET["Segundos"];
		$minutos = $_GET["Minutos"];
		$centesimas = $_GET["Centesimas"];
		$pontos= $_GET["pontos"];
		$query1 = "UPDATE jogodassilabas SET fasedoois = '$pontos' where usuario = '$login_cookie'";
		$insert1 = mysql_query($query1,$connect);
		
		}
		
}else{
		
	$pontos = $_GET["pontos"];
	
	if($final < $pontos){
		if (isset($_GET["Segundos"])) {
			$horas = $_GET["Horas"];
			$segundos = $_GET["Segundos"];
			$minutos = $_GET["Minutos"];
			$centesimas = $_GET["Centesimas"];
			$query2 = "UPDATE jogodassilabas
							SET horas = '$horas',
								minutos = '$minutos',
								segundos = '$segundos',
								centesimas = '$centesimas',
								fasedois = '$pontos' 
						where usuario = '$login_cookie'";
			$insert2 = mysql_query($query2,$connect);
		}
	}		
}

	$sqlTotal = "select faseum, fasedois
			 from jogodassilabas
			 where usuario='$login_cookie'";
	$resultado = mysql_query($sqlTotal,$connect);
	$linha = mysql_num_rows($resultado);
		if($linha > 0){
			while($pegar = mysql_fetch_array($resultado)){
				$faseum = $pegar['faseum'];
				$fasedois = $pegar['fasedois'];
				$total = $faseum + $fasedois;
			}
		}
	
	$updateTotal = "UPDATE jogodassilabas
							SET pontos = '$total'
						where usuario = '$login_cookie'";
	$updateConexao = mysql_query($updateTotal,$connect);

?>