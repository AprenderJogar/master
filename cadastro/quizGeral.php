<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <title>Quiz!</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- Bootstrap Css -->
    <link href="../bootstrap-assets/css/bootstrap.css" rel="stylesheet">
	<!-- Custom Css -->
    <link href="../css/custom.css" rel="stylesheet">

    <!-- Style -->
    <link href="../plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="../plugins/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="../plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
    <link href="../plugins/Lightbox/dist/css/lightbox.css" rel="stylesheet">
    <link href="../plugins/Icons/et-line-font/style.css" rel="stylesheet">
    <link href="../plugins/animate.css/animate.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <!-- Icons Font -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Preloader
	============================================= -->
    <!--<div class="preloader"><i class="fa fa-circle-o-notch fa-spin fa-2x"></i></div>-->
    <!-- Header
	============================================= -->
	<div class="imagemFundo">
		<div class="block" style="color: black;">
			<form name="crono">
				<input type="text" size="7" style="background-color: transparent; border: none; color: #fff;" name="face" title="Cronómetro">
				<script language="JavaScript">
				
					var timeCrono; 
					var hor = 0;
					var min = 0;
					var seg = 0;
					var startTime = new Date(); 
					var start = startTime.getSeconds();
					
					StartCrono();
					function StartCrono() {
						if (seg + 1 > 59) { 
							min+= 1;
						}
						
						if (min > 59) {
							min = 0;
							hor+= 1;
						}
						
						var time = new Date(); 
						
						if (time.getSeconds() >= start) {
							seg = time.getSeconds() - start;
						}else{
							seg = 60 + (time.getSeconds() - start);
						}
						timeCrono= (hor < 10) ? "0" + hor : hor;
						timeCrono+= ((min < 10) ? ":0" : ":") + min;
						timeCrono+= ((seg < 10) ? ":0" : ":") + seg;
						document.crono.face.value = timeCrono;
						setTimeout("StartCrono()",1000);
					}
				</script>
			</form>
		</div>
		
		<div class="block">
			<label>1) Para lavar seu carro, Fernanda precisa comprar uma mangueira que vá da torneira do corredor de sua casa até a calçada em frente a ela. Sabendo que essa
				   distância mede 500 centímetros, Qual o tamanho ideal de mangueira que ela deve comprar?</label><br>
			<div class="radio">
				<label>
					<input type="radio" name="optionsRadios" id="optionsRadios1" value="1">
					1 metro
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="optionsRadios" id="optionsRadios2" value="2">
					7 metros
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="optionsRadios" id="optionsRadios2" value="3">
					4 metros
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="optionsRadios" id="optionsRadios2" value="4">
					1/2 metro
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="optionsRadios" id="optionsRadios2" value="5">
					1 metro e meio
				</label>
			</div>
			<a class="btn btn-default" href="primario.php">Sair</a>
			<a class="btn btn-default" href="">Proximo</a>
		</div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../bootstrap-assets/js/bootstrap.min.js"></script>
    <script src="../js/custom.js"></script>
    <!-- JS PLUGINS -->
    <script src="../plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="../js/jquery.easing.min.js"></script>
    <script src="../plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="../plugins/countTo/jquery.countTo.js"></script>
    <script src="../plugins/inview/jquery.inview.min.js"></script>
    <script src="../plugins/Lightbox/dist/js/lightbox.min.js"></script>
    <script src="../plugins/WOW/dist/wow.min.js"></script>
    <!-- GOOGLE MAP -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
</body>

</html>