<?php

$usuario = "root";
$contrasena = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
$servidor = "127.0.0.1";
$basededatos = "estudiantes";


$conexion = mysqli_connect( $servidor, $usuario, $contrasena) or die ("No se ha podido conectar al servidor de Base de datos");

mysqli_select_db($conexion,$basededatos);

if($_POST){
	$cedula = (int) $_POST['Cedula'];
  	$nombre = $_POST['Nombre'];
  	$apellido = $_POST['Apellido'];
  	$correo = $_POST['Correo'];
  	$dir = $_POST['Direccion'];
 	$cel = $_POST['Celular'];
  	$f_n = $_POST['Fecha'];
  	$genero = $_POST['Genero'];
  	$carrera = $_POST['Carrera'];
  	$semestre = $_POST['Semestre'];
  	$turno = $_POST['Turno'];
  	$seccion = $_POST['Seccion'];


 }

 $consulta = "INSERT INTO estudiante(id_est,nombre,apellido,correo,dir,celular,f_n,genero,carrera,semestre,turno,seccion) VALUES ('$cedula','$nombre','$apellido','$correo','$dir','$cel','$f_n','$genero','$carrera','$semestre','$turno','$seccion')";

  	if (mysqli_query($conexion, $consulta)) {
      echo "<script>alert(\"New record created successfully\")
      window.location.href=\"registros.php\";</script>";
      
	} else {
	      echo "<script>alert(\"Hubo un error al guardar al estudiante\");
	      window.location.href=\"registrar.php\";</script>";
	}
	mysqli_close($conexion);


?>