<?php 

include_once("header.php")

?>


<!-- CONTENIDO -->

<main class="main-content">
				<div class="fullwidth-block inner-content">
					<div class="container">
						<h2 class="page-title">Contactanos</h2>
						<div class="row">
							<div class="col-md-6">
								<form method="post" name="contacto" class="contact-form"  onsubmit="return validar_contacto()">
									<input type="text" name="nombre" id="nombre" placeholder="Nombre"..>
									<input type="email" name="correo" id="correo" placeholder="Correo">
									<input type="text" name="asunto" id="asunto" placeholder="Asunto">
									<textarea name="mensaje" id="mensaje" placeholder="Mensaje"></textarea>
									<input type="submit" class="btn btn-outline-light text-dark" name="enviar" id="enviar" value="Enviar">
								</form>
							</div>
							<div class="col-md-6">
								<div class="map-wrapper">
									<div class="map"></div>
									<address>
										<div class="row">
											<div class="col-sm-6">
												<strong>Xodux Media.</strong>
												<span>Calle Duarte 123.</span>
											</div>
											<div class="col-sm-6">
												<a href="mailto:office@companyname.com">office@xodux.com</a> <br>
												<a href="tel:532930098891">(809) 930 0988</a>
											</div>
										</div>
									</address>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- .testimonial-section -->

				<?php 
			
			include_once("xodux_contacto.php")
			
			?>
			</main> <!-- .main-content -->

<!-- CONTENIDO -->

<script>
	   
	   function validar_contacto(){
	   
		   if ( document.contacto.nombre.value == ""){
			   alert('Ingrese un nombre  valido.');
			   return false
			   }
		   
			 if ( document.contacto.correo.value == ""){
				   alert('Ingrese un correo electronico valido.');
				   return false
				   }
		   
	   
			   if ( document.contacto.asunto.value == ""){
				   alert('Ingrese un tema.');
				   return false
				   }
			   
			 
		   
					 
		   
		   if(document.contacto.mensaje.value.length <10){
	   alert('Comenta mas de 10 caracteres')
	   return false;
	   }
						   
						   
			   
		   
	   
	   }
			  
			  
			  </script>
	   

<?php 

include_once("footer.php")

?>