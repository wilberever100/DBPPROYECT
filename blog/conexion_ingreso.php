
<?php

$dbname = 'YourMovie';

$dbuser = 'root'; /*Aquí colocar usuario*/

$dbpass = 'root'; /*Aquí colocar la contraseña*/

$dbhost = 'localhost';
	$nickname = $_POST['usuario'];
	$password = $_POST['contrasenia'];

$connect = mysqli_connect('localhost', 'root', '') or die("No se puede conectar a 'localhost'");

mysqli_select_db($connect, 'YourMovie') or die("No se puede abrir '$dbname'");
$consulta ="SELECT * FROM USUARIO WHERE user = '".$nickname."' AND password = '".$password."';";
$result = $connect->query($consulta);
	if($result){
		if($result->num_rows == 1)
			
			header('Location: index.php?user='.$nickname );
		else
			echo "Usuario o contraseña incorrectos";
	}
	else{
		echo "Error al enviar datos al servidor";
	}
	$connect->close();



?>