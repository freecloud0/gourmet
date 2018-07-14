

@extends('componentes/navbar')

@section('content')

<!-- MODAL-->




<div id="carousel-example-2" class="container09-p carousel slide carousel-fade mn-t-01" data-ride="carousel">
    <!--Indicators--> 

    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item carousel-item-01 active ">
            <div class="view">
                <img class=" w-100-p" src="img/galeria/gastro-04.jpg" alt="Sample image">
                <div class="mask rgba-red-slight">

                    <div class="visibler text-center">
                        <div class="mt-4 " style="bottom:20%; position: absolute; left:50px;">
                            <p class="m-textplus-nav-02 sise-t-17 white-text mt-4">Carrera</p><br>
                        </div>
                        <div class="mt-4 " style="bottom:10%; position: absolute; left:50px;">
                            <p class="m-textplus-nav-02 sise-t-70 white-text mt-4">GASTRONOMÍA</p><br>
                        </div>
                        <div class=" mt-4 " style="bottom:25px; position: absolute; left:70px;">
                            <p class="m-textplus-nav-03  sise-t-45 text-center">& ARTE CULINARIO</p>
                        </div>
                        <div class="circulo-p-r p-2 text-center" style="bottom:25px; position: absolute; right:0px;">
                            <a href="" class="circulo-01 bg-sli-cook v-centro" id="nav-top-01" data-toggle="modal" data-target="#fullHeightModalRight">
                                <p class="m-textplus-nav-03 sise-t-15 sm-02" >Iniciar</p>
                            </a>
                        </div>
                    </div>
                    <div class="visiblew ">
                        
                        <div class=" " style="top:30%; position: absolute; left:50px;">
                            <div class=" mt-4">
                                <p class="m-textplus-nav-01 sise-t-30 ">CARRERA DE</p><br>
                                <p class="m-textplus-nav-02 sise-t-70 white-text">GASTRONOMÍA</p><br>
                                <p class="m-textplus-nav-03  sise-t-45 text-center">& ARTE CULINARIO</p>
                            </div>
                            <div class="d-flex justify-content-center mt-4">
                                <div class="circulo-p  p-2 text-center">
                                    <a href="" class="circulo-01 bg-sli-cook v-centro" id="nav-top-01" data-toggle="modal" data-target="#fullHeightModalRight">
                                        <p class="m-textplus-nav-03 sise-t-25 sm-02" >Iniciar</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="text-center  redondear  visiblew" style="bottom:130px; position:absolute!important; right:20px;width:auto;">
                            <!-- Card Dark -->
                            <div class="border-noti p-2 white redondear">
                                <!-- Card content -->
                                <p class="m-textplus-nav-03 cook-color sise-t-25 b-01">Inicio de</p>
                                <p class="m-textplus-nav-03 cook-color sise-t-25 mn-t-01 b-01">CLases</p>

                                <div class="card-body bg-cooking white-text redondear">
                                    <p class="m-textplus-nav-03 black-text sise-t-50 white-text">27</p>
                                    <p>de Agosto</p>
                                    <hr class="hr-light sm-02">
                                    <!-- Link -->
                                    <a href="{{ url('gastronomia') }}" class="white-text sm-02 "><h5>información <i class="fa fa-angle-double-right"></i></h5></a>
                                </div>
                            </div>
                        </div>

                    </div> 
                </div>
            </div>

        </div>
        <div class="carousel-item carousel-item-01">
            <!--Mask color-->
            <div class="view rgba-red-slight">
                <img class=" w-100-p" src="img/galeria/panaderia-02.jpg" alt="Sample image">
                <div class="mask "> 
                    <div class="visibler text-center">
                        <div class="mt-4 " style="bottom:20%; position: absolute; left:50px;">
                            <p class="m-textplus-nav-02 sise-t-17 white-text mt-4">Carrera</p><br>
                        </div>
                        <div class="mt-4 " style="bottom:10%; position: absolute; left:50px;">
                            <p class="m-textplus-nav-02 sise-t-70 white-text mt-4">PANADERÍA</p><br>
                        </div>
                        <div class=" mt-4 " style="bottom:25px; position: absolute; left:70px;">
                            <p class="m-textplus-nav-03  sise-t-45 text-center">& PASTELERÍA</p>
                        </div>
                        <div class="circulo-p-r p-2 text-center" style="bottom:25px; position: absolute; right:0px;">
                            <a href="" class="circulo-01 bg-sli-cook v-centro" id="nav-top-01" data-toggle="modal" data-target="#fullHeightModalRight">
                                <p class="m-textplus-nav-03 sise-t-15 sm-02" >Iniciar</p>
                            </a>
                        </div>
                    </div>
                    <div class="visiblew ">
                        
                        <div class=" " style="top:30%; position: absolute; left:50px;">
                            <div class=" mt-4">
                                <p class="m-textplus-nav-01 sise-t-30 ">CARRERA DE</p><br>
                                <p class="m-textplus-nav-02 sise-t-70 white-text">PANADERÍA</p><br>
                                <p class="m-textplus-nav-03  sise-t-45 text-center">& PASTELERÍA</p>
                            </div>
                            <div class="d-flex justify-content-center mt-4">
                                <div class="circulo-p  p-2 text-center">
                                    <a href="" class="circulo-01 bg-sli-cook v-centro" id="nav-top-01" data-toggle="modal" data-target="#fullHeightModalRight">
                                        <p class="m-textplus-nav-03 sise-t-25 sm-02" >Iniciar</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="text-center  redondear  visiblew" style="bottom:130px; position:absolute!important; right:20px;width:auto;">
                            <!-- Card Dark -->
                            <div class="border-noti p-2 white redondear">
                                <!-- Card content -->
                                <p class="m-textplus-nav-03 cook-color sise-t-25 b-01">Inicio de</p>
                                <p class="m-textplus-nav-03 cook-color sise-t-25 mn-t-01 b-01">CLases</p>

                                <div class="card-body bg-cooking white-text redondear">
                                    <p class="m-textplus-nav-03 black-text sise-t-50 white-text">27</p>
                                    <p>de Agosto</p>
                                    <hr class="hr-light sm-02">
                                    <!-- Link -->
                                    <a href="{{ url('panaderia') }}" class="white-text sm-02 "><h5>información <i class="fa fa-angle-double-right"></i></h5></a>
                                </div>
                            </div>
                        </div>

                    </div> 
                </div>
            </div>
            
        </div>
        <div class="carousel-item  carousel-item-01">
            <!--Mask color-->
            <div class="view rgba-red-slight">
                <img class="d-block w-100-p" src="img/galeria/bar-profe-02.jpg" alt="Sample image">
                <div class="mask ">
                        <div class="visibler text-center">
                            <div class="mt-4 " style="bottom:20%; position: absolute; left:50px;">
                                <p class="m-textplus-nav-02 sise-t-17 white-text mt-4">Carrera</p><br>
                            </div>
                            <div class="mt-4 " style="bottom:10%; position: absolute; left:50px;">
                                <p class="m-textplus-nav-02 sise-t-70 white-text mt-4">BAR PROFESIONAL</p><br>
                            </div>
                            <div class=" mt-4 " style="bottom:25px; position: absolute; left:70px;">
                                <p class="m-textplus-nav-03  sise-t-45 text-center">& WORKING FLAIR</p>
                            </div>
                            <div class="circulo-p-r p-2 text-center" style="bottom:25px; position: absolute; right:0px;">
                                <a href="" class="circulo-01 bg-sli-cook v-centro" id="nav-top-01" data-toggle="modal" data-target="#fullHeightModalRight">
                                    <p class="m-textplus-nav-03 sise-t-15 sm-02" >Iniciar</p>
                                </a>
                            </div>
                        </div>
                        <div class="visiblew ">
                            
                            <div class=" " style="top:30%; position: absolute; left:50px;">
                                <div class=" mt-4">
                                    <p class="m-textplus-nav-01 sise-t-30 ">CARRERA DE</p><br>
                                    <p class="m-textplus-nav-02 sise-t-70 white-text">BAR PROFESIONAL</p><br>
                                    <p class="m-textplus-nav-03  sise-t-45 text-center">& WORKING FLAIR</p>
                                </div>
                                <div class="d-flex justify-content-center mt-4">
                                    <div class="circulo-p  p-2 text-center">
                                        <a href="" class="circulo-01 bg-sli-cook v-centro" id="nav-top-01" data-toggle="modal" data-target="#fullHeightModalRight">
                                            <p class="m-textplus-nav-03 sise-t-25 sm-02" >Iniciar</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="text-center  redondear  visiblew" style="bottom:130px; position:absolute!important; right:20px;width:auto;">
                                <!-- Card Dark -->
                                <div class="border-noti p-2 white redondear">
                                    <!-- Card content -->
                                    <p class="m-textplus-nav-03 cook-color sise-t-25 b-01">Inicio de</p>
                                    <p class="m-textplus-nav-03 cook-color sise-t-25 mn-t-01 b-01">CLases</p>
    
                                    <div class="card-body bg-cooking white-text redondear">
                                        <p class="m-textplus-nav-03 black-text sise-t-50 white-text">27</p>
                                        <p>de Agosto</p>
                                        <hr class="hr-light sm-02">
                                        <!-- Link -->
                                        <a href="{{ url('bar') }}" class="white-text sm-02 "><h5>información <i class="fa fa-angle-double-right"></i></h5></a>
                                    </div>
                                </div>
                            </div>
    
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <div class="po-ca-01 visiblew">
        <ol class="carousel-indicators bg-otros redondear p-4">
            <li data-target="#carousel-example-2 " data-slide-to="0" class="active "></li>
            <li data-target="#carousel-example-2" data-slide-to="1" class=" "></li>
            <li data-target="#carousel-example-2" data-slide-to="2" class=" "></li>
        </ol>
    </div>
    <a class="carousel-control-prev visibler" href="#carousel-example-2" role="button" data-slide="prev">
        <i class="fas fa-angle-left sise-t-50 mt-4"></i>
      </a>
      <a class="carousel-control-next visibler" href="#carousel-example-2" role="button" data-slide="next">
        <i class="fas fa-angle-right sise-t-50 mt-4"></i>
      </a>
    
    <!--/.Controls-->
