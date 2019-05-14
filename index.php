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
		        <li class="active"><a href="index.php" >Inicio</a></li>
		        <li><a href="registrar.php">Registrar</a></li>
		        <li><a href="registros.php">Registros</a></li>
		      </ul>
		      <a class='dropdown-trigger hide-on-large-only right' href='#' data-target='dropdown1' style="margin-right: 15px;"><i class="small material-icons">menu</i></a>
		    </div>
		 </nav>
   <!-- Dropdown Structure -->
        <ul id='dropdown1' class='dropdown-content'>
          	<li class="active"><a href="index.php" >Inicio</a></li>
          	<li><a href="registrar.php">Registrar</a></li>
        	<li><a href="registros.php">Registros</a></li>
        </ul>
            


 <!-- aqui va el contenido de la pagina como tal-->

		<div class="container">
			<div class="row">
				<div class="col s12">
					<h3 class="center-align white-text">Bienvenido, que desea hacer?</h3>
				</div>
				<div class="col s6 ">
					
					  <div class="row">
					    <div class="col s12">
					      <div class="card blue">
					        <div class="card-content white-text">
					          <span class="card-title">Registrar</span>
					          <p>Registrar a un estudiante, con sus datos y respectivas carreras.</p>
					        </div>
					        <div class="card-action">
					          <a href="registrar.php">Registrar</a>
					          
					        </div>
					      </div>
					    </div>
					  </div>
				</div>
				<div class="col s6">
					  <div class="row">
					    <div class="col s12">
					      <div class="card blue">
					        <div class="card-content white-text">
					          <span class="card-title">Ver registros</span>
					          <p>Ver una lista de los estudiantes registrados en el sistema.</p>
					        </div>
					        <div class="card-action">
					          <a href="registros.php">Registros</a>
					          
					        </div>
					      </div>
					    </div>
					  </d
				</div>
			</div>
        	
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