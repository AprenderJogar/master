var centesimas = 0;
var segundos = 0;
var minutos = 0;
var horas = 0;
var testar = 0;
var contPontos = 0;
pontos.innerHTML = "000";

 function CriaRequest() {
     try{
         request = new XMLHttpRequest();        
     }catch (IEAtual){
         
         try{
             request = new ActiveXObject("Msxml2.XMLHTTP");       
         }catch(IEAntigo){
         
             try{
                 request = new ActiveXObject("Microsoft.XMLHTTP");          
             }catch(falha){
                 request = false;
             }
         }
     }
     
     if (!request) 
         alert("Seu Navegador não suporta Ajax!");
     else
         return request;
 }
 

function mensagemSair(){
var x;
var r = confirm("Voce Realmente Deseja Sair?!");

if (r == true){
	window.location.href='../jogar.php'
}

}
function sairdojogo(){
	getDados();
	mensagemSair();
}
 
 
 
function getDados() {
    parar();
    var result = document.getElementById("Resultado");
    var xmlreq = CriaRequest();
    result.innerHTML = '<img src="Progresso1.gif"/>';
xmlreq.open("GET", "contato.php?Segundos=" + segundos + "&Minutos=" + minutos + "&Horas=" + horas + "&Centesimas=" + centesimas + "&pontos=" + contPontos, true);

     xmlreq.onreadystatechange = function(){

         if (xmlreq.readyState == 4) {

             if (xmlreq.status == 200) {
                 result.innerHTML = xmlreq.responseText;
             }else{
                 result.innerHTML = "Erro: " + xmlreq.statusText;
             }
         }
     };
     xmlreq.send(null);
 }



function inicio () {
	control = setInterval(cronometro,10);
	document.getElementById("inicio").disabled = true;
	document.getElementById("parar").disabled = false;
	document.getElementById("continuar").disabled = true;
	document.getElementById("reinicio").disabled = false;
}
function parar () {
	testar = 0;
	clearInterval(control);
	document.getElementById("parar").disabled = true;
	document.getElementById("continuar").disabled = false;
}
function reinicio () {
	clearInterval(control);
	centesimas = 0;
	segundos = 0;
	minutos = 0;
	horas = 0;
	Centesimas.innerHTML = ":00";
	Segundos.innerHTML = ":00";
	Minutos.innerHTML = ":00";
	Horas.innerHTML = "00";
	document.getElementById("inicio").disabled = false;
	document.getElementById("parar").disabled = true;
	document.getElementById("continuar").disabled = true;
	document.getElementById("reinicio").disabled = true;
}
function cronometro () {
	if (centesimas < 99) {
		centesimas++;
		if (centesimas < 10) { centesimas = "0"+centesimas }
		Centesimas.innerHTML = ":"+centesimas;
	}
	if (centesimas == 99) {
		centesimas = -1;
	}
	if (centesimas == 0) {
		segundos ++;
		if (segundos < 10) { segundos = "0"+segundos }
		Segundos.innerHTML = ":"+segundos;
	}
	if (segundos == 59) {
		segundos = -1;
	}
	if ( (centesimas == 0)&&(segundos == 0) ) {
		minutos++;
		if (minutos < 10) { minutos = "0"+minutos }
		Minutos.innerHTML = ":"+minutos;
	}
	if (minutos == 59) {
		minutos = -1;
	}
	if ( (centesimas == 0)&&(segundos == 0)&&(minutos == 0) ) {
		horas ++;
		if (horas < 10) { horas = "0"+horas }
		Horas.innerHTML = horas;
	}
}


