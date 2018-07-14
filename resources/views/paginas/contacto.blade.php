@extends('componentes/navbar')

@section('content')

<div class="container10 text-center">
    <div class="card p-4 bg-cooking-02 black-text">

        <p class=" font-weight-bold sise-t-25 cook-color b-01">Nuestra Direción</p>
        
        <div class="m-textplus-01"><strong>Sede Central :</strong> Av.Ferrocarril 587-Huancayo</div>
        <div class="m-textplus-01"><strong>Sucursal:</strong> Calle Real 275-283-Chilca</div>
        <div class="m-textplus-01">Av.Ricardo Palma 129-Jauja</div>
        <div class="m-textplus-01"><strong>Central Telefónica :</strong> (064) 104578</div>
        <div class="m-textplus-01"><strong>Email: </strong> informes@gmail.com</div>
        <a href="">
            <div class="m-textplus-01 mb-4">
                <span class="b-01">
                    www.cookinggourmet.edu.pe
                </span>
            </div>
        </a>
    </div>
</div>

<div class="container08">
    <!-- Grid row -->
    <div class="row ">
  
        <!-- Grid column -->
        <div class="col-lg-5 mb-lg-0 mb-4">
                <div class="card bg-cooking white-text mb-2">
                    <h3 class="text-center"><i class="fab fa-wpforms mr-4"></i>Formulario de Contacto</h3>
                    </div>
            <!-- Form with header -->
            <div class="border-noti ">
                <div class="card-body m-1 white">
                    <!-- Header -->
                    
                    <p class="m-textplus-nav-0">Para contactarse con nosotros, favor complete el formulario y nos comunicaremos dentro de las próximas 24 hs.</p>
                    <!-- Body -->
                    <div class="md-form">
                    <i class="fa fa-user prefix grey-text"></i>
                    <input type="text" id="form-name" class="form-control">
                    <label for="form-name">Nombres y Apellidos</label>
                    </div>
                    <div class="md-form">
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input type="text" id="form-email" class="form-control">
                    <label for="form-email">Correo Electrónico</label>
                    </div>
                    <div class="md-form">			            
                    <i class="fa fa-phone prefix grey-text" aria-hidden="true"></i>
                    <input type="text" id="form-Subject" class="form-control">
                    <label for="form-Subject">Teléfono</label>
                    </div>
                    <div class="md-form">
                    <i class="fa fa-tag prefix grey-text"></i>
                    <input type="text" id="form-Subject" class="form-control">
                    <label for="form-Subject">Dirección</label>
                    </div>
                    <div class="md-form">
                    <i class="far fa-list-alt prefix grey-text"></i>
                    <textarea type="text" id="form-text" class="form-control md-textarea" rows="3"></textarea>
                    <label for="form-text">Consulta o Solicitud de Presupuesto</label>
                    </div>
                    <div class="text-center">
                    <button class="btn bg-cooking"><i class="fas fa-location-arrow mr-2"></i>Enviar</button>
                    </div>


                </div>
            </div>
            <!-- Form with header -->

            </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-7 mt-4">

            <!-- Google map-->
            <div id="container" class="border-noti p-1 " style="height: auto">
            
                <iframe class="mt-2" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15607.21699285121!2d-75.2156672!3d-12.056985599999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2spe!4v1524698596607" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>


            </div>
        
            <!-- Buttons-->
            
            
            <div class="row container cook-color">

                <div class="col-md-4 text-center">
                    <div class="conta-services-box">
                    <div class="conta-services-box-icon bg-cooking">
                        <i class="fas fa-map-marked-alt" aria-hidden="true"></i>
                    </div>
                    </div>
                            <p class="mt-2  b-01">Huancayo, 94126</p>
                            <p class="mb-md-0 mn-t-01">Junín</p>
            </div>
            <div class="col-md-4 text-center">
                    <div class="conta-services-box">
                    <div class="conta-services-box-icon bg-cooking">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    </div>
                            <p class="mt-2  b-01">Teléfono</p>
                            <p class="mb-md-0 mn-t-01">+ 01 234 567 89</p>
            </div>
            <div class="col-md-4 text-center">
                    <div class="conta-services-box">
                    <div class="conta-services-box-icon bg-cooking">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    </div>
                            <p class="mt-2  b-01">E-mail</p>
                            <p class="mb-0 mn-t-01">cooking-g@gmail.com</p>
            </div>
            
            </div>
            
        </div>
            <!-- Grid column -->

    </div>
    <!-- Grid row -->
</div>
    

@endsection