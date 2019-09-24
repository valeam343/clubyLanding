<!DOCTYPE html>
<html>
<head class="header">
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{asset('cluby/Montserrat-Bold.ttf')}}">
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('/css/home.css')}}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<!-- navbar -->  
	<nav class="navbar navbar-dark fixed-top navbar-expand-md navbar-no-bg">
		<div class="container">
			<a class="navbar-brand" href="index.html">Bootstrap 4 Navbar</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link scroll-link" href="#home">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link scroll-link" href="#section-1">Padres</a>
					</li>
					<li class="nav-item">
						<a class="nav-link scroll-link" href="#section-2">Proveedores</a>
					</li>
					<li class="nav-item">
						<a class="nav-link scroll-link" href="#section-3">Contacto</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- end navbar-->
	<!--home degradado-->    
	<div id="home">
		<img src="cluby/clubyLogo.svg" id="logo">
		<img src="cluby/ManchasHome/mancha (1).svg" id="mancha1">
		<img src="cluby/ManchasHome/mancha (2).svg" id="mancha2">
		<img src="cluby/ManchasHome/mancha (3).svg" id="mancha3">
		<img src="cluby/ManchasHome/mancha (4).svg" id="mancha4">
		<div>
			<p id ="headcluby">¡Hola! Te damos la bienvenida a <strong>CLUBY</strong>, el Marketplace ideal para todos aquellos proveedores profesionales
				que desean ofrecer las mejores opciones academicas para la comunidad infatil local y para todos los padres de
				familia que buscan brindar a sus hijos clases extraescolares que complementen el desarrollo fisico y cognitivo
			de sus peques.</p>
			<p ><strong>¿Listo para iniciar la aventura?</strong></p>
		</div>
	</div>
	<!--fin home-->
	<!--inicio padres/ proveedores-->
	<div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6" id="padres">
					<h2 class="txtPadre">Bienvenidos padres de familia</h2>
					<p>Con Cluby conocerás las diferentes ofertas en activi-
						dades, talleres y campamentos orientados a desarrollar
					el potencial de tu hijo disponibles en la ciudad.</p>
				</div>
				<div class="col-sm-6" id="proveedores">
					<h2 class="txtPadre">Bienvenidos Proveedores de actividades</h2>
					<p>Registrarte como proveedor profesional, bien seas in-
						stitución o independiente.
					¡Es fácil y sencillo!</p>
				</div>
			</div>
		</div>
	</div>
	<!--padres/ proveedores-->
	<div  id="section-1">
		<div class="twocolordiv">
			<h1 id="titulopadres">Bienvenidos padres de familia</h1>
			<p id="textopadres">Con Cluby conocerás las diferentes ofertas en actividades, talleres y campamentos orientados a desarrollar el potencial de tu hijo disponibles en la ciudad.</p>
			<img src="cluby/Imagenes Body/Padres.png" id="padrespng">
			<p id="textomision">Nuestra misión es facilitarte el acceso a un sinfín de actividades, desde campamentos de verano, cursos, talleres, actividades deportivas, recreativas y toda clase de actividades para tus hijos, todo en un solo lugar.</p>
		</div>
		<div id="degradadomision"></div>
	</div>
	<!--GIF-->
	<div class="row onecolordiv">
		<div class="col-12">
			<div id="lottie"></div>

		</div>
	</div>
	<!--FIN GIF-->
	<!--Form padres-->
	<div class="container-fluid onecolordiv">
		<div class="row">
			<div class="col-6">
				<h1 id="hpadres">¡Navegar en Cluby, es sencillo!</h1>
				<div>
					<img src="cluby/lupa.svg" id="lupapng">
					<p id="textolupa">Elige la caegoría de tu interes</p>
					<img src="cluby/estrellas.svg" id="estrellaspng">
					<p id="textoestrellas">Descubre las diferentes ofertas y lee reseñas</p>
					<img src="cluby/foco.svg" id="focopng">
					<p id="textofoco">Inscribelos en segundos y desarrolla su potencial</p>
				</div>
			</div>
			<div class="col-6">
				<form id="formpadres">

					<div class="form-group">
						<input type="text" class="form-control" id="sNombre" placeholder="NOMBRE"> <img id="imgnom" src="{{asset('/cluby/Usuario.svg')}}">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="sTelefono" placeholder="TELÉFONO"> <img id="imgtel" src="{{asset('/cluby/Celullar.svg')}}">
					</div>
					<div class="form-group">
						<input type="email" class="form-control" id="sCorreo" placeholder="CORREO"><img id="imgcorr" src="{{asset('/cluby/Correo.svg')}}">
					</div>
					<button type="button" id="btnPadres" class="btn draw-border">Submit</button>
				</form>
			</div>
		</div>	
	</div>

	<!--FIN form padres-->

	<div class="padding">
		<!--SECCION COURUSEL-->
		<div class="container-fluid">
			<div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="3000">
				<div class="carousel-inner row w-10 mxauto" role="listbox">
					<div class="carousel-item col-md-4 active">
						<img class="img-fluid mx-auto d-block" src="{{asset('cluby/carretes/Aprendizaje.png')}}" alt="slide 1">
					</div>
					<div class="carousel-item col-md-4">
						<img class="img-fluid mx-auto d-block" src="{{asset('cluby/carretes/artes plasticas.png')}}" alt="slide 2">
						<!--<img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=2" alt="slide 2">-->
					</div>
					<div class="carousel-item col-md-4">
						<img class="img-fluid mx-auto d-block" src="{{asset('cluby/carretes/Artes-escénicas.png')}}" alt="slide 3">
						<!--<img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=3" alt="slide 3">-->
					</div>

					<div class="carousel-item col-md-4">
						<img class="img-fluid mx-auto d-block" src="{{asset('cluby/carretes/baile.png')}}" alt="slide 4">
					</div>
					<div class="carousel-item col-md-4">
						<img class="img-fluid mx-auto d-block" src="{{asset('cluby/carretes/cluby-actividadesparaniños02.png')}}" alt="slide 5">
					</div>
					<div class="carousel-item col-md-4">
						<img class="img-fluid mx-auto d-block" src="{{asset('cluby/carretes/cocina.png')}}" alt="slide 6">
					</div>
					<div class="carousel-item col-md-4">
						<img class="img-fluid mx-auto d-block" src="{{asset('cluby/carretes/Deportes.png')}}" alt="slide 7">
					</div>
					<div class="carousel-item col-md-4">
						<img class="img-fluid mx-auto d-block" src="{{asset('cluby/carretes/ecología.png')}}" alt="slide 7">
					</div>
					<div class="carousel-item col-md-4">
						<img class="img-fluid mx-auto d-block" src="{{asset('cluby/carretes/Estimulación-temprana.png')}}" alt="slide 7">
					</div>
					<div class="carousel-item col-md-4">
						<img class="img-fluid mx-auto d-block" src="{{asset('cluby/carretes/idioma.png')}}" alt="slide 7">
					</div>
					<div class="carousel-item col-md-4">
						<img class="img-fluid mx-auto d-block" src="{{asset('cluby/carretes/musica.png')}}" alt="slide 7">
					</div>
					<div class="carousel-item col-md-4">
						<img class="img-fluid mx-auto d-block" src="{{asset('cluby/carretes/tecnologia.png')}}" alt="slide 7">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
					<i class="fa fa-chevron-left fa-lg text-muted"></i>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
					<i class="fa fa-chevron-right fa-lg text-muted"></i>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<!--END SECCION COURUSE-->
	</div>
	<div class="onecolordiv">
		<img src="cluby/Imagenes Body/Maestro.png" id="maestropng">
		<h2 id="titulomaestro">¿Brindas actividades infantiles?</h2>
		<p id="subtitulomaestro">Anuncia tu actividad ahora</p>
		<p id="textomaestro">Registrate como proveedor profesional, bien seas institucion o independiente.
		¡Es fácil y sencillo!</p>
	</div>
	<div id="degradadoproveedores" class="onecolordiv">
		<p id="textoproveedores">CLUBY cuenta con un amplio registro de padres de familia que estan en la búsqueda constante de actividades nueva
		que fomenten el desarrollo de sus hijos y definitivamente</p>
		<h3 id="subproveedores">¡TIENES QUE ESTAR EN LA LISTA DE PROVEEDORES!</h3>
	</div>

	<div class="padding">
		<div id="divtutor" class="container-fluid" style="background: white" >
			<div class="row">
				<div class="col-md-8 col-sm-offset-2">
					<h1 id="titulotutor" class="text-center"><strong> SE DESCUBIERTO, OBTÉN NUEVOS ALUMNOS Y MÁS INGRESOS </strong></h1>
					<p id="parrafotutor">Establece la frecuencia que convenga (diaria, semanal o mensual), fija el
						precio y el tamaño del grupo, administra todos los detalles estés donde
					estés con nuestra cómoda aplicación móvil.az</p>
				</div>
				<div class="col-md-4">
					<img id="imgtutor" src="{{asset('/cluby/Imagenes Body/tutor.png')}}">
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid onecolordiv">
		<div class="row">
			<div class="col-6">
				<form id="formproveedor" class=" border border-secondary rounded">

					<div class="form-group">
						<input type="text" class="form-control" id="sNombrep" placeholder="NOMBRE"> <img id="imgnomp" src="{{asset('/cluby/Usuario.svg')}}">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="sTelefonop" placeholder="TELÉFONO"> <img id="imgtelp" src="{{asset('/cluby/Celullar.svg')}}">
					</div>
					<div class="form-group">
						<input type="email" class="form-control" id="sCorreop" placeholder="CORREO"><img id="imgcorrp" src="{{asset('/cluby/Correo.svg')}}">
					</div>
					<button type="button" id="btnProveedor" class="btn"><span>Submit</span></button>
					
				</form>
			</div>
			<div class="col-6">
				<h3 id="hpadres">Estos son alunos beneficios que Cluby te ofrece</h3>
				<div>
					<img src="cluby/diana.svg" id="lupapng">
					<p id="textolupa">Llegar a tu público objetivo</p>
					<img src="cluby/altavoz.svg" id="estrellaspng">
					<p id="textoestrellas">Herramientas de publicidad y mercadotecnia</p>
					<img src="cluby/compu.svg" id="focopng">
					<p id="textofoco">Tu plataforma online para administrar tu negocio</p>
				</div>
			</div>
		</div>	
	</div>
	<br>
	<br>

	
