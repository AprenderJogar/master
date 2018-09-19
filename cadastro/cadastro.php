
<meta charset="utf-8">
<?php 

 include("conexao.php");
$test = $_REQUEST['cadastrar'];

if ($test) {
 $nome = $_POST['nome'];
 $email = $_POST['email'];
 $login = $_POST['login'];
 $senha = MD5($_POST['senha']);
 $telefone = $_POST['telefone'];
 $instituicaoaluno = $_POST['campoaluno'];
 $instituicaoprofessor = $_POST['campoprofessor'];
 $cpf = $_POST['cpf'];
 $campo = $_REQUEST['campo'];
 
 $query_select = "SELECT login FROM usuarios WHERE login = '$login'";
 $select = mysql_query($query_select,$connect);
 $array = mysql_fetch_array($select);
 $logarray = $array['login'];
 
 if($campo == "aluno")
 {	
	$instituicaoprofessor = null;
 }
 if($campo == "professor")
 {	
	$instituicaoaluno = null;
 }

if($login == "" || $login == null || $campo == "" || $campo == null || $senha == "" || $senha == null)
{
	echo"<script language='javascript' type='text/javascript'>alert('O campo login,senha e o tipo(Aluno ou Professor ou Convidado) são obrigatórios, devem ser preenchidos');window.location.href='cadastrando.php';</script>"; 
	
	}else
	{	
		if($logarray == $login){
			echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastrando.php';</script>";
			die();
		}
			
			if($instituicaoprofessor == null){
				
				$query = "INSERT INTO usuarios (nome,email,login,senha,telefone,cpf,campo,instituicao)VALUES('$nome','$email','$login','$senha','$telefone','$cpf','$campo','$instituicaoaluno')";
				$insert = mysql_query($query,$connect);
		
				// Se os dados forem inseridos com sucesso
				if ($query){
					echo "<script language='javascript' type='text/javascript'>alert('Voce foi cadastrado com sucesso');window.location.href='logando.php';</script>";
					
				
				}
			}else{
				
				$query = "INSERT INTO usuarios (nome,email,login,senha,telefone,cpf,campo,instituicao)VALUES('$nome','$email','$login','$senha','$telefone','$cpf','$campo','$instituicaoprofessor')";
				$insert = mysql_query($query,$connect);
		
				// Se os dados forem inseridos com sucesso
				if ($query){
					echo "<script language='javascript' type='text/javascript'>alert('Voce foi cadastrado com sucesso');window.location.href='logando.php';</script>";
					
				
				}
			}
			
	}
}

?>