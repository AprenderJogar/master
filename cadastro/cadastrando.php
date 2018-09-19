<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title> Cadastro de Usuário </title>
<link href="estilosCadastrar.css" rel="stylesheet" type="text/css" />
<link href="../estilosFundoPadaro.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="mascara/jquery-1.2.6.pack.js"></script>
<script type="text/javascript" src="mascara/jquery.maskedinput-1.1.4.pack.js"/></script>
<script type="text/javascript">
	$(document).ready(function(){	
		$("#cpf").mask("999.999.999-99");
		$("#data").mask("99/99/9999");
		$("#telefone").mask("(99) 9999-9999");
	});
</script>
<script>
function aparece(){
if(document.getElementById("aluno").checked){
document.forms[0].campoaluno.style.visibility="visible";
document.forms[0].campoprofessor.style.visibility="hidden";
}
else {
document.forms[0].campoprofessor.style.visibility="visible";
document.forms[0].campoaluno.style.visibility="hidden";
} 
if(document.getElementById("convidado").checked){
document.forms[0].campoaluno.style.visibility="hidden";
document.forms[0].campoprofessor.style.visibility="hidden";
}
function validaRadio() {
  if (document.form1.tipoEndereco[0].checked == false 
    && document.form1.tipoEndereco[1].checked == false) {
    alert('Por favor, selecione o Tipo de Endereço.');
    return false;
  }
  return true;
}
}

function checar_caps_lock(ev) {
	var e = ev || window.event;
	codigo_tecla = e.keyCode?e.keyCode:e.which;
	tecla_shift = e.shiftKey?e.shiftKey:((codigo_tecla == 16)?true:false);
	if(((codigo_tecla >= 65 && codigo_tecla <= 90) && !tecla_shift) || ((codigo_tecla >= 97 && codigo_tecla <= 122) && tecla_shift)) {
		document.getElementById('aviso_caps_lock').style.visibility = 'visible';
		document.getElementById('login').value='';
		alert("Caps lock esta ativado");

	}
	else {
		document.getElementById('aviso_caps_lock').style.visibility = 'hidden';
	}
}
</script>

</head>


<body>
<div id="corpoInteiro">
		<div id="corpoResponsivo">
        	<div id="CorpoBotoes">
          	<form action="cadastro.php"   method="POST">
                <input type="text" name="nome" id="nome" class="campoPreencher nome"placeholder="Nome:" required>
                <input type="text" name="email" id="email" class="campoPreencher email"placeholder="Email:">
                <input type="text" name="telefone" id="telefone" class="campoPreencher telefone"placeholder="Telefone:">
                <input type="text" name="cpf" id="cpf" class="campoPreencher cpf"placeholder="CPF:">
                <input type="text" name="login" id="login" onkeypress="checar_caps_lock(event)" class="campoPreencher login"placeholder="Login:" required>
                <div id="aviso_caps_lock" style="visibility: hidden"></div>
				<input type="password" name="senha" id="senha" class="campoPreencher senha"placeholder="Senha:" required> 
                
				
				<div class="campoSelecionar">
					<div class="botAluno"><input type="radio" id="aluno" name="campo" onclick="aparece()" class="botao" value="aluno" >Aluno</div>
					<select  name="campoaluno" style="visibility:hidden;" id="campoaluno" class="preenchimento" >
						<option value="unicesumar">Unicesumar</option>
						<option value="uem">Uem</option>
						<option value="promec">Promec</option>
					</select>
				</div>

				<div class="campoSelecionar">
					<div class="botProfessor"><input type="radio" id="professor" name="campo" onclick="aparece()" class="botao" value="professor" >Professor</div>
					<select  name="campoprofessor" style="visibility:hidden;" id="campoprofessor" class="preenchimento" >
						<option value="unicesumar">Unicesumar</option>
						<option value="uem">Uem</option>
						<option value="promec">Promec</option>
					</select>
				</div>

				<div class="botConvidado"><input type="radio" id="convidado" name="campo" onclick="aparece()" class="botao" value="convidado" >Convidado</div>
              	
				<input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
                <a href="logando.php"><div id="voltar">Voltar</div> </a>
         	 </form>
			</div>
		</div>
</div>
</body>
</html>