(function(){
	var matches = 0;
	var images = [];
	var flippedCards = [];
	var modalGameOver = document.querySelector("#modalGameOver");
	var imgMatchSign = document.querySelector("#imgMatchSign");
	
	
	for(var i = 0; i < 28; i++){
			var img = {
					src: "img/"+ i +".jpg",
					id: i%14
				};
				images.push(img);
		}
	
	startGame();
		function startGame(){
			matches = 0;
			flippedCards = [];
			images = randomSort(images);
			var frontFaces = document.getElementsByClassName("front");
			var backFaces = document.getElementsByClassName("back");
			
			
			for(var i = 0; i < 14; i++){
					frontFaces[i].classList.remove("flipped","match");
					backFaces[i].classList.remove("flipped","match");
				
					var card = document.querySelector("#card" + i);
					card.style.left = i % 7 === 0 ? 5 + "px" : i % 7 * 165 + 5 + "px";
					card.style.top = i < 7 ? 5 + "px" : 160 + "px";
													
					card.addEventListener("click",flipCard,false);
					frontFaces[i].style.background = "url('"+ images[i].src +"')";
					frontFaces[i].setAttribute("id",images[i].id);
					
					
				} 
				
				for(var i = 14; i < 28; i++){
					frontFaces[i].classList.remove("flipped","match");
					backFaces[i].classList.remove("flipped","match");
					
					var card = document.querySelector("#card" + i);
					card.style.left = i % 21 === 0 ? 5 + "px" : i % 7 * 165 + 5 + "px";
					card.style.top = i < 21 ? 315 + "px" : 470 + "px";
													
					card.addEventListener("click",flipCard,false);
					frontFaces[i].style.background = "url('"+ images[i].src +"')";
					frontFaces[i].setAttribute("id",images[i].id);
					
					
				} 
				modalGameOver.style.zIndex = -2;
				modalGameOver.removeEventListener("click",startGame,false);
			}
			
			function randomSort(oldArray){
				var newArray = [];
					while(newArray.length !== oldArray.length){
						var i = Math.floor(Math.random()*28);
							if(newArray.indexOf(oldArray[i]) < 0){
									newArray.push(oldArray[i]);
							}
					}
			return newArray;	
	}
		
function SomarPontos(){
	
	if(minutos < 1){
		contPontos = contPontos + 100;
		pontos.innerHTML ="0"+contPontos;
	}
	if(minutos >= 1 && minutos < 2){
		contPontos = contPontos + 80;
		pontos.innerHTML ="0"+contPontos;
	}
	if(minutos >= 2){
		contPontos = contPontos + 60;
		pontos.innerHTML ="0"+contPontos;
	}
	
		
		}
		
				
	function flipCard(){
	if (testar == 0 ){
		inicio();
	}
		testar++;
	
		if(flippedCards.length < 2){
			var faces = this.getElementsByClassName("face");

				if(faces[0].classList.length > 2){
					return;
				}
				
			faces[0].classList.toggle("flipped");
			faces[1].classList.toggle("flipped");
			
						
			flippedCards.push(this);

			if(flippedCards.length === 2){
				if(flippedCards[0].childNodes[3].id === flippedCards[1].childNodes[3].id){
						flippedCards[0].childNodes[1].classList.toggle("match");
						flippedCards[0].childNodes[3].classList.toggle("match");
						flippedCards[1].childNodes[1].classList.toggle("match");
						flippedCards[1].childNodes[3].classList.toggle("match");
						
						matchCardSign();
						
						matches ++;			
						flippedCards = [];
						
						if(matches === 14){
							gameOver();
						}
				}
				
			}
		} else {
			flippedCards[0].childNodes[1].classList.toggle("flipped");
			flippedCards[0].childNodes[3].classList.toggle("flipped");
			flippedCards[1].childNodes[1].classList.toggle("flipped");
			flippedCards[1].childNodes[3].classList.toggle("flipped");

			flippedCards = [];
			
		}
	}
	
	
	function gameOver(){
		modalGameOver.style.zIndex = 99;
		modalGameOver.addEventListener("click",startGame,false);
		getDados();
		parar();
		reinicio ();
	}
	
	function matchCardSign(){
		SomarPontos();
		imgMatchSign.style.zIndex = 1;
		imgMatchSign.style.top = 150 + "px";
		imgMatchSign.style.visibility = "visible";
		imgMatchSign.style.opacity = 0;
		setTimeout(function(){
		imgMatchSign.style.zIndex = -1;
		imgMatchSign.style.visibility = "hidden";
		imgMatchSign.style.top = 250 + "px";
		imgMatchSign.style.opacity = 1;
		},1500);
	}

	
	}());
	
	
	
	