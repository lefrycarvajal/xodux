<footer class="site-footer">
				<div class="container">
					<img src="img/logo1.png" width="150px" alt="Site Name">
					
					<address>
						<p>495 Brainard St. Detroit, MI 48201 <br><a href="tel:354543543">(563) 429 234 890</a> <br> <a href="mailto:info@bandname.com">info@bandname.com</a></p> 
					</address> 
					
					<form method="post" name="contacto" onsubmit="return validar_contacto()" class="newsletter-form">
						<input type="email" id="correo" name="correo" placeholder="Enter your email to join newsletter...">
						<input type="submit" class="button cut-corner" name="send" id="enviar" value="Subscribe">
					</form> <!-- .newsletter-form -->
					
					<div  class="social-links">
						<a style="color:white" href="#"><i class="fa fa-facebook-square"></i></a>
						<a style="color:white" href="#"><i class="fa fa-twitter"></i></a>
						<a style="color:white" href="#"><i class="fa fa-google-plus"></i></a>
						<a style="color:white" href="#"><i class="fa fa-pinterest"></i></a>
					</div> <!-- .social-links -->
					
					<p style="color:white" class="copy">© 2020 Xodux Media.</p>
				</div>
			</footer> <!-- .site-footer -->

			<?php 
			
			include_once("xodux_news.php")
			
			?>

		</div> <!-- #site-content -->

		<script src="js/jquery-1.11.1.min.js"></script>		
		<script src="js/plugins.js"></script>
        <script src="js/app.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
			integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
			crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
			integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
			crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
			integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
            <script>
                $('#myCarousel').on('slide.bs.carousel', function () {
  // do something…
})
			</script>
			
			<script>
	   
	   function validar_contacto(){
	   
		   
			 if ( document.contacto.correo.value == ""){
				   alert('Ingrese un correo electronico valido.');
				   return false
				   }
		   		   
						   
			   
		   
	   
	   }
			  
			  
			  </script>

		
	</body>

</html>