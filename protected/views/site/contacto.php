<script type="text/javascript">
	$("#contacto").addClass("active");
</script>
<div id="page"><!-- - - - - - - - - - SECTION - - - - - - - - - -->

<div class="pi-section-w pi-section-base pi-section-parallax" style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/img/slide4-01.jpg);">
	<div class="pi-texture" style="background: rgba(24, 28, 32, 0.8);"></div>
	<div class="pi-section pi-padding-top-100 pi-padding-bottom-80 pi-text-center">

		<br>
		<p></p>
		<br>
		<p></p>
		<br>
		
	</div>
</div>

<!-- - - - - - - - - - END SECTION - - - - - - - - - -->

<!-- - - - - - - - - - SECTION - - - - - - - - - -->

<div class="pi-section-w pi-section-white piICheck piStylishSelect piSocials">
	<div class="pi-section">
		<div class="pi-row">
			<div class="pi-col-dm-12">
			<?php if (isset($mensaje_exito)): ?>
				<div class="pi-alert pi-alert-success">
			        Felicidades!!! <?php echo $mensaje_exito ?>.
			    </div>
			<?php endif ?>

			<?php if (isset($mensaje_error)): ?>
				<div class="pi-alert pi-alert-danger">
			        Atención!!! <?php echo $mensaje_error ?>.
			    </div>
			<?php endif ?>
			</div>
		</div>
		<div class="pi-row">
			<div class="pi-col-sm-6">
				<h2 class="h4 pi-has-bg pi-weight-700 pi-uppercase pi-letter-spacing pi-margin-bottom-30">
					Ponte en contacto
				</h2>

				<!-- Contact form -->
				<form role="form" method="post" action="<?php echo Yii::app()->request->baseUrl; ?>/contacto">

					<div class="pi-error-container"></div>

					<div class="form-group">
						<label for="exampleInputName1">Nombres *</label>
						<input type="text" required name="nombres" class="form-control form-control-name" id="exampleInputName1"
							   placeholder="e.g. Adam Smith">
					</div>

					<div class="form-group">
						<label for="exampleInputEmail1">Correo Electrónico *</label>
						<input type="email" required name="correo" class="form-control form-control-email" id="exampleInputEmail1"
							   placeholder="e.g. mail@example.com">
					</div>

					<div class="form-group">
						<label for="exampleInputPhone">Teléfono</label>
						<input type="text" name="telefono" class="form-control form-control-phone" id="exampleInputPhone"
							   placeholder="Fijo o Celular">
					</div>

					<div class="form-group">
						<label for="exampleInputMessage1">Mensaje *</label>
						<textarea name="mensaje" required class="form-control form-control-comments" id="exampleInputMessage1" placeholder="Cómo podemos ayudarte?"
								  rows="3"></textarea>
					</div>
					<p>
						<input type="submit" value="Enviar Mensaje" class="btn pi-btn">
					</p>
				</form>
				<!-- End contact form -->

			</div>
			<div class="pi-col-sm-6">

				

				<h2 class="h4 pi-has-bg pi-weight-700 pi-uppercase pi-letter-spacing pi-margin-bottom-30">
					Contáctanos
				</h2>
				
				<p>
					
				</p>

				<p class="h6 pi-uppercase pi-weight-700 pi-padding-top-20">
					<i class="icon-location pi-text-base" style="margin-right: 5px;"></i>  <?php echo $contacto->DIRECCION ?>
				</p>

				<p class="h6 pi-weight-700">
					<i class="icon-mail pi-text-base" style="margin-right: 5px;"></i> <a href="#" class="pi-link-dark"><?php echo $contacto->CORREO ?></a>
				</p>

				<p class="h6 pi-uppercase pi-weight-700  pi-padding-bottom-30">
					<i class="icon-phone pi-text-base" style="margin-right: 5px;"></i>  <?php echo $contacto->TELEFONOS ?>
				</p>

				<p>
					<?php echo $contacto->HORARIO ?>
				</p>

				<ul class="pi-social-icons pi-jump pi-colored-bg pi-small pi-round pi-padding-top-10  pi-padding-bottom-30">
					<?php if ($contacto->FACEBOOK !=""): ?>
						<li><a href="<?php echo $contacto->FACEBOOK ?>" target="_blank" class="pi-social-icon-facebook"><i class="icon-facebook"></i></a></li>
					<?php endif ?>
					<?php if ($contacto->TWITTER !=""): ?>
						<li><a href="<?php echo $contacto->TWITTER ?>" target="_blank" class="pi-social-icon-twitter"><i class="icon-twitter"></i></a></li>
					<?php endif ?>
					
				</ul>
				
				
				
			</div>
		</div>
		
	</div>
</div>

<!-- - - - - - - - - - END SECTION - - - - - - - - - -->
</div>

<div class="pi-google-map"
			 data-map-type="roadmap"
			 data-map-zoom="16"
			 data-map-style="base"
			 data-map-marker="<?php echo Yii::app()->request->baseUrl; ?>/img/rsz_dinamov-logo.png"
			 data-map-marker-size="67,81"
			 data-map-marker-anchor="33,81"
			 data-map-address="4.638255, -74.060900">
		</div>