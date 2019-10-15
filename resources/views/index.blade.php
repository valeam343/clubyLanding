<!DOCTYPE html>
<html lang="es">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!--<link rel="stylesheet" type="text/css" href="{{asset('cluby/Montserrat-Bold.ttf')}}">-->
  <title></title>
  <link rel="stylesheet" type="text/css" href="{{asset('/css/index.css')}}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="{{asset('/css/slick.css')}}">
  <link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css"/>
  <!--<link rel="stylesheet" type="text/css" href="{{asset('/css/slick-theme.css')}}">-->
  
  <style type="text/css">

    * {
      box-sizing: border-box;
  }
  .slider {
      width: 85%;
      margin: 100px auto;
  }
  .slick-slide {
      margin: 0px 20px;
  }
  .slider.variable-width{
      width:100%;
  }
  .slick-prev:before,
  .slick-next:before {
      color: red;

  }

  .slick-slide img{
      max-width: 100%;
      width: auto!important;
  }
  .slick-slide {
      transition: all ease-in-out .3s;
      opacity: 1;
  }

  .slick-active {
      opacity: 1;
  }
  .slick-current {
      opacity: 1;
  }


</style>
</head>
<body>
  <div class="alert alert-danger print-error-msg fixed-top" id="idAlerta" role="alert" style="display:none">
    <ul></ul>
</div>
<div class="alert alert-success print-success-msg fixed-top" id="idAlertas" role="alert" style="display:none; text-align: center;">
    <ul></ul>
</div>
<div class="conteiner-fluid" id="header">
    <img src="cluby/ManchasHome/mancha (1).svg" id="mancha1">
    <img src="cluby/ManchasHome/mancha (2).svg" id="mancha2">
    <img src="cluby/ManchasHome/mancha (3).svg" id="mancha3">
    <img src="cluby/ManchasHome/mancha (4).svg" id="mancha4">
    <div class="row">
      <div class="col-sm-3">
        <img class="img-fluid" src="cluby/clubyLogo.svg" id="logo">
        <div class="row" style="height: 15px;"></div>
    </div>
    <div class="col-sm-9">
        <p id ="textoheader">¡Hola! Te damos la bienvenida a <strong>CLUBY</strong>, el Marketplace ideal para todos aquellos proveedores profesionales que desean ofrecer las mejores opciones académicas para la comunidad infantil local y para todos los padres de familia que buscan brindar a sus hijos clases extra escolares que complementen el desarrollo físico y cognitivo de sus peques.</p>
    </div>
</div>
</div>

<div class="container-fluid">

    <div class="row" id="botones">
      <div class="col-sm-6" id="btnpadres">
        <h2 id="textobotones">Bienvenidos padres de familia</h2>
        <p>Con Cluby conocerás las diferentes ofertas en actividades, talleres y campamentos orientados a desarrollar el potencial de tu hijo disponibles en la ciudad.</p>
        <button type="button" id="btnSecPadres" class="btn btn-info"><a href="#formpadre2"><strong style="color: white;">Conoce más</strong></a></button>
    <div class="row" style="height: 15px;"></div>
    </div>
    <div class="col-sm-6" id="btnproveedores">
        <h2 id="textobotones">Bienvenidos Proveedores de actividades</h2>
        <p>Registrarte como proveedor profesional, bien seas institución o independiente. ¡Es fácil y sencillo!</p>
        <br>
        <button type="button" id="btnSecProveedores" class="btn btn-info"><a href="#secprov"><strong style="color: white;">Conoce más</strong></a></button>      
    </div>
</div>
<div class="row" id="formpadre2">
  <div class="col-sm-12" id="divpadres">
    <h1 class ="titulo">Bienvenidos padres de familia</h1>
    <p id="textopadres">Con <strong>Cluby</strong> conocerás las diferentes ofertas en actividades, talleres y campamentos orientados a desarrollar el potencial de tu hijo disponibles en la ciudad.</p>
    <!--<img class="img-fluid" src="cluby/Imagenes Body/Padres.png" id="padrespng">-->
</div>
<div class="col-sm-12" id="divmisionverde">
    <p id="textomision"><bold>Nuestra misión es facilitarte el acceso a un sinfín de actividades desde campamentos de verano, cursos, talleres, actividades deportivas, recreativas y toda clase de actividades para tus hijos, todo en un solo lugar.</bold></p>
</div>
</div>

<div class="row">
  <div class="col-sm-12" id="grad1"></div>
</div>
<div class="row">
  <div class="col-sm" id="secgif">
    <div id="lottie" class="lottie"></div>
</div>
</div>
<div class="row">
  <div class="col-sm-6" id="formpadre1">
    <h1 id="subtituloFormPadres">¡Navegar en <strong>Cluby</strong>, es sencillo!</h1>
    <table id="tablaPadres">
      <tr>
        <td class="imgFormPadres">
          <img class="img-fluid" src="cluby/lupa.svg" >
      </td>
      <td class="parrafoFormPadre">
          <p>Elige la caegoría<br> de tu interes</p>
      </td>
  </tr>
  <tr>
    <td class="imgFormPadres"><img class="img-fluid" src="cluby/estrellas.svg" id="estrellaspng"></td>
    <td ><p id="textoestrellas">Descubre las diferentes<br> ofertas y lee reseñas</p></td>
