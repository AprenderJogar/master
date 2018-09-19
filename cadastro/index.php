<!DOCTYPE HTML>
<html>
<?php $login_cookie = $_COOKIE['login'];?>
<head>
<meta charset="utf-8">
<title> Bem-Vindo <?php echo $login_cookie ?></title>
<link href="estiloIndexAluno.css" rel="stylesheet" type="text/css">
<link href="../estilosFundoPadaro.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="corpoInteiro">
		<div id="corpoResponsivo">
        	<div id="boasVindas">
            	<?php
   					 if(isset($login_cookie))
   					 {
						echo"Bem-Vindo, $login_cookie <br>";
					}
					?>
			</div>        
        </div>
       
</div>        
</body>
</html>