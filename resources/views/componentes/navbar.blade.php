<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- Viewport Meta Tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/mdb.css" media="screen" /> 
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen" /> 
    <link rel="stylesheet" type="text/css" href="css/general.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" media="screen" href="assets/fonts/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" media="screen" href="assets/fonts/simple-line-icons.css">   
    <link rel="stylesheet" type="text/css" href="assets/css/colors/mblue.css" media="screen" /> 
    <link rel="stylesheet" href="css/jQuery.verticalCarousel.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">



    
</head>
<body>
        <ul class="nav  justify-content-end bg-cooking p-2" >
            <!--
                <li class="nav-item">
                    <a class="nav-link white-text" href="#!">Docentes</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link white-text" href="#!">Alumnos</a>
                </li>
            --><li class="nav-item ">
                    <a class="nav-link white-text sise-t-18" id="trabajo" href="{{ url('trabajo') }}">
                        <i class="fas fa-coffee mr-2"></i>Trabaja con Nosotros</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link white-text sise-t-18" id="trabajo" href="#!" data-toggle="modal" data-target="#fullHeightModalRight">
                        <i class="far fa-edit mr-2"></i>Matrícula</a>
                </li>
                <li class="mr-4 visiblew">

                </li>  
                      
                <li>
                        <li class="mr-4 visiblew"></li>
                        <form class="form-inline active-cyan-4">
                                <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Busqueda ..." aria-label="Search">
                                <i class="fa fa-search" aria-hidden="true"></i>
                        </form>
                </li>  
                <a class="mdl-button mdl-button-fa mdl-button--icon  white cook-color btn-tra pt-2 mr-2" mdbWavesEffect>
                        <i class="fab fa-twitter "></i>
                   </a> 
                   <li class="mr-4 visiblew"></li>
                   <a class="mdl-button mdl-button-fa mdl-button--icon white cook-color btn-tra pt-2 mr-2" mdbWavesEffect>
                       <i class="fab fa-facebook-f"> </i>
                   </a> 
                   <li class="mr-4 visiblew"></li>
                   <a class="mdl-button mdl-button-fa mdl-button--icon  white cook-color btn-tra pt-2 mr-2" mdbWavesEffect>
                       <i class="fab fa-youtube"> </i>
                   </a>
                   <li class="mr-4 visiblew"></li>
                   <a class="mdl-button mdl-button-fa mdl-button--icon  white cook-color btn-tra pt-2 mr-2" mdbWavesEffect>
                       <i class="fab fa-instagram"> </i>
                   </a>    
                        
                        
        </ul>
        <nav class="navbar navbar-expand-lg white white-text  " id="myHeader">
            
                <div class="container10">
                        <a href="" >
                                <div  style="left: 20px; width: 139px; position: absolute; top: 0px; z-index: 1200;" class="visiblew animated fadeInDown txtNew " >
                                    <img class="d-block ima-logo border-01 white" src="img/galeria/logo-cook.jpeg">     
                                </div>  
                        </a>
                        <div  style="left: 130px; width:auto; position: absolute; top: 15px; z-index: 1200;" class="visible-l-w animated fadeInDown txtNew  " >
                            <p class="sise-t-13 b-01  cook-color">INSTITUTO SUPERIOR GASTRONÓMICO</p>    
                        </div>
                        <div  style="left: 120px; width:auto; position: absolute; top: 35px; z-index: 1200;" class="visible-l-w animated fadeInDown txtNew  " >
                                        <p class="sise-t-30 f-360 cook-color">Cooking Gourmet</p>    
                        </div>
                
                    
      
                  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                          <i class="fas fa-bars black-text"></i>
                  </button>
                  <a href="" >
                        <div  style="left: 80px; width: 139px; position: absolute; top: 5px; z-index: 1200;" class="visibler  animated fadeInDown txtNew " >
                                <img class="   ima-logo-r " src="img/galeria/logo-cook.jpeg">      
                        </div>  
                    </a>
                <div  style="left: 120px; width:auto; position: absolute; top: 10px; z-index: 1200;" class="visibler  animated fadeInDown txtNew  " >
                        <p class="   sise-t-15 f-360 cook-color">Cooking Gourmet</p>     
                </div>

                 
                 
                  <div class="collapse navbar-collapse container float-right" id="navbarResponsive">
       
                    <ul class="navbar-nav ml-auto m-1  ">
                        
                        <li class="nav-item active bg-p360-nav">   
                            <a class="nav-link " href="{{ url('/') }}" id="nav-top-01"><span class="m-textplus-nav-0 p-2 font-weight-bold"> INICIO</span>
                            </a>
                        </li>    
                        <li class="nav-item dropdown mega-dropdown">
                            <a class="nav-link dropdown-toggle black-text" id="nav-top-01" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="m-textplus-nav-0 p-2 font-weight-bold">CARRERAS </span> </a>
                            <div class="dropdown-menu mega-menu row z-depth-1 bg-white-t" aria-labelledby="navbarDropdownMenuLink">
                                <div class="row">
                                    <div class="col-md-5 col-xl-3 sub-menu mt-5 mb-5 pl-4">
                                            <h6 class="sub-title p-sm mb-4 text-uppercase font-weight-bold dark-grey-text">Carreras</h6>
                                        <ol class="list-unstyled mx-4 dark-grey-text">
                                            <li class="sub-title text-uppercase mt-sm"><a class="menu-item" href="{{ url('gastronomia') }}">Gastronomia & Arte culinario</a></li>
                                            <li class="sub-title text-uppercase"><a class="menu-item" href="{{ url('panaderia') }}">Panadería & Pasteleria</a></li>
                                            <li class="sub-title text-uppercase"><a class="menu-item" href="{{ url('bar') }}">Bar Profesional</a></li>
                                        </ol>
                                    </div>
                                    <div class="col-md-7 col-xl-9">
                                        <div class="row">
                                            <div class="col-xl-6 mt-5 mb-4 pr-5 clearfix d-none d-md-block">
                                                <h6 class="sub-title p-sm mb-4 text-uppercase font-weight-bold dark-grey-text">Evento</h6>
                                                <!--Featured image-->
                                                <div class="view overlay pb-3">
                                                    <img src="img/galeria/centro.jpg" class="img-fluid z-depth-1" alt="First sample image">
                                                    <div class="mask rgba-white-slight flex-center">
                                                        <p></p>
                                                    </div>
                                                </div>
                                                <h4 class="mb-2"><a class="news-title" href="">Lorem ipsum dolor sit amet, consectetur isum adipisicing elit.</a></h4>
                                                <p class="font-small text-uppercase text-muted">By <a class="m-sm" href="#!">Anna Doe</a> - July 15, 2017</p>
                                            </div>
                                            <div class="col-xl-6 mt-5 mb-4 pr-5 clearfix d-none d-xl-block">
                                                <h6 class="sub-title p-sm mb-4 text-uppercase font-weight-bold dark-grey-text">Talleres</h6>
                                                <div class="news-single">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <!--Image-->
                                                            <div class="view overlay z-depth-1">
                                                                <img src="img/galeria/fondo-04.jpg" class="img-fluid" alt="Minor sample post image">
                                                                <div class="mask rgba-white-slight flex-center">
                                                                    <p></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <a class="news-title smaller mb-1" href="">Duis aute irure dolor reprehenderit in voluptate.</a>
                                                            <p class="font-small text-uppercase text-muted">July 14, 2017</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="news-single">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <!--Image-->
                                                            <div class="view overlay z-depth-1">
                                                                <img src="img/galeria/gal-01.jpg" class="img-fluid" alt="Minor sample post image">
                                                                <div class="mask rgba-white-slight flex-center">
                                                                    <p></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <a class="news-title smaller mb-1" href="">Tempore autem reiciendis iste nam dicta.</a>
                                                            <p class="font-small text-uppercase text-muted">July 14, 2017</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="news-single">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <!--Image-->
                                                            <div class="view overlay z-depth-1">
                                                                <img src="img/galeria/panaderia.jpg" class="img-fluid" alt="Minor sample post image">
                                                                <div class="mask rgba-white-slight flex-center">
                                                                    <p></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <a class="news-title smaller mb-1" href="">Eligendi dicta sunt amet, totam ea recusandae.</a>
                                                            <p class="font-small text-uppercase text-muted">July 14, 2017</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item bg-p360-nav ">
                        <a class="nav-link" id="nav-top-01" href="{{ url('noticia') }}"><span class="m-textplus-nav-0 p-2 font-weight-bold"> NOTICIA</span></a>
                        </li>
                        <li class="nav-item bg-p360-nav ">
                        <a class="nav-link" id="nav-top-01" href="{{ url('nosotros') }}"><span class="m-textplus-nav-0 p-2 font-weight-bold"> NOSOTROS</span></a>
                        </li>
                        <li class="nav-item bg-p360-nav ">
                        <a class="nav-link" id="nav-top-01" href="{{ url('contacto') }}"><span class="m-textplus-nav-0 p-2 font-weight-bold"> CONTACTANOS</span></a>
                        </li>
                        <li class="nav-item bg-p360-nav ">
                            <a class="nav-link" id="nav-top-01" href="{{ url('alumno') }}"><span class="m-textplus-nav-0 p-2 font-weight-bold"> TESTIMONIO</span></a>
                        </li>
                        
                    </ul>
                       
                    
                  </div>
                  
                </div>
      
        </nav>
 

            <!-- contenido -->     
            @yield('content')
            <!-- fin de contenido -->   
        <!--Carousel Wrapper-->



      


        
            

       

