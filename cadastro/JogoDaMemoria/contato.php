<?php
include('../conexao.php');
$login_cookie = $_COOKIE['login'];
	$select = "SELECT pontos from jogodamemoria where usuario = '$login_cookie'";
	$result = mysql_query($select);
	$fetch = mysql_fetch_row($result);
	$final = $fetch[0];
if ($final == '')
{

	if (isset($_GET["Segundos"])) {
		$horas = $_GET["Horas"];
		$segundos = $_GET["Segundos"];
		$minutos = $_GET["Minutos"];
		$centesimas = $_GET["Centesimas"];
		$pontos= $_GET["pontos"];
		$query1 = "INSERT INTO jogodamemoria (usuario,horas,minutos,segundos,centesimas,pontos) VALUES ('$login_cookie','$horas','$minutos','$segundos','$centesimas','$pontos')";
		$insert1 = mysql_query($query1,$connect);
		}
		
}else{
		
	$pontos= $_GET["pontos"];
	if($final < $pontos){
		if (isset($_GET["Segundos"])) {
			$horas = $_GET["Horas"];
			$segundos = $_GET["Segundos"];
			$minutos = $_GET["Minutos"];
			$centesimas = $_GET["Centesimas"];
			$query2 = "UPDATE jogodamemoria 
			SET horas = '$horas',
			minutos = '$minutos',
			segundos = '$segundos',
			centesimas = '$centesimas',
			pontos = '$pontos' where usuario = '$login_cookie'";
			$insert2 = mysql_query($query2,$connect);
		}
	}
		
		
}
?>