
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
 
 /**
  * Função para enviar os dados
  */
 function getDados() {
     
     // Declaração de Variáveis
   //  var nome   = document.getElementById("textonome").value;
	 var segundos = 20;
	 var minutos = 40;
     var result = document.getElementById("Resultado");
     var xmlreq = CriaRequest();
     
     // Exibi a imagem de progresso
     result.innerHTML = '<img src="Progresso1.gif"/>';
     
     // Iniciar uma requisição
     xmlreq.open("GET", "contato.php?Segundos=" + segundos + "&Minutos=" + minutos, true);
	 //xmlreq.open("GET", "contato.php?Minutos=" + minutos, true);
	 //xmlreq.open("GET", "contato.php?Segundos=" + segundos, true);
     // window.location.href='indexdois.html';
     // Atribui uma função para ser executada sempre que houver uma mudança de ado
     xmlreq.onreadystatechange = function(){
         
         // Verifica se foi concluído com sucesso e a conexão fechada (readyState=4)
         if (xmlreq.readyState == 4) {
             
             // Verifica se o arquivo foi encontrado com sucesso
             if (xmlreq.status == 200) {
                 result.innerHTML = xmlreq.responseText;
             }else{
                 result.innerHTML = "Erro: " + xmlreq.statusText;
             }
         }
     };
     xmlreq.send(null);
 }