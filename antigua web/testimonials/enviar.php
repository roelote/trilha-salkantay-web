
<?php 

// Llamamos al archivo de conexión a la base de datos
require("conexion.php");
$usuario = $_POST["usuario"];
$email = $_POST["email"];
$website = $_POST["website"];
$comentario = $_POST["comentario"];
$location = $_POST["location"];
$captcha = $_POST['g-recaptcha-response'];


if($usuario <1 or $email<1 or $website<1)
{
	echo "error";
}
else
{

$secret ='6LcWlFIUAAAAALe3DwXu_HJaBL-uco7YECf1PY0D';
		
		if(!$captcha){

			echo "Por favor verifica el captcha";
			
			} else {
			
			$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");
			
			$arr = json_decode($response, TRUE);
			
			if($arr['success'])
			{
				echo '<h2>Thanks</h2>';
				} else {
				echo '<h3>Error al comprobar Captcha </h3>';
			}
		}

// Codigo de insercion a la base de datos

$insertar = mysqli_query($conexion,"INSERT INTO comentarios (usuario, email, website, comentario, location) VALUES ('$usuario','$email','$website','$comentario','$location')");

 //Writes the photo to the server
        

if (!$insertar) {
	echo "Error al guardar";
} else {
	echo "<div class='alert gray-info' role='alert'>Seu comentário foi enviado com sucesso.. <span class='back-c'><a href='/depoimentos.php'>Ver todos os comentários</a></span>";
}

mysqli_close($conexion);

}

?>

<br/>