</tr>
<tr>
    <td class="imgFormPadres" class="imgFormPadres"><img class="img-fluid" src="cluby/foco.svg" id="focopng"></td>
    <td><p>Inscríbelos en segundos,<br> y desarrolla su potencial</p></td>
</tr>
</table>

</div>
<div class="col-sm-6">
    <h1 id="subtituloFormPadres2">Regístrate para<br> recibir más información</h1>
    <form id="formpadres">
                  <!--<div class="alert alert-danger print-error-msg" style="display:none">
                         <ul></ul>
                     </div>-->
                     <div class="form-group">
                        <input type="text"  id="sNombre" autocomplete="off" placeholder="NOMBRE"> <img id="imgnom" src="{{asset('/cluby/Usuario.svg')}}">
                    </div>
                    <div class="form-group">
                        <input type="number"  id="sTelefono" autocomplete="off" placeholder="TELÉFONO"> <img id="imgtel" src="{{asset('/cluby/Celullar.svg')}}">
                    </div>
                    <div class="form-group">
                        <input type="email"  id="sCorreo" autocomplete="off" placeholder="CORREO"><img id="imgcorr" src="{{asset('/cluby/Correo.svg')}}">
                    </div>
                    <button type="button" id="btnFormPadres" class="button" >ENVIAR</button>
                    <br>

                </form>
            </div>
        </div>
        <div class="row">
          <div class="col-sm" id="slider">
            <div class="slider-area slider">
               <div class="slider variable-width myslider ">
                  <div>
                    <img class="img-fluid" src="{{asset('cluby/carretes/Aprendizaje.png')}}">
                </div>
                <div>
                    <img class="img-fluid" src="{{asset('cluby/carretes/artes plasticas.png')}}">
                </div>
                <div>
                    <img class="img-fluid" src="{{asset('cluby/carretes/Artes-escénicas.png')}}">
                </div>
                <div>
                    <img class="img-fluid" src="{{asset('cluby/carretes/baile.png')}}" alt="slide 4">
                </div>
                <div>
                    <img class="img-fluid" src="{{asset('cluby/carretes/cluby-actividadesparaniños02.png')}}" alt="slide 5">
                </div>
                <div>
                    <img class="img-fluid" src="{{asset('cluby/carretes/cocina.png')}}" alt="slide 6">
                </div>
                <div>
                    <img class="img-fluid" src="{{asset('cluby/carretes/Deportes.png')}}" alt="slide 7">
                </div>
                <div>
                    <img class="img-fluid" src="{{asset('cluby/carretes/ecología.png')}}" alt="slide 8">
                </div>
                <div>
                    <img class="img-fluid" src="{{asset('cluby/carretes/Estimulación-temprana.png')}}" alt="slide 9">
                </div>
                <div>
                    <img class="img-fluid" src="{{asset('cluby/carretes/idioma.png')}}" alt="slide 10">
                </div>
                <div>
                    <img class="img-fluid" src="{{asset('cluby/carretes/musica.png')}}" alt="slide 11">
                </div>
                <div>
                    <img class="img-fluid" src="{{asset('cluby/carretes/tecnologia.png')}}" alt="slide 12">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6" id="maestro1">
      <img src="cluby/Imagenes Body/Maestro.png" class="img-fluid">
  </div>
  <div class="col-sm-6">
      <table id="tblMaestro">
        <td>
        </td>
        <td>
          <h2 class="bottom titulo" id="secprov">¿Brindas actividades infantiles?</h2>
          <h4 class="bottom">Anuncia tu actividad ahora</h4>
          <p class="bottom">Registrate como proveedor profesional, bien seas<br> institucion o independiente.<br>
          ¡Es fácil y sencillo!</p>
      </td>
  </table>
</div>
  <!--
  <div class="col-sm-4" id="maestro1">
    
  </div>
  <div class="col-sm-8" id="maestro">
    
  </div>-->
</div>
<div class="row">
  <div class="col-sm" id="degradado">
    <p><strong>CLUBY</strong> cuenta con un amplio registro de padres de familia que estan en la búsqueda constante<br> de actividades nueva
    que fomenten el desarrollar lo de sus hijos y definitivamente</p>
    <h3>¡TIENES QUE ESTAR EN LA LISTA DE PROVEEDORES!</h3>
</div>
</div>
<div class="row">
  <div class="col-sm" id="grad2"></div>
</div>
<div class="row">
  <div class="col-sm-8">
    <table id="tblMaestro">
      <tr>
        <td>
          <h2 class="bottom titulo2"><strong>SE DESCUBIERTO, OBTÉN NUEVOS<br> ALUMNOS Y MÁS INGRESOS</strong></h2>
          <p>Establece la frecuencia que convenga (diaria, semanal o mensual), fija el<br>
            precio y el tamaño del grupo, administra todos los detalles estés donde<br>
        estés con nuestra cómoda aplicación móvil.</p>
    </td>
