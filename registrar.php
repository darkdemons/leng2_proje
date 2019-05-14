<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body class=" blue lighten-2">
      <nav>
        <div class="nav-wrapper blue">
          <a href="index.php" class="brand-logo">Estudiantes</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="index.php">Inicio</a></li>
            <li class="active"><a href="registrar.php" >Registrar</a></li>
            <li><a href="registros.php">Registros</a></li>
          </ul>
          <a class='dropdown-trigger hide-on-large-only right' href='#' data-target='dropdown1' style="margin-right: 15px;"><i class="small material-icons">menu</i></a>
        </div>
     </nav>


     <!-- Dropdown Structure -->
        <ul id='dropdown1' class='dropdown-content'>
            <li ><a href="index.php" >Inicio</a></li>
            <li class="active"><a href="registrar.php">Registrar</a></li>
          <li><a href="registros.php">Registros</a></li>
        </ul>
            





        <div class="container white" style="margin-top: 30px;">
          <div class="row">
            <form class="col s12" action="guardarregistro.php" method="post">
              <div class="row">
                <div class="input-field col s12 m4">
                  <input  name="Cedula" id="cedula" type="number" class="validate">
                  <label for="cedula">C.I</label>
                </div>
                <div class="input-field col s6 m4">
                  <input  name="Nombre" id="nombre" type="text" class="validate">
                  <label for="nombre">Nombre</label>
                </div>
                <div class="input-field col s6 m4">
                  <input id="apellido" name="Apellido" type="text" class="validate">
                  <label for="apellido">Apellido</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12 m6">
                  <input  id="correo" name="Correo" type="email" class="validate">
                  <label for="correo">Correo</label>
                </div>
                <div class="input-field col s12 m6">
                  <input id="direccion" name="Direccion" type="text">
                  <label for="direccion">Direccion</label>
                </div>
                
              </div>
              
              <div class="row">

                <div class="input-field col s6 m3">
                  <input id="celular" name="Celular"  type="tel" class="validate">
                  <label for="celular">celular</label>
                </div>

                <div class="input-field col s6 m3">
                  <input type="text" id="fecha" name="Fecha" class="datepicker">
                  <label for="fecha">Fecha de Nacimiento</label>
                </div>

                <div class="input-field col s6 m3">
                  <select name="Genero">
                    <option value="" disabled selected>Seleccionar</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                  </select>
                  <label>Genero</label>
                </div>

                <div class="input-field col s6 m3">
                  <select name="Carrera">
                    <option value="" disabled selected>Seleccionar</option>
                    <option value="Sistemas">Sistemas</option>
                    <option value="Mecanica">Mecanica</option>
                    <option value="Telecom">Telecom</option>
                    <option value="Electrica">Electrica</option>
                    <option value="Desastre">Desastre</option>
                    <option value="Educacion">Educacion</option>
                  </select>
                  <label>Carrera</label>
                </div>
                 
              </div>
              <div class="row">
                
                <div class="input-field col s6 m4">
                  <select name="Semestre">
                    <option value="" disabled selected>Seleccionar</option>
                    <option value="CINU">CINU</option>
                    <option value="1ro">Primer semestre</option>
                    <option value="2do">Segundo semestre</option>
                    <option value="3ro">Tercer semestre</option>
                    <option value="4to">Cuarto semestre</option>
                    <option value="5to">Quinto semestre</option>
                    <option value="6to">Sexto semestre</option>
                    <option value="7mo">Septimo semestre</option>
                    <option value="8vo">Octavo semestre</option>
                    <option value="9no">Noveno semestre</option>
                  </select>
                  <label>Semestre</label>
                </div>
                
                <div class="input-field col s6 m4">
                  <select name="Turno">
                    <option value="" disabled selected>Seleccionar</option>
                    <option value="Diurno">Diurno</option>
                    <option value="Nocturno">Nocturno</option>
                    
                  </select>
                  <label>Turno</label>
                </div>

                <div class="input-field col s6 m4">
                  <input id="seccion" name="Seccion" type="text" class="validate">
                  <label for="seccion">Seccion</label>
                </div>

              </div>
           
              <button class="btn waves-effect waves-light" type="submit" name="action">Registrar
                <i class="material-icons right">send</i>
              </button>
            
              
            </form>
          </div>
                  
        </div>
  
        












      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript">
         document.addEventListener('DOMContentLoaded', function() {
          var elems = document.querySelectorAll('.datepicker');
          var instances = M.Datepicker.init(elems,{
            format: "dd/mm/yyyy",
            minDate: new Date('01/01/60'),
            maxDate: new Date(),
            yearRange: [1950,2004]
          });
            });

          

          document.addEventListener('DOMContentLoaded', function() {
          var elems = document.querySelectorAll('.dropdown-trigger');
          var instances = M.Dropdown.init(elems, {
          coverTrigger: false
          });
          });

           

           M.AutoInit();
      </script>
    </body>
  </html>