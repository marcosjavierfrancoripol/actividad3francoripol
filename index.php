<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>registro del cliente</h1>
    	<input type="text" name="nombre" placeholder="Nombre">
    	<input type="text" name="apellido" placeholder="apellido">
		<input type="number" name="edad" placeholder="edad">
    	<input type="tel" name="telefono" placeholder="telefono">
		<input type="email" name="email" placeholder="Email">

    	<input type="submit" name="register">
    </form>
        <?php 
        include("cliente.php");
        ?>
</body>
</html>