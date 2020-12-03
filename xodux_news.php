<?php
include("conexion_db.php");

if(isset($_POST['send'])){

	if(strlen($_POST['correo']) >= 1) {
		 
		
		$correo = trim($_POST['correo']);
		$consulta = "INSERT INTO news(correo) VALUES ('$correo')";
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

