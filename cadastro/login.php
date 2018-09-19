<?php 
	 include("conexao.php");
	 
	 $login = $_POST['login'];
	 $entrar = $_POST['entrar'];
	 $senha = $_POST['senha'];
	 
	 $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
	 $resultado = mysqli_query($connect, $sql) or die (mysql_error());
	 $linhas = mysqli_num_rows($resultado);
	 if($linhas > 0)
	 {
		 while($row = mysqli_fetch_array($resultado)){
			 $pessoa = $row["campo"];
			 
			 setcookie("login",$login);
					if($pessoa == "aluno")
					 header("Location:jogar.php");
					if($pessoa =="professor")
					{ header("Location:jogar.php");}
					if($pessoa =="convidado")
					{ header("Location:jogar.php");}
		 }
	 } else {
	 	echo "<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='logando.php';</script>";
	 }
	 $connect->close();
?>