</tr>
</table>
</div>
<div class="col-sm-4">
    <img id="imgtutor" class="img-fluid" src="{{asset('/cluby/Imagenes Body/tutor.png')}}">
</div>
</div>
<div class="row" id="formproveedores">
  <div class="col-sm-6" id="formproveedores1">
    <h1 id="subtituloFormProveedor1">Regístrate para<br> recibir más información</h1>
    
    <form id="formproveedor" >

      <div class="form-group">
        <input type="text"  id="sNombrep" autocomplete="off"  placeholder="NOMBRE"> <img id="imgnomp" src="{{asset('/cluby/Usuario.svg')}}">
    </div>
    <div class="form-group">
        <input type="number"  id="sTelefonop" autocomplete="off" placeholder="TELÉFONO"> <img id="imgtelp" src="{{asset('/cluby/Celullar.svg')}}">
    </div>
    <div class="form-group">
        <input type="email"  id="sCorreop" autocomplete="off" placeholder="CORREO" ><img id="imgcorrp" src="{{asset('/cluby/Correo.svg')}}">
    </div>

    <button type="button" class="button" id="btnFormProve">ENVIAR</button>
</form> 
</div>
<div class="col-sm-6" id="formproveedores2">
    <h1 id="subtituloFormProveedor1">Estos son algunos beneficios<br> que <strong>CLUBY</strong> te ofrece:</h1>
    <table id="tablaproveedores">
      <tr>
        <td>
          <img class="img-fluid" src="cluby/diana.svg" >
      </td>
      <td>
          <p id="textolupa">Llegar a tu<br> público objetivo</p>
      </td>
  </tr>
  <tr>
    <td><img class="img-fluid" src="cluby/altavoz.svg" id="estrellaspng"></td>
    <td><p id="textoestrellas">Herramientas de publicidad<br> y mercadotecnia</p></td>
</tr>
<tr>
    <td><img class="img-fluid" src="cluby/compu.svg" id="focopng"></td>
    <td><p id="textofoco">Tu plataforma online para<br> administrar tu negocio</p></td>
</tr>
</table>
</div>

</div>
</div>

<script
src="https://code.jquery.com/jquery-3.4.1.js"
integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="{{asset('/cluby/animacion.js')}}" type="text/javascript"></script>
<script src="{{asset('/js/slick.js')}}" type="text/javascript"></script>
<script type="text/javascript">
  $('.myslider').slick({
    dots: false,
    //variableWidth: true,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 3,
    autoplay: true,
    autoplaySpeed: 4000,
    responsive: [
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
        dots: false
    }
},
{
  breakpoint: 480,
  settings: {
    slidesToShow: 1,
    slidesToScroll: 1
}
}
    /*,
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
  }*/
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
      ]
  });
</script>
<script type="text/javascript">
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    $("#btnFormPadres").click(function(e){
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
      },success: function(data){
          //alert(result.success);
          //$("#idAlerta").append('<p>'+result.success+'</p>');
          //$("#idAlerta").show();
          if($.isEmptyObject(data.error)){
            mensageSuccess(data.success);
        }else{
            mensageError(data.error);
        }
    },error: function (data){
      console.log("error: ", data);
  }


});
  });
    function mensageError(msg){

      $(".print-error-msg").find("ul").html('');

      $.each( msg, function( key, value ) {
        $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
    });
      $(".print-error-msg").show(1000);

      setTimeout(function(){
        $(".print-error-msg").hide(1000);
    }, 3000);
  }
  function mensageSuccess(msg){

      $(".print-success-msg").find("ul").html('');+
      $(".print-success-msg").find("ul").append('<p>'+msg+'</p>');
      $(".print-success-msg").show(1000);

      setTimeout(function(){
        $(".print-success-msg").hide(1000);
    }, 3000);
  }
  $("#btnFormProve").click(function(e){
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
      },success: function(data){
            //alert(result.success);
            //$("#idAlerta").append('<p>'+result.success+'</p>');
            //$("#idAlerta").show();
            if($.isEmptyObject(data.error)){
              mensageSuccess(data.success);
          }else{
              mensageError(data.error);
          }
      },error: function (data){
        console.log("error: ", data);
    }


});
  });
</script>
</body>

<footer id="sticky-footer" class="py-4 bg-dark text-white-50">
  <div class="container-fluid text-center">
     <div class="row">
       <div class="col-sm-3" id="footer1">
         <a href="#"><img class="img-fluid" src="cluby/facebook.svg" id="facebook"></a>
         <a href="#"><img class="img-fluid" src="cluby/blogger.svg" id="blogger"></a>
     </div>
     <div class="col-sm-9">
         <div id="footer2">
           <p id="textofooter">Próximamente descarga las aplicaciones</p>
           <a href="#"><img class="img-fluid" src="cluby/google.svg" id="playstore"></a>
           <a href="#"><img class="img-fluid" src="cluby/app store.svg" id="appstore"></a>
       </div>
   </div>
</div>
</div>
</footer>

</html>
