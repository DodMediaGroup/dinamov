<script type="text/javascript">
	$("#comotrabajamos").addClass("active");
</script>
<div id="page">
	
	<div class="pi-section-w pi-section-base pi-section-parallax" style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/img/paisaje1.jpg);">
		<div class="pi-texture" style="background: rgba(24, 28, 32, 0.8);"></div>
		<div class="pi-section pi-padding-top-100 pi-padding-bottom-80 pi-text-center" style="height:350px">
			
		</div>
	</div>
	<!-- - - - - - - - - - END SECTION - - - - - - - - - -->
	<!-- - - - - - - - - - SECTION - - - - - - - - - -->
	<div class="pi-section-w pi-section-white pi-border-top">
		<div class="pi-section pi-padding-bottom-20">
			<h4 class=" pi-uppercase pi-has-bg pi-margin-bottom-30">
				<a href="#" class="pi-link-dark">cómo trabajamos</a>
			</h4>
			<!-- Row -->
			<div class="pi-row" style="text-align: left">
				<!-- Col 6 -->
				<div class="pi-col-sm-4 pi-margin-bottom-30 texto-noticias marco-linea-verde" style="padding-right: 0px;">
					<h4 class=" pi-uppercase border_bootom_green"><?php echo $comoTrabajamos[0]->TITULO ?></h4>
					<?php echo $comoTrabajamos[0]->DESCRIPCION ?>
					<br>
				</div>
				<!-- End col 6 -->
				<!-- Col 6 -->
				<div class="pi-col-sm-8 pi-margin-bottom-30 texto-noticias">
					<?php echo $comoTrabajamos[0]->CONTENIDO ?>
				</div>
				<!-- End col 6 -->
			</div>
			<!-- End row -->	
		</div>
	</div>
<!-- - - - - - - - - - END SECTION - - - - - - - - - -->
	<div class="pi-section-w pi-section-base pi-section-parallax" style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/img/paisaje2.jpg);">
		<div class="pi-texture" style="background: rgba(24, 28, 32, 0.8);"></div>
		<div class="pi-section pi-padding-top-100 pi-padding-bottom-80 pi-text-center" style="height:350px">
			
		</div>
	</div>
	<!-- - - - - - - - - - SECTION - - - - - - - - - -->
	<div class="pi-section-w pi-section-white pi-border-top">
		<div class="pi-section pi-padding-bottom-20">
			<?php $contador=0 ?>
			<?php foreach ($comoTrabajamos as $ct): ?>
				<?php if ($contador>0): ?>
					<div class="pi-row" style="text-align: left">
						<!-- Col 6 -->
						<div class="pi-col-sm-4 pi-margin-bottom-30 texto-noticias top-50" style="padding-right: 0px;">
							<h4 class=" pi-uppercase border_bootom_green"><?php echo $ct->TITULO ?></h4>
							<?php echo $ct->DESCRIPCION ?>
						</div>
						<!-- End col 6 -->
						<!-- Col 6 -->
						<div class="pi-col-sm-8 pi-margin-bottom-30 texto-noticias marco-completo-verde">
							<?php echo $ct->CONTENIDO ?>
						</div>
						<!-- End col 6 -->
					</div>
				<?php endif; $contador++ ?>
			<?php endforeach ?>	
		</div>
	</div>
<!-- - - - - - - - - - END SECTION - - - - - - - - - -->
<script type="text/javascript">

	var contador=false;	

	jQuery(document).ready(function($) {
		var elemento = $(".lista-ordenada li").last();
		var posicion = elemento.position();
		$(".marco-linea-verde").css('height', posicion.top+31);
	});

	function resize_linea_verde () {
		var elemento = $(".lista-ordenada li").last();
		var posicion = elemento.position();
		$(".marco-linea-verde").css('height', posicion.top+7);
		console.log('-----'+posicion.top+31);
	}

	$(window).resize(function(event) {
		if(contador){
			if($(window).width()>=750){
				resize_linea_verde();
			}else{
				$(".marco-linea-verde").css('height', "auto");
			}
		}else{
			contador=true;
		}
	});
</script>
</div>