<br><br>

    <!-- Footer Section -->
    <footer class="bg-footer-01">
                <!-- Container Starts -->
                <div class="container">
                <!-- Row Starts -->
                <div class="row section">
                    <!-- Footer Widget Starts -->
                    <div class="footer-widget col-md-3 col-xs-12 wow fadeIn">
                    <h3 class="m-textplus-titulo-03 b-01 cook-text">
                        ACERCA DE 
                    </h3>
                    <p>
                        Etiam ornare condimentum massa et scelerisque. Mauris nibh ipsum, laoreet at venenatis ac, rutrum sed risus, 
                    </p> 
                    <p>Aliquam magna nibh, mattis a urna nec. Semper venenatis magna.</p>
                    <div class=" text-center">
                        <a class="mdl-button mdl-button-fa mdl-button--icon  indigo white-text btn-tra pt-2 mr-2" mdbWavesEffect>
                            <i class="fa fa-facebook "> </i>
                        </a> 
                        <a class="mdl-button mdl-button-fa mdl-button--icon  red white-text btn-tra pt-2 mr-2" mdbWavesEffect>
                            <i class="fab fa-google-plus "> </i>
                        </a> 
                        <a class="mdl-button mdl-button-fa mdl-button--icon  blue white-text btn-tra pt-2 mr-2" mdbWavesEffect>
                            <i class="fab fa-linkedin "> </i>
                        </a> 
                    
                    </div>
                            
                    </div><!-- Footer Widget Ends -->
                    
                    <!-- Footer Widget Starts -->
                    <div class="footer-widget col-md-3 col-xs-12 wow fadeIn" data-wow-delay=".2s">
                    <h3 class="m-textplus-titulo-03 b-01 cook-text">
                        FACEBOOK
                    </h3>
                    <ul class="recent-tweets">
                        <li class="tweet">
                        My <a href="#">@Quora</a>                
                        <span class="tweet-text">
                            answer to What's the best FAQ plugin for WordPress?
                        </span>
                        <a href="#">qr.ae/RFTbIGa</a> 

                        </li>
                        
                        
                        <li class="tweet">
                        WPB Advanced FAQ | Probably The Best WordPress FAQ Plugin <a href="#">wpbean.com/wpb-advanced-faq-pr…</a>               
                        <span class="tweet-text">
                            via
                        </span>
                        <a href="#">@wpbean</a> 
                        <span class="tweet-date red-text">
                            August 19, 2017 8:49 am
                        </span>
                        </li>
                        
                        
                    </ul>
                    </div><!-- Footer Widget Ends -->
                    <a href="#" id="js_up" class="boton-subir border">
                            <i class="fas fa-angle-up" aria-hidden="true"></i>
                     </a>


                    <!-- Footer Widget Starts -->
                    <div class="footer-widget col-md-3 col-xs-12 wow fadeIn" data-wow-delay=".5s">
                    <h3 class="m-textplus-titulo-03 b-01 cook-text">
                        GALERIA
                    </h3>
                    <div class="plain-flicker-gallery">
                            <a href="#" title="Pan Masala"><img src="https://mdbootstrap.com/img/Photos/Others/img%20(27).jpg" alt=""></a>
                            <a href="" title="Apple Keyboard"><img src="https://mdbootstrap.com/img/Photos/Others/images/87.jpg" alt=""></a>
                            <a href="" title="Apple Keyboard"><img src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(45).jpg" alt=""></a>
                            <a href="" title="Hard Working"><img src="https://mdbootstrap.com/img/Photos/Others/img%20(29).jpg" alt=""></a>
                            <a href="" title="Smile"><img src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(45).jpg" alt=""></a>
                            <a href="" title="Puzzle"><img src="https://mdbootstrap.com/img/Photos/Others/img%20(27).jpg" alt=""></a>
                        </div>
                    </div><!-- Footer Widget Ends -->
        
                    <!-- Footer Widget Starts -->
                    <div class="footer-widget col-md-3 col-xs-12 wow fadeIn" data-wow-delay=".8s">
                    <h3 class="m-textplus-titulo-03 b-01 cook-text">
                        SUBSCRIBETE 
                    </h3>
                    <div class="contact-us">
                        <p>Tellus aliquam at. Pellentesque gravida vel eros et pretium</p>
                        <form>
                        <div class="form-group">
                        <input type="text" class="form-control white" id="exampleInputName2" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                        <input type="email" class="form-control white" id="exampleInputEmail2" placeholder="Enter your email">
                        </div>
                        <button type="submit" class="btn btn-tra bg-cooking mn-t-01 mt-4">Registrate</button>
                    </form>
                    </div>
                    </div><!-- Footer Widget Ends -->
                </div><!-- Row Ends -->
                </div><!-- Container Ends -->
                
                <!-- Copyright -->
                <div id="copyright" class="cook-text bg-cooking">
                <div class="container text-center p-2">

                        <p class="copyright-text white-text sise-t-17">
                        ©  2018 Todos los derechos reservados 
                        <a href="#" class="white-text b-01 bg-sli-f pr-4 pl-4 pt-2 pb-2 redondear">
                            <i class="fas fa-cloud ml-2 mr-2"></i>
                            <span class="b-01">
                                    FreeCloud
                            </span>   
                        </a>
                        </p>
                </div>
                </div>
                <!-- Copyright  End-->
                
    </footer>
 
    <!-- Modal -->
 <!-- Full Height Modal Right -->
 
    