</body>
<footer class="container-fluid text-center">
	<div class="row">
		<div class="col-sm-4">
			<img id="imgfacebook" src="{{asset('/cluby//facebook.svg')}}">
			<img id="imgblog" src="{{asset('/cluby//blog.svg')}}">
		</div>
		<div class="col-sm-6">
			<h3 id="textoapp">Proximamente descarga las aplicaciones</h3>
			<img id="imgappstore" src="{{asset('/cluby//app store.svg')}}" > <img id="imgplaystore" src="{{asset('/cluby/google.svg')}}">

			<a href="#" class="fa fa-facebook"></a>
			<a href="#" class="fa fa-twitter"></a>
			<a href="#" class="fa fa-google"></a>
		</div>
		<div class="col-sm-4">

		</div>
	</div>
</footer>

<script
src="https://code.jquery.com/jquery-3.4.1.js"
integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="{{asset('cluby/animacion.js')}}" type="text/javascript"></script>
<script src="{{asset('/js/home.js')}}" type="text/javascript"></script>
<script type="text/javascript">
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
	$("#btnPadres").click(function(e){
		e.preventDefault();
		var nom = $("#sNombre").val();
		var tel = $("#sTelefono").val();
		var email  = $("#sCorreo").val();
		var tip = 'padre';
		console.log("entro");
		console.log("nombre:"+ nom+ "tel: "+ tel);
		$.ajax({
			type:'POST',
			url:"{{url('create')}}",
			data : {
				nombre : nom,
				telefono : tel,
				correo : email,
				tipo : tip
			},success: function(result){
				alert(result.success);
			},error: function (data){
				console.log("error: ", data);
			}


		});
	});

	$("#btnProveedor").click(function(){
		e.preventDefault();
		var nom = $("#sNombrep").val();
		var tel = $("#sTelefonop").val();
		var email  = $("#sCorreop").val();
		var tip = 'proveedor';

		$.ajax({
			type:'POST',
			url:"{{url('create')}}",
			data : {
				nombre : nom,
				telefono : tel,
				correo : email,
				tipo : tip
			},success: function(result){
				alert(result.success);
			},error: function (data){
				console.log("error: ", data);
			}

		});
	});
</script>
</html>