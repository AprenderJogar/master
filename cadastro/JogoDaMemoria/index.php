<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Jogo da Memoria</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="../../estilosFundoPadaro.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="corpoInteiro">
        <div id="corpoResponsivo">
            <div id="corpoBotaoRelogio">        
                <input type="hidden" class="boton" id="inicio" value="" onclick="inicio();">
                <input type="button" class="boton" id="parar" value="PAUSAR" onclick="parar();" disabled>
                <input type="hidden" class="boton" id="continuar" value="Resume &#8634;" onclick="inicio();" disabled>
                <input type="hidden" class="boton" id="reinicio" value="Reset &#8635;" onclick="reinicio();" disabled>
            </div>
            <div id="contenedor">
                <div class="reloj" id="Horas" name"Horas">00</div>
                <div class="reloj" id="Minutos" name"Minutos">:00</div>
                <div class="reloj" id="Segundos" name"Segundos">:00</div>
                <div class="reloj" id="Centesimas" name="Centesimas">:00</div>
                <div id="resposta"></div>
            </div>
            <div id="CaixaDosPontos">
                <div id="pontos"></div>
                <div id="texto">Score:</div>
            </div>
            <div id="container">
<?php for($i = 0; $i < 28; $i++)
    {
 ?>
                <div class="card" id="card<?php echo $i?>">
                    <div class="face back"></div>
                    <div class="face front"></div>
                </div>
<?php 
    }
?>
        
                <img src="img/match.png" id="imgMatchSign" style="visibility:hidden"/>
            </div>
            <div id="modalGameOver">
               <img src="img/gameover.png" id="imgGameOver" />    
            </div>
            <input type="button" name="btnsair" value="Sair"   id="sair"   onclick="sairdojogo();">
            <div id="Resultado"></div>
        </div>
    </div>
    <script language="javascript" src="script.js"></script>
</body>
</html>
