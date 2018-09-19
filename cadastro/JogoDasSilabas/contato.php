<?php
include('../conexao.php');
$login_cookie = $_COOKIE['login'];
	$select = "SELECT pontos from jogodassilabas where usuario = '$login_cookie'";
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
		$query1 = "INSERT INTO jogodassilabas (usuario,horas,minutos,segundos,centesimas,pontos) VALUES ('$login_cookie','$horas','$minutos','$segundos','$centesimas','$pontos')";
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
			$query2 = "UPDATE jogodassilabas
			SET horas = '$horas',
			minutos = '$minutos',
			segundos = '$segundos',
			centesimas = '$centesimas',
			pontos = '$pontos' where usuario = '$login_cookie'";
			$insert2 = mysql_query($query2,$connect);
		}
	}
		
		
}


	// $select = "SELECT pontos from usuarios where login = '$login_cookie'";
	// $result = mysql_query($select);
	// $fetch = mysql_fetch_row($result);
	// $final = $fetch[0];
	
// if (isset($_GET["Segundos"])) {
	// echo "Entrou";
    // $horas = $_GET["Horas"];
	// $segundos = $_GET["Segundos"];
	// $minutos = $_GET["Minutos"];
	// $centesimas = $_GET["Centesimas"];
	// $pontos= $_GET["pontos"];
	// $query = "UPDATE usuarios 
	// SET horas = '$horas',
	// minutos = '$minutos',
	// segundos = '$segundos',
	// centesimas = '$centesimas',
	// pontos = '$pontos' where login = '$login_cookie'";
	// $insert = mysql_query($query,$connect);
	// }

?>