</div>

    <div class="container10 bg-cooking pt-4 pb-4">
        <div class="container08">
            <br>
                <p class="f-360 white-text text-center sise-t-30">Por que estudiar en Cooking Gourmet</p>
                <br>

                <ul >
                    <div class="row">
                        <div class="col-xl-6">
                                <li class="black-text sise-t-17"><span class="white-text">Staff de docentes Calificados</span></li>
                                <li class="black-text sise-t-17"><span class="white-text">Tarifas accesibles por rendimiento</span></li>
                                <li class="black-text sise-t-17"><span class="white-text">Staff de docentes Calificados</span></li>
                                <li class="black-text sise-t-17"><span class="white-text">Tarifas accesibles por rendimiento</span></li>
                                <li class="black-text sise-t-17 "><span class="white-text">Staff de docentes Calificados</span></li>
                        </div>
                        <div class="col-xl-6">
                                <li class="black-text sise-t-20"><span class="white-text">Staff de docentes Calificados</span></li>
                                <li class="black-text sise-t-20"><span class="white-text">Tarifas accesibles por rendimiento</span></li>
                                <li class="black-text sise-t-20"><span class="white-text">Staff de docentes Calificados</span></li>
                                <li class="black-text sise-t-20"><span class="white-text">Tarifas accesibles por rendimiento</span></li>
                                <li class="black-text sise-t-20"><span class="white-text">Staff de docentes Calificados</span></li>
                        </div>
                    </div>
                    
                    
                   
                </ul>
        </div>
    </div>
    
    <div class="container-f"></div>
    <br>
    <br >
    <div class="container08">
        <div class="row">
            <div class="col-xl-4 ">
                <div class="bg-cooking p-1 ">
                        <img src="img/galeria/che-03.jpg" class="d-block w-100" alt="">
                </div>
            </div>
            <div class="col-xl-4 mt-2">
                <div class="d-flex justify-content-center">
                        <div class="circulo bg-cooking p-2 text-center">

                            <div class=" circulo-01 v-centro ">
                                    <p class="m-textplus-nav-03 sise-t-25 sm-02" >Talleres</p>
                                    <p class="m-textplus-nav-01 sise-t-25 sm-02" >equipados con la más alta</p>
                                    <p class="m-textplus-nav-03 sise-t-25 sm-02" >tecnología en maquinaria</p>
                            </div>              
                        </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="bg-cooking p-1 ">
                    <img src="img/galeria/che-01.jpg" class="d-block w-100" alt="">
                </div>
            </div>
        </div>
    </div> 

    <div class="container08 mt-4">
        <div class="my-5">
            <h3 class="text-center f-360  sise-t-30 black-text">
                <span class="cook-color ">ELIGE EL PROGRAMA</span>
                    QUE MÁS TE APASIONE
            </h3>
        </div>
        <div class="row">
            <!--PERFIL Wrapper-->
            <div class="col-xl-6">
                
                <div class="view">
                        <img class="d-block w-100" src="img/galeria/cook-01.jpg" alt="Sample image">
                        <div class="mask">
                            <div class=" triangulo-i">
                                <div class="mt-4 bot-02">
                                    <div class=" espa-v">
                                        <p class="m-textplus-nav-01 sise-t-18 ml-4">CARRERA DE</p>
                                        <p class="m-textplus-nav-02 sise-t-30">GASTRONOMIA</p>
                                        <p class="m-textplus-nav-01 sise-t-18 ml-4">& ARTES CULINARIOS</p>
                                    </div>
                                </div>   
                            </div>
                            <div class="triangulo-d visiblew">
                                    <div class="d-flex justify-content-center mt-4">
                                        <div class="circulo-p  p-2 text-center">
                                            <a href="{{ url('gastronomia') }}" class="circulo-01 bg-sli-cook v-centro" id="nav-top-01">
                                                <p class="m-textplus-nav-03 sise-t-25 sm-02" >Ver <i class="fa fa-angle-double-right"></i></p>
                                            </a>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-xl-6">
                    <li class=" l-none text-center  visibler">
                        <a class="nav-link  redondear white-text border-blue" href="#" id="ins-01">
                            <span class="sise-t-19 b-01  ">
                                <i class="fas fa-share-square "></i>
                                    MALLA CURRICULAR
                            </span>
                        </a>
                    </li> 
                <p class="text-center f-360 cook-color sise-t-20">PERFIL PROFESIONAL</p>
                <ul>
                    <li>
                        <p class="f-360">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex facilis fuga dolor accusantium omnis amet quidem nemo ab. Quam corporis, pariatur architecto fugit nesciunt explicabo delectus cumque iste quibusdam expedita?</p>
                    </li>
                    <li>
                        <p class="f-360">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex facilis fuga dolor accusantium omnis amet quidem nemo ab. Quam corporis, pariatur architecto fugit nesciunt explicabo delectus cumque iste quibusdam expedita?</p>
                    </li>
                    <li>
                        <p class="f-360">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex facilis fuga dolor accusantium omnis amet quidem nemo ab. Quam corporis, pariatur architecto fugit nesciunt explicabo delectus cumque iste quibusdam expedita?</p>
                    </li>

                </ul> 
               
            </div>
        </div>
        <hr class="my-5 bg-cooking">
        <div class="row">
            <!--PERFIL Wrapper-->
            <div class="col-xl-6">
                    <li class=" l-none text-center  visibler">
                        <a class="nav-link  redondear white-text border-blue" href="#" id="ins-01">
                            <span class="sise-t-19 b-01  ">
                                <i class="fas fa-share-square "></i>
                                    MALLA CURRICULAR
                            </span>
                        </a>
                    </li> 
                <p class="text-center f-360 cook-color sise-t-20">PERFIL PROFESIONAL</p>
                <ul>
                    <li>
                        <p class="f-360">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex facilis fuga dolor accusantium omnis amet quidem nemo ab. Quam corporis, pariatur architecto fugit nesciunt explicabo delectus cumque iste quibusdam expedita?</p>
                    </li>
                    <li>
                        <p class="f-360">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex facilis fuga dolor accusantium omnis amet quidem nemo ab. Quam corporis, pariatur architecto fugit nesciunt explicabo delectus cumque iste quibusdam expedita?</p>
                    </li>
                    <li>
                        <p class="f-360">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex facilis fuga dolor accusantium omnis amet quidem nemo ab. Quam corporis, pariatur architecto fugit nesciunt explicabo delectus cumque iste quibusdam expedita?</p>
                    </li>

                </ul> 
               
            </div>
            <div class="col-xl-6">
                <div class="view">
                    <img class="d-block w-100" src="img/galeria/cook-02.jpg" alt="Sample image">
                    <div class="mask">
                        <div class=" triangulo-i">
                            <div class="mt-4 bot-02">
                                <div class=" espa-v">
                                    <p class="m-textplus-nav-01 sise-t-18 ml-4">CARRERA DE</p>
                                    <p class="m-textplus-nav-02 sise-t-30">PANADERÍA</p>
                                    <p class="m-textplus-nav-01 sise-t-18 ml-4">& PASTELERIA</p>
                                </div>
                            </div>   
                        </div>
                        <div class="triangulo-d visiblew">
                            <div class="d-flex justify-content-center mt-4">
                                <div class="circulo-p  p-2 text-center">
                                    <a href="{{ url('panaderia') }}" class="circulo-01 bg-sli-cook v-centro" id="nav-top-01">
                                        <p class="m-textplus-nav-03 sise-t-25 sm-02" >Ver <i class="fa fa-angle-double-right"></i></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-5 bg-cooking">
        <div class="row">
            <!--PERFIL Wrapper-->
            <div class="col-xl-6">
                
                <div class="view">
                        <img class="d-block w-100" src="img/galeria/cook-03.jpg" alt="Sample image">
                        <div class="mask">
                            <div class=" triangulo-i">
                                <div class="mt-4 bot-02">
                                    <div class=" espa-v">
                                        <p class="m-textplus-nav-01 sise-t-18 ">CARRERA DE</p>
                                        <p class="m-textplus-nav-02 sise-t-30 ml-4">BAR </p>
                                        <p class="m-textplus-nav-02 sise-t-30 ml-4">PROFESIONAL</p>
                                        <p class="m-textplus-nav-01 sise-t-18 ml-4">& WORKING FLAIR</p>
                                    </div>
                                </div>   
                            </div>
                            <div class="triangulo-d visiblew">
                                <div class="d-flex justify-content-center mt-4">
                                    <div class="circulo-p  p-2 text-center">
                                        <a href="{{ url('bar') }}" class="circulo-01 bg-sli-cook v-centro" id="nav-top-01">
                                            <p class="m-textplus-nav-03 sise-t-25 sm-02" >Ver <i class="fa fa-angle-double-right"></i></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-xl-6">
                    <li class=" l-none text-center  visibler">
                        <a class="nav-link  redondear white-text border-blue" href="#" id="ins-01">
                            <span class="sise-t-19 b-01  ">
                                <i class="fas fa-share-square "></i>
                                    MALLA CURRICULAR
                            </span>
                        </a>
                    </li> 
                <p class="text-center f-360 cook-color sise-t-20">PERFIL PROFESIONAL</p>
                <ul>
                    <li>
                        <p class="f-360">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex facilis fuga dolor accusantium omnis amet quidem nemo ab. Quam corporis, pariatur architecto fugit nesciunt explicabo delectus cumque iste quibusdam expedita?</p>
                    </li>
                    <li>
                        <p class="f-360">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex facilis fuga dolor accusantium omnis amet quidem nemo ab. Quam corporis, pariatur architecto fugit nesciunt explicabo delectus cumque iste quibusdam expedita?</p>
                    </li>
                    <li>
                        <p class="f-360">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex facilis fuga dolor accusantium omnis amet quidem nemo ab. Quam corporis, pariatur architecto fugit nesciunt explicabo delectus cumque iste quibusdam expedita?</p>
                    </li>

                </ul> 
                
            </div>
        </div>
    </div>                
    <div class="container08">
        <!--Carousel Wrapper-->
        <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
                <div class="my-5">
                        <h3 class="text-center f-360  sise-t-30 black-text">
                            <span class="cook-color ">TALLERER</span>
                             PRÁCTICO
                        </h3>
                    </div>
                
                <!--/.Controls-->
                <div class="carousel-inner mt-4" role="listbox">
                    <!--First slide-->
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-3">
                                    <!-- Card -->
                                    <div class="card card-cascade narrower card-ecommerce bg-cook">
                                    <!-- Card image -->
                                        <div class="view overlay white m-2">
                                            <img src="img/galeria/comida-01.png" class="card-img-top ima-ca-01" alt="sample photo">
                                            <a>
                                            <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>
                                    <!-- Card image -->
                                    <!-- Card content -->
                                    <div class="card-body white">
                                        <!-- Category & Title -->
                                        <a href="" class="text-muted text-center">
                                        <h5 class=""><strong class="cook-color">Mariscos</strong> </h5>
                                        </a>
                                        
                                        <!-- Description -->
                                        <p class="card-text text-ju">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit at voluptatum quod ea, necessitatibus pariatur iure sit quo vel rem. Aspernatur rem qui veniam impedit natus incidunt sequi mollitia et!
                                        </p>
                                        <!-- Card footer -->
                                        <div class="">
                                            <span class="float-left">
                                                    <button type="button" class="btn btn-tra red btn-sm mn-t-02">Leer más</button>
                                            </span>
                                            <span class="float-right">
                                                <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look ">
                                                <i class="fa fa-eye ml-3 blue-text"></i>     
                                                </a>
                                                <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                                                <i class="fa fa-heart ml-3 red-text"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Card content -->
                                    </div>
                                    <!-- Card -->
                            </div>
                            <div class="col-md-3 clearfix d-none d-md-block">
                                    <!-- Card -->
                                    <div class="card card-cascade narrower card-ecommerce bg-cook">
                                    <!-- Card image -->
                                        <div class="view overlay  white m-2">
                                            <img src="img/galeria/comida-01.png" class="card-img-top ima-ca-01" alt="sample photo">
                                            <a>
                                            <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>
                                    <!-- Card image -->
                                    <!-- Card content -->
                                    <div class="card-body white">
                                        <!-- Category & Title -->
                                        <a href="" class="text-muted text-center">
                                        <h5 class="bg-cook"><strong class="cook-color">Mariscos</strong> </h5>
                                        </a>
                                        
                                        <!-- Description -->
                                        <p class="card-text text-ju">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit at voluptatum quod ea, necessitatibus pariatur iure sit quo vel rem. Aspernatur rem qui veniam impedit natus incidunt sequi mollitia et!
                                        </p>
                                        <!-- Card footer -->
                                        <div class="">
                                            <span class="float-left">
                                                    <button type="button" class="btn btn-tra red btn-sm mn-t-02">Leer más</button>
                                            </span>
                                            <span class="float-right">
                                                <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look ">
                                                <i class="fa fa-eye ml-3 blue-text"></i>     
                                                </a>
                                                <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                                                <i class="fa fa-heart ml-3 red-text"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Card content -->
                                    </div>
                                    <!-- Card -->
                            </div>
                            <div class="col-md-3 clearfix d-none d-md-block">
                                    <!-- Card -->
                                    <div class="card card-cascade narrower card-ecommerce bg-cook">
                                    <!-- Card image -->
                                        <div class="view overlay white m-2">
                                            <img src="img/galeria/comida-03.png" class="card-img-top ima-ca-01" alt="sample photo">
                                            <a>
                                            <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>
                                    <!-- Card image -->
                                    <!-- Card content -->
                                    <div class="card-body white">
                                        <!-- Category & Title -->
                                        <a href="" class="text-muted text-center">
                                        <h5 class="bg-cook"><strong class="cook-color">Mariscos</strong> </h5>
                                        </a>
                                        
                                        <!-- Description -->
                                        <p class="card-text text-ju">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit at voluptatum quod ea, necessitatibus pariatur iure sit quo vel rem. Aspernatur rem qui veniam impedit natus incidunt sequi mollitia et!
                                        </p>
                                        <!-- Card footer -->
                                        <div class="">
                                            <span class="float-left">
                                                    <button type="button" class="btn btn-tra red btn-sm mn-t-02">Leer más</button>
                                            </span>
                                            <span class="float-right">
                                                <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look ">
                                                <i class="fa fa-eye ml-3 blue-text"></i>     
                                                </a>
                                                <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                                                <i class="fa fa-heart ml-3 red-text"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Card content -->
                                    </div>
                                    <!-- Card -->
                            </div>
                            <div class="col-md-3 clearfix d-none d-md-block">
                                    <!-- Card -->
                                    <div class="card card-cascade narrower card-ecommerce bg-cook">
                                    <!-- Card image -->
                                        <div class="view overlay white m-2">
                                            <img src="img/galeria/comida-03.png" class="card-img-top ima-ca-01" alt="sample photo">
                                            <a>
                                            <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>
                                    <!-- Card image -->
                                    <!-- Card content -->
                                    <div class="card-body white">
                                        <!-- Category & Title -->
                                        <a href="" class="text-muted text-center">
                                        <h5 class="bg-cook"><strong class="cook-color">Mariscos</strong> </h5>
                                        </a>
                                        
                                        <!-- Description -->
                                        <p class="card-text text-ju">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit at voluptatum quod ea, necessitatibus pariatur iure sit quo vel rem. Aspernatur rem qui veniam impedit natus incidunt sequi mollitia et!
                                        </p>
                                        <!-- Card footer -->
                                        <div class="">
                                            <span class="float-left">
                                                    <button type="button" class="btn btn-tra red btn-sm mn-t-02">Leer más</button>
                                            </span>
                                            <span class="float-right">
                                                <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look ">
                                                <i class="fa fa-eye ml-3 blue-text"></i>     
                                                </a>
                                                <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                                                <i class="fa fa-heart ml-3 red-text"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Card content -->
                                    </div>
                                    <!-- Card -->
                            </div>
                        </div>
                    </div>
                    <!--/First slide-->
                    <!--Second slide-->
                    <div class="carousel-item ">
                            <div class="row">
                                <div class="col-md-3">
                                        <!-- Card -->
                                        <div class="card card-cascade narrower card-ecommerce bg-cook">
                                        <!-- Card image -->
                                            <div class="view overlay white m-2">
                                                <img src="img/galeria/che-01.jpg" class="card-img-top ima-ca-01" alt="sample photo">
                                                <a>
                                                <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>
                                        <!-- Card image -->
                                        <!-- Card content -->
                                        <div class="card-body white">
                                            <!-- Category & Title -->
                                            <a href="" class="text-muted text-center">
                                            <h5 class="bg-cook"><strong class="cook-color">Mariscos</strong> </h5>
                                            </a>
                                            
                                            <!-- Description -->
                                            <p class="card-text text-ju">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit at voluptatum quod ea, necessitatibus pariatur iure sit quo vel rem. Aspernatur rem qui veniam impedit natus incidunt sequi mollitia et!
                                            </p>
                                            <!-- Card footer -->
                                            <div class="">
                                                <span class="float-left">
                                                        <button type="button" class="btn btn-tra red btn-sm mn-t-02">Leer más</button>
                                                </span>
                                                <span class="float-right">
                                                    <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look ">
                                                    <i class="fa fa-eye ml-3 blue-text"></i>     
                                                    </a>
                                                    <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                                                    <i class="fa fa-heart ml-3 red-text"></i>
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- Card content -->
                                        </div>
                                        <!-- Card -->
                                </div>
                                <div class="col-md-3 clearfix d-none d-md-block">
                                        <!-- Card -->
                                        <div class="card card-cascade narrower card-ecommerce bg-cook">
                                        <!-- Card image -->
                                            <div class="view overlay white m-2">
                                                <img src="img/galeria/che-02.jpg" class="card-img-top ima-ca-01" alt="sample photo">
                                                <a>
                                                <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>
                                        <!-- Card image -->
                                        <!-- Card content -->
                                        <div class="card-body white">
                                            <!-- Category & Title -->
                                            <a href="" class="text-muted text-center">
                                            <h5 class="bg-cook"><strong class="cook-color">Mariscos</strong> </h5>
                                            </a>
                                            
                                            <!-- Description -->
                                            <p class="card-text text-ju">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit at voluptatum quod ea, necessitatibus pariatur iure sit quo vel rem. Aspernatur rem qui veniam impedit natus incidunt sequi mollitia et!
                                            </p>
                                            <!-- Card footer -->
                                            <div class="">
                                                <span class="float-left">
                                                        <button type="button" class="btn btn-tra red btn-sm mn-t-02">Leer más</button>
                                                </span>
                                                <span class="float-right">
                                                    <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look ">
                                                    <i class="fa fa-eye ml-3 blue-text"></i>     
                                                    </a>
                                                    <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                                                    <i class="fa fa-heart ml-3 red-text"></i>
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- Card content -->
                                        </div>
                                        <!-- Card -->
                                </div>
                                <div class="col-md-3 clearfix d-none d-md-block">
                                        <!-- Card -->
                                        <div class="card card-cascade narrower card-ecommerce bg-cook">
                                        <!-- Card image -->
                                            <div class="view overlay white m-2">
                                                <img src="img/galeria/che-03.jpg" class="card-img-top ima-ca-01" alt="sample photo">
                                                <a>
                                                <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>
                                        <!-- Card image -->
                                        <!-- Card content -->
                                        <div class="card-body white">
                                            <!-- Category & Title -->
                                            <a href="" class="text-muted text-center">
                                            <h5 class="bg-cook"><strong class="cook-color">Mariscos</strong> </h5>
                                            </a>
                                            
                                            <!-- Description -->
                                            <p class="card-text text-ju">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit at voluptatum quod ea, necessitatibus pariatur iure sit quo vel rem. Aspernatur rem qui veniam impedit natus incidunt sequi mollitia et!
                                            </p>
                                            <!-- Card footer -->
                                            <div class="">
                                                <span class="float-left">
                                                        <button type="button" class="btn btn-tra red btn-sm mn-t-02">Leer más</button>
                                                </span>
                                                <span class="float-right">
                                                    <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look ">
                                                    <i class="fa fa-eye ml-3 blue-text"></i>     
                                                    </a>
                                                    <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                                                    <i class="fa fa-heart ml-3 red-text"></i>
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- Card content -->
                                        </div>
                                        <!-- Card -->
                                </div>
                                <div class="col-md-3 clearfix d-none d-md-block">
                                        <!-- Card -->
                                        <div class="card card-cascade narrower card-ecommerce bg-cook">
                                        <!-- Card image -->
                                            <div class="view overlay white m-2">
                                                <img src="img/galeria/che-01.jpg" class="card-img-top ima-ca-01" alt="sample photo">
                                                <a>
                                                <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>
                                        <!-- Card image -->
                                        <!-- Card content -->
                                        <div class="card-body white">
                                            <!-- Category & Title -->
                                            <a href="" class="text-muted text-center">
                                            <h5 class="bg-cook"><strong class="cook-color">Mariscos</strong> </h5>
                                            </a>
                                            
                                            <!-- Description -->
                                            <p class="card-text text-ju">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit at voluptatum quod ea, necessitatibus pariatur iure sit quo vel rem. Aspernatur rem qui veniam impedit natus incidunt sequi mollitia et!
                                            </p>
                                            <!-- Card footer -->
                                            <div class="">
                                                <span class="float-left">
                                                        <button type="button" class="btn btn-tra red btn-sm mn-t-02">Leer más</button>
                                                </span>
                                                <span class="float-right">
                                                    <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look ">
                                                    <i class="fa fa-eye ml-3 blue-text"></i>     
                                                    </a>
                                                    <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                                                    <i class="fa fa-heart ml-3 red-text"></i>
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- Card content -->
                                        </div>
                                        <!-- Card -->
                                </div>
                            </div>
                    </div>
                    <!--/Second slide-->
                    <!--Third slide-->
                    <div class="carousel-item ">
                            <div class="row">
                                <div class="col-md-3">
                                        <!-- Card -->
                                        <div class="card card-cascade narrower card-ecommerce bg-cook">
                                        <!-- Card image -->
                                            <div class="view overlay white m-2">
                                                <img src="https://mdbootstrap.com/img/Photos/Others/img%20(27).jpg" class="card-img-top ima-ca-01" alt="sample photo">
                                                <a>
                                                <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>
                                        <!-- Card image -->
                                        <!-- Card content -->
                                        <div class="card-body white">
                                            <!-- Category & Title -->
                                            <a href="" class="text-muted text-center">
                                            <h5 class="bg-cook"><strong class="cook-color">Mariscos</strong> </h5>
                                            </a>
                                            
                                            <!-- Description -->
                                            <p class="card-text text-ju">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit at voluptatum quod ea, necessitatibus pariatur iure sit quo vel rem. Aspernatur rem qui veniam impedit natus incidunt sequi mollitia et!
                                            </p>
                                            <!-- Card footer -->
                                            <div class="">
                                                <span class="float-left">
                                                        <button type="button" class="btn btn-tra red btn-sm mn-t-02">Leer más</button>
                                                </span>
                                                <span class="float-right">
                                                    <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look ">
                                                    <i class="fa fa-eye ml-3 blue-text"></i>     
                                                    </a>
                                                    <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                                                    <i class="fa fa-heart ml-3 red-text"></i>
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- Card content -->
                                        </div>
                                        <!-- Card -->
                                </div>
                                <div class="col-md-3 clearfix d-none d-md-block">
                                        <!-- Card -->
                                        <div class="card card-cascade narrower card-ecommerce bg-cook">
                                        <!-- Card image -->
                                            <div class="view overlay white m-2">
                                                <img src="https://mdbootstrap.com/img/Photos/Others/img%20(29).jpg" class="card-img-top ima-ca-01" alt="sample photo">
                                                <a>
                                                <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>
                                        <!-- Card image -->
                                        <!-- Card content -->
                                        <div class="card-body white">
                                            <!-- Category & Title -->
                                            <a href="" class="text-muted text-center">
                                            <h5 class="bg-cook"><strong class="cook-color">Mariscos</strong> </h5>
                                            </a>
                                            
                                            <!-- Description -->
                                            <p class="card-text text-ju">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit at voluptatum quod ea, necessitatibus pariatur iure sit quo vel rem. Aspernatur rem qui veniam impedit natus incidunt sequi mollitia et!
                                            </p>
                                            <!-- Card footer -->
                                            <div class="">
                                                <span class="float-left">
                                                        <button type="button" class="btn btn-tra red btn-sm mn-t-02">Leer más</button>
                                                </span>
                                                <span class="float-right">
                                                    <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look ">
                                                    <i class="fa fa-eye ml-3 blue-text"></i>     
                                                    </a>
                                                    <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                                                    <i class="fa fa-heart ml-3 red-text"></i>
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- Card content -->
                                        </div>
                                        <!-- Card -->
                                </div>
                                <div class="col-md-3 clearfix d-none d-md-block">
                                        <!-- Card -->
                                        <div class="card card-cascade narrower card-ecommerce bg-cook">
                                        <!-- Card image -->
                                            <div class="view overlay white m-2">
                                                <img src="https://mdbootstrap.com/img/Photos/Others/images/87.jpg" class="card-img-top ima-ca-01" alt="sample photo">
                                                <a>
                                                <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>
                                        <!-- Card image -->
                                        <!-- Card content -->
                                        <div class="card-body white">
                                            <!-- Category & Title -->
                                            <a href="" class="text-muted text-center">
                                            <h5 class="bg-cook"><strong class="cook-color">Mariscos</strong> </h5>
                                            </a>
                                            
                                            <!-- Description -->
                                            <p class="card-text text-ju">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit at voluptatum quod ea, necessitatibus pariatur iure sit quo vel rem. Aspernatur rem qui veniam impedit natus incidunt sequi mollitia et!
                                            </p>
                                            <!-- Card footer -->
                                            <div class="">
                                                <span class="float-left">
                                                        <button type="button" class="btn btn-tra red btn-sm mn-t-02">Leer más</button>
                                                </span>
                                                <span class="float-right">
                                                    <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look ">
                                                    <i class="fa fa-eye ml-3 blue-text"></i>     
                                                    </a>
                                                    <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                                                    <i class="fa fa-heart ml-3 red-text"></i>
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- Card content -->
                                        </div>
                                        <!-- Card -->
                                </div>
                                <div class="col-md-3 clearfix d-none d-md-block">
                                        <!-- Card -->
                                        <div class="card card-cascade narrower card-ecommerce bg-cook">
                                        <!-- Card image -->
                                            <div class="view overlay  white m-2">
                                                <img src="https://mdbootstrap.com/img/Photos/Others/img%20(27).jpg" class="card-img-top ima-ca-01" alt="sample photo">
                                                <a>
                                                <div class="mask rgba-white-slight"></div>
                                                </a>
                                            </div>
                                        <!-- Card image -->
                                        <!-- Card content -->
                                        <div class="card-body white">
                                            <!-- Category & Title -->
                                            <a href="" class="text-muted text-center">
                                            <h5 class="bg-cook"><strong class="cook-color">Mariscos</strong> </h5>
                                            </a>
                                            
                                            <!-- Description -->
                                            <p class="card-text text-ju">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit at voluptatum quod ea, necessitatibus pariatur iure sit quo vel rem. Aspernatur rem qui veniam impedit natus incidunt sequi mollitia et!
                                            </p>
                                            <!-- Card footer -->
                                            <div class="">
                                                <span class="float-left">
                                                        <button type="button" class="btn btn-tra red btn-sm mn-t-02">Leer más</button>
                                                </span>
                                                <span class="float-right">
                                                    <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick Look ">
                                                    <i class="fa fa-eye ml-3 blue-text"></i>     
                                                    </a>
                                                    <a class="" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to Wishlist">
                                                    <i class="fa fa-heart ml-3 red-text"></i>
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                        <!-- Card content -->
                                        </div>
                                        <!-- Card -->
                                </div>
                            </div>
                    </div>
                    <!--/Third slide-->
                </div>

                <!--Controls-->
                <div class="text-center">
                        <button type="button" class="btn bg-cooking btn-circle btn-lg " href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></button>
                        <button type="button" class="btn bg-cooking btn-circle btn-lg" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></button>
                </div>
            
        </div> 
        
        <h4 class="text-center mt-4"> <span class="cook-text-titulo cook-color b-01">CONVENIOS</span></h4>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo nesciunt, qui doloremque ea s tempore perferendis
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur quaerat dolores accusamus corporis, sint odio officia? 
            Corporis culpa assumenda, adipisci reprehenderit nesciunt autem enim tempore quidem tempora officiis, soluta expedita?
        </p>
        
        
        <div id="contenedor_principal" class="" style="display:none;">
                <!--Primera Imagen-->
                <div class="contenedor_imagen mr-2 border p-2  redondear">
                    <div class="imagen">
                        <img class="w-100" src="img/galeria/real-01.png" alt="Sample image">
                    </div>
                </div>
                
                <!--Segunda Imagen-->
                <div class="contenedor_imagen mr-2  border  redondear">
                    <div class="imagen">
                        <img class="w-100" src="img/galeria/open-02.png" alt="Sample image">
                    </div>
                </div>
                
                <!--tercera Imagen-->
                <div class="contenedor_imagen mr-2 border p-2  redondear">
                    <div class="imagen">
                        <img class="w-100" src="img/galeria/italia.png" alt="Sample image">
                    </div>
                </div>
                <div class="contenedor_imagen mr-2 border p-2  redondear">
                    <div class="imagen">
                        <img class="w-100" src="img/galeria/real-01.png" alt="Sample image">
                    </div>
                </div>
                
                <!--Segunda Imagen-->
                <div class="contenedor_imagen mr-2  border  redondear">
                    <div class="imagen">
                        <img class="w-100" src="img/galeria/open-02.png" alt="Sample image">
                    </div>
                </div>
                
                <!--tercera Imagen-->
                <div class="contenedor_imagen mr-2 border p-2  redondear">
                    <div class="imagen">
                        <img class="w-100" src="img/galeria/italia.png" alt="Sample image">
                    </div>
                </div>
             

        </div> 
           
        <img src="img/galeria/conve-02.jpg" alt="" class="w-100">

    </div>  

    <div class="modal fade right" id="fullHeightModalRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-full-height modal-right" role="document">
            <div class="modal-content">
                <div class="modal-header white ">
                    <h5 class="modal-title b-01 " id="exampleModalLabel"><span class="cook-color">Requisitos</span> </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span><span class="sise-t-15">cerrar</span>
                    </button>
                </div>
                <div class="modal-body bg-cooking white-text redondear-cook pl-4 mn-t-01">
                    <div class="comenta-lavel pt-2  sise-t-20">
                        <ul>
                            <li>
                                <p class="sise-t-17">Certificado del 1<sup>ro</sup> al 5<sup>to</sup> de Secundaria.</p>
                            </li>
                            <li>
                                <p class="sise-t-17">Fotografias de tamaño pasaporte</p>
                            </li>
                            <li>
                                <p class="sise-t-17">Fotocopia de Documento de Identidad</p>
                            </li>
                            <li>
                                <p class="sise-t-17"> Recibo de Agua o Luz</p>
                            </li>
                            <li>
                                <p class="sise-t-17">Carnet de sanidad</p> 
                            </li>
                        </ul>
                       
                    </div>
                    <div class="row comenta-form pt-2 pl-4">
                        <div class="col-md-4">
                            <p class="b-01">Inicio</p>
                            <p class="b-01">MATRICULA</p>
                            <p class="b-01">INSCRIPCION</p>
                            <p class="b-01">MENSUALIDAD</p>
                            <P class="b-01">horario</P>
                            <P class="b-01 mt-2">Frecuencia</P>
                        </div>
                        <div class="col-md-8">
                                <input class="form-control form-control-sm-p mb-2 pl-4" type="text" >
                                <input class="form-control form-control-sm-p mb-2" type="text" >
                                <input class="form-control form-control-sm-p mb-2 pl-4" type="text" >
                                <input class="form-control form-control-sm-p mb-2 pl-4" type="text" placeholder="S/450.00">
                                <div class="row sm-02">
                                        <div class="col-4 sm-02">
                                            <input class="form-control form-control-sm-p  mb-2 text-center" type="text" placeholder="Mañana">
                                    </div>
                                    <div class="col-4 sm-02">
                                            <input class="form-control form-control-sm-p  mb-2 text-center" type="text" placeholder="Tarde">
                                    </div>
                                    <div class="col-4 sm-02">
                                            <input class="form-control form-control-sm-p  mb-2 text-center" type="text" placeholder="Noche">
                                    </div>
                                </div>
                                <P class="sise-t-17">Lunes a Viernes</P>  
                        </div>
                    </div>
                    <div class=" pt-2 pl-4">
                            <p class="text-center sise-t-17 b-01 grey-text">Uniforme: S/130.00 Nuevos soles</p>
                            <p class="b-01 sise-t-17">Incluye</p>
                            <ul class="">
                            <li><span class=" sise-t-17">1 Chaqueta</span> </li>
                            <li><span class=" sise-t-17">1 pantalón</span> </li>
                            <li><span class=" sise-t-17">1 mandión</span> </li>
                            <li><span class=" sise-t-17">1 gorro de chef</span> </li>
                            </ul>
                            
                    </div>
                    <img src="img/galeria/centro.jpg" class="w-100" alt="">
                        
                </div>
                <div class="modal-footer">
                
                </div>
            </div>
        </div>
    </div>                
        
        


    @endsection