</body>
</html>

<script src="js/jquery-3.2.1.min.js">
    
</script>
<script src="js/bootstrap.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/mdb.js"></script>

<!--     conten    
<script>

    $("#hn").click(function () {
        $("#zhifubaoDiv").toggle()
        // $("#").show();   
    });

 <a class="menu_jyclass" id="hn" >arriba</a>
        
      
      <div id="zhifubaoDiv"  style="display: none;">1111111111111</div>


</script>-->
 
<script>
        new WOW().init();   
 </script>

<!-- scrip de carosuel vertical -->
<script src="js/jQuery.verticalCarousel.js"></script>
<script>
    $(".verticalCarousel").verticalCarousel({
        currentItem: 1,
        showItems: 3,
    });
</script><script type="text/javascript">

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-36251023-1']);
_gaq.push(['_setDomainName', 'jqueryscript.net']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

</script>
<script>
    window.onscroll = function() {myFunction()};
    
    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;
    
    function myFunction() {
      if (window.pageYOffset >= sticky) {
        header.classList.add("sticky");
      } else {
        header.classList.remove("sticky");
      }
    }
</script>
<!-- script para que funcione al 100% el botón ir arriba -->
<script>
//invocamos al objeto (window) y a su método (scroll), solo se ejecutara si el usuario hace scroll en la página
$(window).scroll(function(){
  if($(this).scrollTop() > 300){ //condición a cumplirse cuando el usuario aya bajado 301px a más.
    $("#js_up").slideDown(300); //se muestra el botón en 300 mili segundos
  }else{ // si no
    $("#js_up").slideUp(300); //se oculta el botón en 300 mili segundos
  }
});

//creamos una función accediendo a la etiqueta i en su evento click
$("#js_up i").on('click', function (e) { 
  e.preventDefault(); //evita que se ejecute el tag ancla (<a href="#">valor</a>).
  $("body,html").animate({ // aplicamos la función animate a los tags body y html
    scrollTop: 0 //al colocar el valor 0 a scrollTop me volverá a la parte inicial de la página
  },700); //el valor 700 indica que lo ara en 700 mili segundos
  return false; //rompe el bucle
});
</script>