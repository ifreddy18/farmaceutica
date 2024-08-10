<div id="page-title-background">
		<div id="page-title">
			<div class="width-container">
				<h1>Contáctenos</h1>
				<div id="page-title-description">
					<p>Su opinión es muy importante<br />
                    Por favor llene el siguiente formulario de contacto con sus datos y en breve estaremos en contacto con usted. </p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<script type="text/javascript">jQuery(document).ready(function($) {   $("#page-title-background").backstretch([ "images/page-title-contact.jpg" ],{ fade: 750, }); }); </script>
	</div>	
	
	<div id="main">
		<div class="width-container bg-sidebar-pro">
			<div id="sidebar-border">
				<div id="content-container">
					<div class="content-container-pro">
						<h2>Formulario de contacto</h2>
						<?php if($alertMessage != "" && $alertClass != ""){?>
                        <div class="alert <?php echo $alertClass; ?>">
                          <?php echo $alertMessage; ?>
                        </div>
                        <?php }?>
                        
                        <form class="progression-contact wpcf7" id="CommentForm" method="post" action="">
								<fieldset>
									<div>
										<p><input id="ContactName" name="name" class="textInput required" placeholder="Nombre completo" value="<?php echo $_POST['name'];?>"/></p>
									</div>
									<div>
										<p><input id="ContactEmail" name="email" class="textInput required email" placeholder="E-mail" value="<?php echo $_POST['email'];?>"/></p>
									</div>
									<div>
										<p><input id="ContactPhone" name="phone" class="textInput digits" placeholder="Teléfono" value="<?php echo $_POST['phone'];?>"/></p>
									</div>
									<div>
										<p><textarea id="ContactComment" name="comments" class="textInput required" rows="10" cols="4" placeholder="Comentario"><?php echo $_POST['comments'];?></textarea></p>
									</div>
									<div>
    									<div class="g-recaptcha" data-sitekey="6Le5PJwUAAAAAAkYoQ5YsBi64xxsSXBq9AEkKkyJ" style="margin:10px auto 40px auto;"></div>
									</div>
									<div>
										<p><button type="submit" class="progression-contact-submit wpcf7-submit"><span>Enviar</span></button></p>
									</div>
								</fieldset>
						</form>	
					</div>
				</div>
				<div id="sidebar">
					<div class="sidebar-item widget">
						<h6 class="widget-title">Dirección</h6>
                        <p><strong>Farmaceútica Mundial de Venezuela C.A.</strong><br />
                        Av. 68 cruce con Calle 101 Urbanización Industrial Castillito<br />
                        C.C. Boulevar Local #7<br />
                        Valencia (Estado Carabobo)<br />Republica Bolivariana de Venezuela
                        </p>
                        <h6 class="widget-title">Teléfonos</h6>
                        <p>241-8717406 / 241-8716420</p>
                        <h6 class="widget-title">Email</h6>
                        <p>farmuvenca@gmail.com</p>
					<div class="sidebar-divider"></div>
					</div>
					
					<div class="sidebar-item widget pyre_social_media-feat">
						<h6 class="widget-title">Redes Sociales</h6>
						<div class="social-icons-widget-pro">
							<div class="social-ico">
								<a href="http://facebook.com" target="_blank"><i class="fa fa-facebook"></i>
								</a> 
								<a href="http://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
								<a href="http://plus.google.com" target="_blank"><i class="fa fa-google-plus"></i></a>
								<a href="http://linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a>
								<a href="http://pinterest.com" target="_blank"><i class="fa fa-pinterest"></i></a>
							</div>
						</div>
						<div class="sidebar-divider"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	
	<script src='https://www.google.com/recaptcha/api.js?hl=es' async defer></script>