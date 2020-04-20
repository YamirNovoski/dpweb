
<?php 
  include 'cabeza.php';
?>

<style>
  * {box-sizing: border-box}

  /* Add padding to containers */
  .container {
    padding: 16px;
  }

  /* Full-width input fields */
  input[type=text], input[type=email], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
  }

  input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
  }

  /* Overwrite default styles of hr */
  hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
  }

  /* Set a style for the submit/register button */
  .registerbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
  }

  .registerbtn:hover {
    opacity:1;
  }

  /* Add a blue text color to links */
  a {
    color: dodgerblue;
  }

  /* Set a grey background color and center the text of the "sign in" section */
  .signin {
    background-color: #f1f1f1;
    text-align: center;
  }
</style>

<div class="container">

    <form action="registro.html">
        <div class="container">

            <h1>¿Eres nuevo? Registrate con nosotros</h1>
            
            <p>Es muy facil y sencillo, solo tienes que llenar el siguiente formulario.</p>
            <hr>

            <!--Nombre y apellido-->
            <div class="row">
                <div class="col-sm-6">
                      <div class="form-group">
                          <label for="nombre"><b>Nombre</b></label>
                          <input type="text" placeholder="Ingrese su nombre" name="nombre" onkeypress="return SoloLetras(event);" onpaste="return false" min="2" maxlength="30" required>
                      </div>
                </div>
                <div class="col-sm-6">
                      <div class="form-group">
                          <label for="apellido"><b>Apellido</b></label>
                          <input type="text" placeholder="Ingrese su apellido" name="apellido" onkeypress="return SoloLetras(event);" onpaste="return false" min="2" maxlength="30" required>
                      </div>
                </div>
            </div>
            <!--Usuario, Telefono y Correo-->
            <div class="row">
                <div class="col-sm-4">
                      <div class="form-group">
                          <label for="username"><b>Nombre de usuario</b></label>
                          <input type="text" placeholder="Ingrese su nombre de usuario" name="username" required>
                      </div>
                </div>
                <div class="col-sm-4">
                      <div class="form-group">
                          <label for="email"><b>Email</b></label>
                          <input type="email" placeholder="Ingrese Email" name="email" required>
                      </div>
                </div>
                <div class="col-sm-4">
                      <div class="form-group">
                          <label for="telefono"><b>Telefono</b></label>
                          <input type="text" placeholder="Ingrese su numero telefonico" name="telefono" min="8" maxlength="8" required>
                      </div>
                </div>
            </div>
            <!--Departamento y Municipio-->
            <div class="row">
                <div class="col-sm-4">
                      <div class="form-group">
                          <label for="user_dir"><b>Dirección</b></label>
                          <input type="text" placeholder="Ingrese su dirección" name="user_dir" required>
                      </div>
                </div>
                <div class="col-sm-4">
                      <div class="form-group">
                          <label for="departamento"><b>Departamento</b></label>
                          <br />
                          
                          <select id="dptos" name="dptos">

                              <?php 
                                  include 'conexion.php';
                                  $consulta = "SELECT * FROM departamentos";
                                  $ejecutar = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));
                              ?>

                              <?php foreach ($ejecutar as $opciones): ?>

                              <option value="<?php echo $opciones['cod_dpto']?>">
                                  <?php echo $opciones['nom_dpto']?>
                              </option>

                              <?php endforeach ?>
                              
                          </select>
                      </div>
                </div>
                <div class="col-sm-4">
                      <div id="lis_mun" class="form-group">

                      </div>
                </div>

            </div>

            <!--Contraseña-->
            <div class="row">
                <div class="col-sm-6">
                      <div class="form-group">
                          <label for="psw"><b>Contraseña</b></label>
                          <input type="password" placeholder="Ingrese contraseña" name="psw" required>
                      </div>
                </div>
                <div class="col-sm-6">
                      <div class="form-group">
                          <label for="psw-repeat"><b>Confirme su contraseña</b></label>
                          <input type="password" placeholder="Repita su contraseña" name="psw-repeat" required>
                      </div>
                </div>
            </div>

            <hr>

            <p>Esta de acuerdo con nuestras <a href="#">Politicas de privacidad</a>.</p>
            <button type="submit" class="registerbtn">Registrarme</button>

        </div>

    <div class="container signin">
      <p>Ya tengo cuenta <a href="login.php">Login</a>.</p>
    </div>
    </form>

</div>
<?php include 'pie.php' ?>
<
<script type="text/javascript">
    $(document).ready(function(){
        $('#dptos').val(1);
        recargarLista();

    $('#dptos').change(function(){
        recargarLista();
    });
    })
</script>
<script type="text/javascript">
    function recargarLista(){
        $.ajax({
            type:"POST",
            url:"datamun.php",
            data:"depart=" + $('#dptos').val(),
            success:function(r){
                $('#lis_mun').html(r);
            }
        });
    }
</script>

<script src="assets/js/ValSur.js"></script>