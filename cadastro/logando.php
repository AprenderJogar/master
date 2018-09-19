<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Entrar</title>
<link href="estilosLogar.css" rel="stylesheet" type="text/css" />
<link href="../estilosFundoPadaro.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div id="corpoInteiro">
		<div id="corpoResponsivo">
        	<div id="logo"></div>
				<div id="CorpoBotoes">
					<form method="POST" action="login.php">
					<input type="text" name="login" id="login" class="campoPreencher login"placeholder="Login:">
					<input type="password" name="senha" id="senha"class="campoPreencher senha"placeholder="Senha:">
					
					
					<input type="submit" value="Entrar" id="Entrar" name="entrar"><br>
					<a href="../index.php"><div id="voltar">Voltar</div> </a>
					<a href="cadastrando.php"><div id="botaoCadastro">Cadastre-se </div></a>
					</form>
				</div>
		</div>
	</div>

</body>
</html>