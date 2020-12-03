<?php
include("conexion_db.php");

if(isset($_POST['enviar'])){

	if(strlen($_POST['nombre']) >= 1 &&
   	  
	   strlen($_POST['correo']) >= 1 &&
	   
	   strlen($_POST['asunto']) >= 1 &&
		 
	   strlen($_POST['mensaje']) >= 1) {
	
		
		$nombre = trim($_POST['nombre']);
		$correo = trim($_POST['correo']);
		$asunto = trim($_POST['asunto']);
		$mensaje = trim($_POST['mensaje']);
		$consulta = "INSERT INTO contacto(nombre, correo, asunto, mensaje) VALUES ('$nombre','$correo','$asunto','$mensaje')";
		$resultado = mysqli_query($conex,$consulta);
		if($resultado) {
			
			?>
<div class="container">
	<div class="alert alert-succes alert-dismissible fade show" role="alert">
   Su mensaje ha sido enviado.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
</div>
<?php
		} else {
			?>
			<div class="container">
	<div class="alert alert-danger alert-dismissible fade show" role="alert">
   Hemos Fallado.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
</div>
			
			<?php
			}
		} else {
		
              ?>
<div class="container">
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
   Por Favor rellena los campos.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
</div>
			<?php
			
		}
		
}



?>


