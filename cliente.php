<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['edad']) >= 1 && strlen($_POST['telefono']) >= 1 && strlen($_POST['email']) >= 1) {
	    $name = trim($_POST['nombre']);
	    $ape = trim($_POST['apellido']);
	    $edad = trim($_POST['edad']);
		$tele = trim($_POST['telefono']);
		$email =trim($_POST['email']);
	    $consulta = "INSERT INTO cliente(nombre, apellido, edad, telefono, email) VALUES ('$name','$ape','$edad','$tele','$email')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>