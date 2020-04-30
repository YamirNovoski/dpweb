<?php include 'cabeza.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-12">
        <h2 class="contact-title">Contactenos</h2>
        </div>
        <div class="col-lg-8">
        <form class="form-contact contact_form" id="contactForm" action="conguardar.php" method="post"  enctype="multipart/form-data">
            <!-- Informacion de contacto -->
            <div class="row">
                <!-- Nombre -->
                <div class="col-sm-6">
                    <div class="form-group">
                        <input type="text" name="Nombre" class="form-control valid" id="Nombre" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingrese su nombre'" placeholder="Ingrese su nombre">
                    </div>
                </div>
                <!-- Correo -->
                <div class="col-sm-6">
                    <div class="form-group">
                        <input name="email" class="form-control valid" id="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingrese su email'" type="email" placeholder="Email">
                    </div>
                </div>
                <!-- Asunto -->
                <div class="col-12">
                    <div class="form-group">
                        <input name="Asunto" class="form-control" id="subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Asunto'" type="text" placeholder="Asunto">
                    </div>
                </div>
                 <!-- Mensaje -->
                <div class="col-12">
                    <div class="form-group">
                        <textarea name="Msj" class="form-control w-100" id="Msj" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingrese el mensaje'" placeholder=" Ingrese su mensaje" rows="9" cols="30"></textarea>
                    </div>

                </div>
            </div>
               <div class="form-group mt-3">
               <button type="submit" name="btn" value="Guardar" class="btn btn-succes" heigth="50"  onclick="ale();">Guardar<i class="fas fa-save"></i></button>
            </div>
        </form>
        </div>

        
        <div class="col-lg-3 offset-lg-1">
            <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-home"></i></span>
                <div class="media-body">
                    <h3>San Salvador</h3>
                    <p>UTEC, CA 91770</p>
                </div>
            </div>
            <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                <div class="media-body">
                    <h3>+503 22628402</h3>
                    <p>de 6am a 8pm </p>
                </div>
            </div>
            <div class="media contact-info">
                <span class="contact-info__icon"><i class="ti-email"></i></span>
                <div class="media-body">
                    <h3>soporte@jardineria.com</h3>
                    <p>escribenos!</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function ale(){
        alert('muy pronto nos pondremos en contacto con tigo');
    }
    
</script>
<?php include 'pie.php'; ?>