<!DOCTYPE HTML>
<html>
<?php $login_cookie = $_COOKIE['login'];?>
<head>
<meta charset="utf-8">
<title> Jogar </title>
<link href="../estilosFundoPadaro.css" rel="stylesheet" type="text/css">
<link href="estilosJogarProfessor.css" rel="stylesheet" type="text/css">
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
                            echo "Bem-Vindo, $login_cookie <br>";
                        }
                        ?>    
           		 </div>  
                 
                 <div id="corpoBotaoPrimario">
                 	<a href="primarioProfessor.php"><div id="botaoPrimario">Primário</div>
                    <div id="desenhoPrimario"></div></a>
                 </div>
                 <div id="corpoBotaoMedio">
                 	<a href="#"><div id="botaoMedio">Médio</div>
                    <div id="desenhoMedio"></div></a>
                 </div>
                 <div id="corpoBotaoSuperior">
                 	<a href="#"><div id="botaoSuperior">Superior</div>
                    <div id="desenhoSuperior"></div></a>
                 </div>
                     
        </div>
	
</div>               
</body>
</html>