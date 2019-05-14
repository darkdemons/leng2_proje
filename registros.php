
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
            <li><a href="registrar.php">Registrar</a></li>
            <li class="active"><a href="registros.php" >Registros</a></li>

          </ul>

             <!-- Dropdown Trigger -->
            <a class='dropdown-trigger hide-on-large-only right' href='#' data-target='dropdown1' style="margin-right: 15px;"><i class="small material-icons">menu</i></a>          
        </div>
      </nav>    

        <!-- Dropdown Structure -->
        <ul id='dropdown1' class='dropdown-content'>
          <li ><a href="index.php" >Inicio</a></li>
          <li><a href="registrar.php">Registrar</a></li>
          <li class="active"><a href="registros.php">Registros</a></li>
        </ul>

        <div class="container" style="overflow-y: scroll; width: 90%;height: 80%;">
          <table class="responsive-table">
        <thead>
          <tr>
              <th>C.I</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Correo</th>
              <th>Celular</th>
              <th>Direccion</th>
              <th>Genero</th>
              <th>Fecha</th>
              <th>Carrera</th>
              <th>Semestre</th>
              <th>Seccion</th>
              <th>Turno</th>
              


              
          </tr>
        </thead>

        <tbody>
             <?php 

              $usuario = "root";
              $contrasena = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
              $servidor = "127.0.0.1";
              $basededatos = "estudiantes";


              $conexion = mysqli_connect( $servidor, $usuario, $contrasena) or die ("No se ha podido conectar al servidor de Base de datos");

              mysqli_select_db($conexion,$basededatos);

              $slq = "SELECT * FROM estudiante";
              $resultado = mysqli_query($conexion,$slq);

              while ($fila = mysqli_fetch_array($resultado)) {
                echo "
                <tr>
                  <td>".$fila["id_est"]."</td>
                  <td>".$fila["nombre"]."</td>
                  <td>".$fila["apellido"]."</td>
                  <td>".$fila["correo"]."</td>
                  <td>".$fila["celular"]."</td>
                  <td>".$fila["dir"]."</td>
                  <td>".$fila["genero"]."</td>
                  <td>".$fila["f_n"]."</td>
                  <td>".$fila["carrera"]."</td>
                  <td>".$fila["semestre"]."</td>
                  <td>".$fila["seccion"]."</td>
                  <td>".$fila["turno"]."</td>
                </tr>

                  ";
            
                }



               ?>
        </tbody>
      </table>
        </div>
        


             
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript">
          document.addEventListener('DOMContentLoaded', function() {
          var elems = document.querySelectorAll('.dropdown-trigger');
          var instances = M.Dropdown.init(elems, {
          coverTrigger: false
          });
          });
      </script>
    </body>
  </html>